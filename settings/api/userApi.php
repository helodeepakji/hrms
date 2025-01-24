<?php
include __DIR__ . '/../database/conn.php';
session_start();
header("Access-Control-Allow-Origin: *");

function validateAndFormatDate($date) {
    $formats = ['d/m/Y', 'd-m-Y', 'Y-m-d']; // Possible date formats
    foreach ($formats as $format) {
        $d = DateTime::createFromFormat($format, $date);
        if ($d && $d->format($format) === $date) {
            return $d->format('Y-m-d'); // Return in standard format
        }
    }
    return false; // Invalid date
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'FilterEmployee') {
    // Get filter values from POST request
    $role = $_POST['role'] ?? '';
    $status = $_POST['status'] ?? '';

    // Start building the SQL query
    $sql = "SELECT `users`.*, `role`.`name` AS `role` FROM `users` JOIN `role` ON `role`.`id` = `users`.`role_id`  WHERE 1 = 1";
    $params = [];

    if (!empty($role)) {

        $sql .= ' AND `users`.`role_id` = ?';
        $params[] = $role;
    }

    if (!empty($status)) {
        $sql .= ' AND `users`.`is_terminated` = ?';
        $params[] = $status;
    }

    $sql .= ' ORDER BY `users`.`id` DESC';

    // Prepare and execute the SQL query
    try {
        $query = $conn->prepare($sql);
        $query->execute($params);

        // Fetch all the results
        $users = $query->fetchAll(PDO::FETCH_ASSOC);

        // Loop through the results and display the project details
        http_response_code(200);
        foreach ($users as $user) { 

            echo '
            <tr>
                <td>
                    <div class="form-check form-check-md">
                        <input class="form-check-input" type="checkbox">
                    </div>
                </td>
                <td><a
                        href="employee-details.php?id='.base64_encode($user['id']).'">'. $user['employee_id'].'</a>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <a href="employee-details.php?id='.base64_encode($user['id']).'"
                            class="avatar avatar-md" data-bs-toggle="modal"
                            data-bs-target="#view_details"><img
                                src="assets/img/users/user-32.jpg"
                                class="img-fluid rounded-circle" alt="img"></a>
                        <div class="ms-2">
                            <p class="text-dark mb-0"><a
                                    href="employee-details.php?id='. base64_encode($user['id']) .'"
                                    data-bs-toggle="modal"
                                    data-bs-target="#view_details">'. $user['name'].'</a>
                            </p>
                            <span class="fs-12">'. ucfirst($user['role']).'</span>
                        </div>
                    </div>
                </td>
                <td>'. ucfirst($user['gender']) .'</td>
                <td>'. $user['email'] .'</td>
                <td>'. $user['mobile'].'</td>
                <td>
                    '. date('d M, Y', strtotime($user['dob'])).'
                </td>
                <td>'. date('d M, Y', strtotime($user['joining_date'])) .'</td>
                <td>
                    <span
                        class="badge badge-'. ($user['is_terminated'] == 1 ? 'danger' : 'success' ).' d-inline-flex align-items-center badge-xs">
                        <i
                            class="ti ti-point-filled me-1"></i>'.( $user['is_terminated'] == 1 ? 'Terminated' : 'Active').'
                    </span>
                </td>
                <td>
                    <div class="action-icon d-inline-flex">
                        <a href="#" class="me-2" data-bs-toggle="modal"
                            data-bs-target="#edit_employee"
                            onclick="getEmployee('.$user['id'].')"><i
                                class="ti ti-edit"></i></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"
                            onclick="deleteEmployee('.$user['id'].')"><i
                                class="ti ti-trash"></i></a>
                    </div>
                </td>
            </tr>';
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

if (($_SERVER['REQUEST_METHOD'] === 'POST') && ($_POST['type'] == "addEmployee")) {
    // Required fields
    $requiredFields = ['name', 'role_id', 'employee_id', 'phone', 'email', 'emergency_contact', 'joining_date', 'dob', 'correspondence_address', 'permanent_address', 'gender', 'marital_status'];

    // Check for missing fields
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            http_response_code(400);
            echo json_encode(['message' => "The field '{$field}' is required.", "status" => 400]);
            exit;
        }
    }

    // Extract data
    $name = $_POST['name'];
    $role_id = $_POST['role_id'];
    $employee_id = $_POST['employee_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $emergency_contact = $_POST['emergency_contact'];
    $joining_date = date('Y-m-d', strtotime($_POST['joining_date']));
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $correspondence_address = $_POST['correspondence_address'];
    $permanent_address = $_POST['permanent_address'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $password = password_hash('uniqueMap', PASSWORD_DEFAULT); // Default password (could be customized)

    // Check if user already exists
    $check = $conn->prepare("SELECT * FROM `users` WHERE mobile = ? OR employee_id = ? OR email = ?");
    $check->execute([$phone, $employee_id, $email]);
    if ($check->fetch(PDO::FETCH_ASSOC)) {
        http_response_code(400);
        echo json_encode(['message' => 'User already exists. Please check Employee ID, Phone, or Email.', "status" => 400]);
        exit;
    }

    // Insert new employee
    $sql = $conn->prepare("
        INSERT INTO `users` 
        (`employee_id`, `name`, `role_id`, `mobile`, `email`, `correspondence_address`, `permanent_address`, `dob`, `joining_date`, `marital_status`, `gender`, `emergency_contact`, `password`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $result = $sql->execute([
        $employee_id, $name, $role_id, $phone, $email, $correspondence_address, $permanent_address, $dob, $joining_date, $marital_status, $gender, $emergency_contact, $password
    ]);

    if ($result) {
        http_response_code(200);
        echo json_encode(['message' => 'Employee added successfully!', 'status' => 200]);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Something went wrong while adding the employee.', 'status' => 500]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['type'] === 'addUserDetails') {
    // Extract data from POST request
    $user_id = $_POST['user_id'];
    $pancard = $_POST['pancard'];
    $aadhar = $_POST['aadhar'];
    $bank_name = $_POST['bank_name'];
    $account = $_POST['account'];
    $ifsc_code = $_POST['ifsc_code'];
    $bank_holder = $_POST['bank_holder'];

    // Check if the user already exists in `user_details`
    $check = $conn->prepare("SELECT * FROM `user_details` WHERE user_id = ?");
    $check->execute([$user_id]);
    $existingUser = $check->fetch(PDO::FETCH_ASSOC);

    if ($existingUser) {
        // Update existing record
        $update = $conn->prepare("
            UPDATE `user_details` 
            SET `pancard` = ?, `aadhar` = ?, `bank_name` = ?, `account` = ?, `ifsc_code` = ?, `bank_holder` = ? WHERE `user_id` = ?
        ");
        $result = $update->execute([$pancard, $aadhar, $bank_name, $account, $ifsc_code, $bank_holder, $user_id]);

        if ($result) {
            http_response_code(200);
            echo json_encode(['message' => 'User details updated successfully!', 'status' => 200]);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Failed to update user details.', 'status' => 500]);
        }
    } else {
        // Insert new record
        $insert = $conn->prepare("
            INSERT INTO `user_details` (`user_id`, `pancard`, `aadhar`, `bank_name`, `account`, `ifsc_code`, `bank_holder`, `created_at`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
        ");
        $result = $insert->execute([$user_id, $pancard, $aadhar, $bank_name, $account, $ifsc_code, $bank_holder]);

        if ($result) {
            http_response_code(200);
            echo json_encode(['message' => 'User details added successfully!', 'status' => 200]);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Failed to add user details.', 'status' => 500]);
        }
    }
}

if (($_SERVER['REQUEST_METHOD'] === 'GET') && ($_GET['type'] == "getEmployee")) {
    if($_GET['id'] == ''){
        http_response_code(400);
            echo json_encode(['message' => "The field id is required.", "status" => 400]);
            exit;
    }
    $check = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $check->execute([$_GET['id']]);
    $result = $check->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        http_response_code(200);
        echo json_encode($result);
        exit;
    }else{
        http_response_code(400);
        echo json_encode(['message' => 'Employee not found!', 'status' => 400]);
    }
}

if (($_SERVER['REQUEST_METHOD'] === 'POST') && ($_POST['type'] == "editEmployee")) {
    // Required fields
    $requiredFields = ['name', 'role_id', 'employee_id', 'phone', 'email', 'emergency_contact', 'joining_date', 'dob', 'correspondence_address', 'permanent_address', 'gender', 'marital_status' , 'id'];

    // Check for missing fields
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            http_response_code(400);
            echo json_encode(['message' => "The field '{$field}' is required.", "status" => 400]);
            exit;
        }
    }

    // Extract data
    $name = $_POST['name'];
    $role_id = $_POST['role_id'];
    $employee_id = $_POST['employee_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $emergency_contact = $_POST['emergency_contact'];
    $joining_date = validateAndFormatDate($_POST['joining_date']);
    $dob = validateAndFormatDate($_POST['dob']);
    $correspondence_address = $_POST['correspondence_address'];
    $permanent_address = $_POST['permanent_address'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $id = $_POST['id'];

    // Check if user already exists
    $check = $conn->prepare("SELECT * FROM `users` WHERE mobile = ? OR employee_id = ? OR email = ?");
    $check->execute([$phone, $employee_id, $email]);
    if (!$check->fetch(PDO::FETCH_ASSOC)) {
        http_response_code(400);
        echo json_encode(['message' => 'User not exists. Please check.', "status" => 400]);
        exit;
    }

    // Insert new employee
    $sql = $conn->prepare("
        UPDATE `users`
        SET 
            `employee_id` = ?, 
            `name` = ?, 
            `role_id` = ?, 
            `mobile` = ?, 
            `email` = ?, 
            `correspondence_address` = ?, 
            `permanent_address` = ?, 
            `dob` = ?, 
            `joining_date` = ?, 
            `marital_status` = ?, 
            `gender` = ?, 
            `emergency_contact` = ?
        WHERE `id` = ?
    ");
    $result = $sql->execute([
        $employee_id, $name, $role_id, $phone, $email, $correspondence_address, $permanent_address, $dob, $joining_date, $marital_status, $gender, $emergency_contact, $id
    ]);

    if ($result) {
        http_response_code(200);
        echo json_encode(['message' => 'Employee updated successfully!', 'status' => 200]);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Something went wrong while adding the employee.', 'status' => 500]);
    }
}

if (($_SERVER['REQUEST_METHOD'] === 'POST') && ($_POST['type'] == "addEducation")) {
    $user_id = $_POST['id'];
    $delete = $conn->prepare('DELETE FROM `education` WHERE `user_id` = ?');
    $delete = $delete->execute([$user_id]);
    $degrees = $_POST['degree'];
    $universities = $_POST['university'];
    $years = $_POST['yop'];
    $marks = $_POST['marks'];
    $attachments = $_FILES['attachment'];

    for ($i = 0; $i < count($degrees); $i++) {
        $degree = $degrees[$i];
        $university = $universities[$i];
        $year = $years[$i];
        $mark = $marks[$i];

        // Handle file upload
        $file_name = null;
        if (!empty($attachments['name'][$i])) {
            $file_name = time() . "_" . basename($attachments['name'][$i]);
            $file_tmp = $attachments['tmp_name'][$i];
            $uploadPath = '../../assets/images/education/' . $file_name;
            move_uploaded_file($file_tmp,  $uploadPath);
        }

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO `education`(`user_id`, `degree`, `university`, `year`, `mark`, `file`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$user_id, $degree, $university, $year, $mark, $file_name]);
    }

    // Respond back if successful (optional)
    echo json_encode(['success' => true]);
}

if (($_SERVER['REQUEST_METHOD'] === 'GET') && ($_GET['type'] == "getEducation")) {
    if($_GET['user_id'] == ''){
        http_response_code(400);
            echo json_encode(['message' => "The field id is required.", "status" => 400]);
            exit;
    }
    $check = $conn->prepare("SELECT * FROM `education` WHERE `user_id` = ?");
    $check->execute([$_GET['user_id']]);
    $result = $check->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}

if (($_SERVER['REQUEST_METHOD'] === 'GET') && ($_GET['type'] == "getExperience")) {
    if($_GET['user_id'] == ''){
        http_response_code(400);
            echo json_encode(['message' => "The field id is required.", "status" => 400]);
            exit;
    }
    $check = $conn->prepare("SELECT * FROM `experience` WHERE `user_id` = ?");
    $check->execute([$_GET['user_id']]);
    $result = $check->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}

if (($_SERVER['REQUEST_METHOD'] === 'POST') && ($_POST['type'] == "addExperience")) {
    $user_id = $_POST['id'];

    // Delete existing experience records for the user (optional)
    $delete = $conn->prepare('DELETE FROM `experience` WHERE `user_id` = ?');
    $delete->execute([$user_id]);

    $organizations = $_POST['organization'];
    $start_dates = $_POST['start_date'];
    $end_dates = $_POST['end_date'];
    $salaries = $_POST['salary'];
    $attachments = $_FILES['attachment'];

    for ($i = 0; $i < count($organizations); $i++) {
        $organization = $organizations[$i];
        $start_date = $start_dates[$i];
        $end_date = $end_dates[$i];
        $salary = $salaries[$i];

        // Handle file upload for attachments
        $file_name = null;
        if (!empty($attachments['name'][$i])) {
            $file_name = time() . "_" . basename($attachments['name'][$i]);
            $file_tmp = $attachments['tmp_name'][$i];
            $uploadPath = '../../assets/images/experience/' . $file_name;
            move_uploaded_file($file_tmp,  $uploadPath);
        }

        // Insert into the experience table
        $stmt = $conn->prepare("INSERT INTO `experience`(`user_id`, `oraganization`, `start_date`, `end_date`, `salary`, `file`, `created_at`) VALUES (?, ?, ?, ?, ?, ?, NOW())");
        $stmt->execute([$user_id, $organization, $start_date, $end_date, $salary, $file_name]);
    }

    // Respond back if successful (optional)
    echo json_encode(['success' => true]);
}

if (($_SERVER['REQUEST_METHOD'] === 'GET') && ($_GET['type'] == "deleteEmployee")) {
    if($_GET['user_id'] == ''){
        http_response_code(400);
            echo json_encode(['message' => "The field id is required.", "status" => 400]);
            exit;
    }

    $delete = $conn->prepare('DELETE FROM `experience` WHERE `user_id` = ?');
    $delete->execute([$_GET['user_id']]);
    
    $delete = $conn->prepare('DELETE FROM `education` WHERE `user_id` = ?');
    $delete->execute([$_GET['user_id']]);
    
    $delete = $conn->prepare('DELETE FROM `users` WHERE `id` = ?');
    $result = $delete->execute([$_GET['user_id']]);
    if($result){
        http_response_code(200);
        echo json_encode(['message' => "Successfull Delete.", "status" => 400]);
        exit;
    }else{
        http_response_code(400);
        echo json_encode(['message' => "Employee not found.", "status" => 400]);
        exit;
    }
}

if (($_SERVER['REQUEST_METHOD'] === 'GET') && ($_GET['type'] == "passwordReset")) {
    if($_GET['user_id'] == ''){
        http_response_code(400);
            echo json_encode(['message' => "The field id is required.", "status" => 400]);
            exit;
    }
    $password = password_hash('uniqueMap', PASSWORD_DEFAULT);
    $user = $conn->prepare('UPDATE `users` SET `password` = ? WHERE `id` = ?');
    $result = $user->execute([$password,$_GET['user_id']]);
    if($result){
        http_response_code(200);
        echo json_encode(['message' => "Successfull Password Reset.", "status" => 400]);
        exit;
    }else{
        http_response_code(400);
        echo json_encode(['message' => "Employee not found.", "status" => 400]);
        exit;
    }
}

if (($_SERVER['REQUEST_METHOD'] === 'GET') && ($_GET['type'] == "changeStatus")) {
    if($_GET['user_id'] == ''){
        http_response_code(400);
            echo json_encode(['message' => "The field id is required.", "status" => 400]);
            exit;
    }

    $check = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $check->execute([$_GET['user_id']]);
    $result = $check->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        http_response_code(400);
        echo json_encode(['message' => 'User not exists. Please check.', "status" => 400]);
        exit;
    }
    $status = $result['is_terminated'] == 1 ? 0 : 1;
    $user = $conn->prepare('UPDATE `users` SET `is_terminated` = ? WHERE `id` = ?');
    $result = $user->execute([$status,$_GET['user_id']]);
    if($result){
        http_response_code(200);
        echo json_encode(['message' => "Successfull Change Status.", "status" => 400]);
        exit;
    }else{
        http_response_code(400);
        echo json_encode(['message' => "Employee not found.", "status" => 400]);
        exit;
    }
}
