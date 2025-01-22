<?php
include __DIR__ . '/../database/conn.php';
session_start();

function calculateLeaveDays($formDate, $endDate, $conn)
{
    $holidaysQuery = $conn->prepare("SELECT `date` FROM `holiday`");
    $holidaysQuery->execute();
    $holidays = $holidaysQuery->fetchAll(PDO::FETCH_COLUMN);

    $start = new DateTime($formDate);
    $end = new DateTime($endDate);
    $end->modify('+1 day');
    $validDays = 0;
    for ($date = $start; $date < $end; $date->modify('+1 day')) {
        if ($date->format('N') == 7 || in_array($date->format('Y-m-d'), $holidays)) {
            continue;
        }
        $validDays++;
    }
    return $validDays;
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'editLeave')) {
    $id = $_POST['leave_id'];
    $balance = $_POST['leave_balance'];
    $name = $_POST['leave_name'];

    // Validate inputs
    if (empty($id) || empty($balance) || empty($name)) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }

    // Prepare SQL query
    $sql = $conn->prepare("UPDATE `leave_type` SET `leave_name` = ?, `balance` = ? WHERE `id` = ?");
    $result = $sql->execute([$name, $balance, $id]);

    if ($result) {
        http_response_code(200);
        echo json_encode(['success' => true, 'message' => 'Leave updated successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to update leave']);
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'addLeave')) {

    $balance = $_POST['balance'];
    $name = $_POST['leave_name'];

    if (empty($balance) || empty($name)) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }


    $sql = $conn->prepare("INSERT INTO `leave_type`(`leave_name`, `balance`) VALUES (? , ? )");
    $result = $sql->execute([$name, $balance]);

    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Leave Add successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update Leave']);
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'deleteLeave')) {

    $id = $_POST['id'];

    if (empty($id)) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }


    $sql = $conn->prepare("DELETE FROM `leave_type` WHERE `id` = ?");
    $result = $sql->execute([$id]);

    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Leave Delete successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete Leave']);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'applyLeaves') {
    $userId = $_SESSION['userId'];
    $leaveType = $_POST['leave_type'];
    $leaveOption = $_POST['leave_option'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $startDate = date('Y-m-d', strtotime($startDate));
    $endDate = date('Y-m-d', strtotime($endDate));
    $date = $_POST['date'];
    $date = date('Y-m-d', strtotime($date));
    $reason = $_POST['reason'];

    // Validate inputs
    if (empty($leaveType) || empty($leaveOption) || empty($reason)) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }

    // Adjust dates based on leave option
    if ($leaveOption === 'full_day') {
        if (empty($startDate) || empty($endDate)) {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Start and End dates are required for Full Day leave.']);
            exit;
        }
    } else if (in_array($leaveOption, ['first_half', 'second_half'])) {
        if (empty($date)) {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Date is required for Half Day leave.']);
            exit;
        }
    }

    // Prepare SQL query
    $sql = $conn->prepare("
        INSERT INTO `leaves` 
        (`user_id`, `form_date`, `end_date`, `leave_type`, `leave_option`, `reason`, `status`, `created_at`, `updated_at`) 
        VALUES (?, ?, ?, ?, ?, ?, 'pending', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)
    ");

    $formDate = ($leaveOption === 'full_day') ? $startDate : $date;
    $endDate = ($leaveOption === 'full_day') ? $endDate : $date;

    $result = $sql->execute([$userId, $formDate, $endDate, $leaveType, $leaveOption, $reason]);

    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Leave applied successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to apply for leave']);
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'filterLeave')) {
    $dateRange = $_POST['dateRange'] ?? '';
    $leaveType = $_POST['leave_type'] ?? '';
    $role = $_POST['role'] ?? '';
    $status = $_POST['status'] ?? '';

    $sql = "
        SELECT 
            leaves.*, 
            users.name AS user_name, 
            role.name AS role_name , leave_type.leave_name
        FROM 
            leaves
        JOIN 
            users ON users.id = leaves.user_id
        JOIN leave_type ON leave_type.id = leaves.leave_type
        JOIN 
            role ON role.id = users.role_id
        WHERE 
            1 = 1
    ";

    $params = [];

    // Filter by date range
    if (!empty($dateRange)) {
        [$startDate, $endDate] = explode(' - ', $dateRange);
        $sql .= ' AND leaves.form_date BETWEEN ? AND ?';
        $params[] = date('Y-m-d', strtotime($startDate));
        $params[] = date('Y-m-d', strtotime($endDate));
    }

    // Filter by leave type
    if (!empty($leaveType)) {
        $sql .= ' AND leaves.leave_type = ?';
        $params[] = $leaveType;
    }

    if (!empty($status)) {
        $sql .= ' AND leaves.status = ?';
        $params[] = $status;
    }

    // Filter by role
    if (!empty($role)) {
        $sql .= ' AND `role`.`id` = ?';
        $params[] = $role;
    }

    $sql .= ' ORDER BY leaves.created_at DESC';
    $query = $conn->prepare($sql);
    $query->execute($params);

    $leaves = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($leaves as $value) {
        $start = new DateTime($value['form_date']);
        $end = new DateTime($value['end_date']);
        $end->modify('+1 day');
        $interval = $start->diff($end);
        $days = $interval->days;
        if ($value['approved_by'] != '') {
            $user = $conn->prepare("SELECT `name` FROM `users` WHERE `id` = ?");
            $user->execute([$value['approved_by']]);
            $user = $user->fetch(PDO::FETCH_ASSOC);
        }

        echo '<tr>
        <td>
            <div class="form-check form-check-md">
                <input class="form-check-input" type="checkbox">
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center file-name-icon">
                <a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
                    <img src="' . ($value['profile'] ?? 'assets/img/users/user-32.jpg') . '" class="img-fluid" alt="img">
                </a>
                <div class="ms-2">
                    <h6 class="fw-medium"><a href="javascript:void(0);">' . $value['user_name'] . '</a></h6>
                    <span class="fs-12 fw-normal ">' . ucfirst($value['role_name']) . '</span>
                </div>
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center">
                <p class="fs-14 fw-medium d-flex align-items-center mb-0">' . $value['leave_name'] . '</p>
            </div>
        </td>
        <td>
            ' . date('d M, Y', strtotime($value['form_date'])) . '
        </td>
        <td>
            ' . date('d M, Y', strtotime($value['end_date'])) . '
        </td>
        <td>
            ' . $days . ' Days
        </td>
        <td>
        <span  class="' . ($value['status'] == 'cancel' ? 'text-danger' : ($value['status'] == 'approve' ? 'text-success' : '')) . '">' . ucfirst($value['status']) . ' </span><br>
											' . $user['name'] . '
        </td>
        <td>
            <div class="action-icon d-inline-flex">
                <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal" onclick="rejectLeave(' . $value['id'] . ')"><i class="ti ti-trash"></i></a>
            </div>
        </td>
    </tr>';
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'myFilterLeave')) {
    $dateRange = $_POST['dateRange'] ?? '';
    $leaveType = $_POST['leave_type'] ?? '';
    $status = $_POST['status'] ?? '';
    $userId = $_SESSION['userId'];

    $sql = "
        SELECT 
            leaves.*, 
            users.name AS user_name, 
            role.name AS role_name ,
            leave_type.leave_name
        FROM 
            leaves
        JOIN 
            users ON users.id = leaves.user_id
        JOIN leave_type ON leave_type.id = leaves.leave_type
        JOIN 
            role ON role.id = users.role_id
        WHERE 
            `leaves`.`user_id` = ?
    ";

    $params = [];
    $params[] = $userId;

    // Filter by date range
    if (!empty($dateRange)) {
        [$startDate, $endDate] = explode(' - ', $dateRange);
        $sql .= ' AND leaves.form_date BETWEEN ? AND ?';
        $params[] = date('Y-m-d', strtotime($startDate));
        $params[] = date('Y-m-d', strtotime($endDate));
    }

    // Filter by leave type
    if (!empty($leaveType)) {
        $sql .= ' AND leaves.leave_type = ?';
        $params[] = $leaveType;
    }

    if (!empty($status)) {
        $sql .= ' AND leaves.status = ?';
        $params[] = $status;
    }

    $sql .= ' ORDER BY leaves.created_at DESC';
    $query = $conn->prepare($sql);
    $query->execute($params);

    $leaves = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($leaves as $value) {
        $start = new DateTime($value['form_date']);
        $end = new DateTime($value['end_date']);
        $end->modify('+1 day');
        $interval = $start->diff($end);
        $days = $interval->days;
        if ($value['approved_by'] != '') {
            $user = $conn->prepare("SELECT `name` FROM `users` WHERE `id` = ?");
            $user->execute([$value['approved_by']]);
            $user = $user->fetch(PDO::FETCH_ASSOC);
        }

        echo '<tr>
        <td>
            <div class="form-check form-check-md">
                <input class="form-check-input" type="checkbox">
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center file-name-icon">
                <a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
                    <img src="' . ($value['profile'] ?? 'assets/img/users/user-32.jpg') . '" class="img-fluid" alt="img">
                </a>
                <div class="ms-2">
                    <h6 class="fw-medium"><a href="javascript:void(0);">' . $value['user_name'] . '</a></h6>
                    <span class="fs-12 fw-normal ">' . ucfirst($value['role_name']) . '</span>
                </div>
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center">
                <p class="fs-14 fw-medium d-flex align-items-center mb-0">' . $value['leave_name'] . '</p>
            </div>
        </td>
        <td>
            ' . date('d M, Y', strtotime($value['form_date'])) . '
        </td>
        <td>
            ' . date('d M, Y', strtotime($value['end_date'])) . '
        </td>
        <td>
            ' . $days . ' Days
        </td>
        <td>
        <span  class="' . ($value['status'] == 'cancel' ? 'text-danger' : ($value['status'] == 'approve' ? 'text-success' : '')) . '">' . ucfirst($value['status']) . ' </span><br>
											' . $user['name'] . '
        </td>
    </tr>';
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_GET['type'] == 'cancelLaves')) {

    $userId = $_SESSION['userId'];
    $check = $conn->prepare("SELECT * FROM `leaves` WHERE id = ? AND (`status` = 'pending' OR `status` = 'approve')");
    $check->execute([$_GET['leave_id']]);
    $check = $check->fetch(PDO::FETCH_ASSOC);

    if ($check) {

        $balance = $conn->prepare("SELECT balance FROM `user_leave_balances` WHERE leave_type_id = ? AND `year` = YEAR(CURDATE()) AND `user_id` = ?");
        $balance->execute([$check['leave_type'], $check['user_id']]);
        $balance = $balance->fetch(PDO::FETCH_ASSOC);

        $update = $conn->prepare("UPDATE `leaves` SET `status` = 'cancel' , `approved_by` = ? ,`use` = 0 WHERE id = ? ");
        $update = $update->execute([$userId, $_GET['leave_id']]);

        $update = $conn->prepare("UPDATE `user_leave_balances` SET `balance` = ? WHERE `user_id` = ? AND `leave_type_id` = ?");
        $result = $update->execute([$balance['balance'] + $check['use'], $check['user_id'], $check['leave_type']]);

        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'successfull Leave Status Change...', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => 'Leave not found.', "status" => 500));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_GET['type'] == 'approveLeave')) {

    $userId = $_SESSION['userId'];

    // Corrected query with 'FROM'
    $check = $conn->prepare("SELECT * FROM `leaves` WHERE id = ? AND (`status` = 'pending' OR `status` = 'cancel')");
    $check->execute([$_GET['leave_id']]);
    $result = $check->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $balance = $conn->prepare("SELECT balance FROM `user_leave_balances` WHERE leave_type_id = ? AND `year` = YEAR(CURDATE()) AND `user_id` = ?");
        $balance->execute([$result['leave_type'], $result['user_id']]);
        $balance = $balance->fetch(PDO::FETCH_ASSOC);

        $leav = calculateLeaveDays($result['form_date'], $result['end_date'], $conn);

        if ($balance['balance'] > $leav) {
            $use = $balance['balance'] - $leav;
        } else {
            $use = $balance['balance'];
        }

        $check = $conn->prepare("UPDATE `leaves` SET `status` = 'approve', `use` = ?, `approved_by` = ? WHERE id = ?");
        $update = $check->execute([$use, $userId, $_GET['leave_id']]);

        $check = $conn->prepare("UPDATE `user_leave_balances` SET `balance` = ? WHERE `user_id` = ? AND `leave_type_id` = ?");
        $update = $check->execute([$balance['balance'] - $use, $result['user_id'], $result['leave_type']]);

        http_response_code(200);
        echo json_encode(array("message" => 'Successful Leave Status Change...', "status" => 200));
    } else {
        http_response_code(400);
        echo json_encode(array("message" => 'Leave not found.', "status" => 500));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'addLeaveBonus')) {   
    $holiday = $conn->prepare("SELECT * FROM `holiday` WHERE `date` = CURRENT_DATE()");
    $holiday->execute();
    $holiday = $holiday->fetch(PDO::FETCH_ASSOC);
    if(date('N') == 7 || $holiday)  {
        $sql = $conn->prepare('SELECT * FROM `attendance` WHERE date= CURDATE() AND `user_id`= ?');
        $sql->execute([$user_id]);
        $attendance = $sql->fetch(PDO::FETCH_ASSOC);
        if ($attendance) {
            $TclockInTime = strtotime($result['clock_in_time']);
            $TclockOutTime = strtotime($result['clock_out_time']);
            $timeDifferenceSeconds = $TclockOutTime - $TclockInTime;
            $timeDifferenceHours = $timeDifferenceSeconds / 3600;
            if($timeDifferenceHours < 6){
                http_response_code(400);
                echo json_encode(array("message" => 'Login Time is then 6 Hours.', "status" => 400));
                exit;
            }else{
                $check = $conn->prepare('INSERT INTO `leave_bonus`(`user_id`) VALUES ( ? )');
                $result = $check->execute([$user_id ]);

                if ($result) {
                    http_response_code(200);
                    echo json_encode(array("message" => 'successfull Leave Bonus Added.', "status" => 200));
                } else {
                    http_response_code(500);
                    echo json_encode(array("message" => 'Something went wrong', "status" => 500));
                }
            }
        }else{
            http_response_code(400);
            echo json_encode(array("message" => 'Attendance Not Found.', "status" => 400));
        }
    }else{
        http_response_code(500);
        echo json_encode(array("message" => 'Today is not Holiday', "status" => 500));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'approveLeaveBonus')) {   

    $check = $conn->prepare('SELECT * FROM `leave_bonus` WHERE `id` = ? AND `aprrove` = 0');
    $check->execute([$_POST['leave_id'] ]);
    $check = $check->fetch(PDO::FETCH_ASSOC);
    if ($check) {
        $updatecheck = $conn->prepare('UPDATE `leave_bonus` SET `aprrove` = 1 , `approve_by` = ? WHERE `id` = ?');
        $result = $updatecheck->execute([$user_id , $_POST['leave_id'] ]);

        $update = $conn->prepare("UPDATE `user_leave_balances` SET `balance` = `balance`+1 WHERE `user_id` = ? AND `leave_type_id` = ?");
        $update = $update->execute([$check['user_id'], 4]);

        http_response_code(200);
        echo json_encode(array("message" => 'successfull Leave Bonus Approve.', "status" => 200));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => 'Something went wrong', "status" => 500));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'rejectLeaveBonus')) {   

    $check = $conn->prepare('SELECT * FROM `leave_bonus` WHERE `id` = ? AND `aprrove` = 0');
    $check->execute([$_POST['leave_id'] ]);
    $check = $check->fetch(PDO::FETCH_ASSOC);
    if ($check) {
        $updatecheck = $conn->prepare('UPDATE `leave_bonus` SET `reject` = 1 , `approve_by` = ? WHERE `id` = ?');
        $result = $updatecheck->execute([$user_id , $_POST['leave_id'] ]);

        http_response_code(200);
        echo json_encode(array("message" => 'successfull Leave Bonus Approve.', "status" => 200));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => 'Something went wrong', "status" => 500));
    }
}