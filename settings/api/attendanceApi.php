<?php

include __DIR__ . '/../database/conn.php';
header("Access-Control-Allow-Origin: *");
// header('Content-Type: application/json');
session_start();
$user_id = $_SESSION['userId'];

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'clockOut')) {
    $currentTime = new DateTime();
    $sql = $conn->prepare('SELECT * FROM `attendance` WHERE date = CURDATE() AND `user_id` = ?');
    $sql->execute([$user_id]);
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        if ($result['clock_out_time']) {
            http_response_code(404);
            echo json_encode(array("message" => 'Already clocked out', "status" => 404));
            exit;
        } else {
            // Convert clock_in_time to a timestamp
            $TclockInTime = strtotime($result['clock_in_time']);

            // Current timestamp for clock_out_time
            $TclockOutTime = time();
            $formattedClockOutTime = date('Y-m-d H:i:s', $TclockOutTime);

            // Calculate time difference in seconds
            $timeDifferenceSeconds = $TclockOutTime - $TclockInTime;

            // Convert seconds to hours (with precision to 2 decimal points)
            $timeDifferenceHours = round($timeDifferenceSeconds / 3600, 2);

            // Check if not allowed
            $not_allowed = ($timeDifferenceHours < 5) ? 1 : 0;

            // Update attendance record
            $sql = $conn->prepare(
                'UPDATE attendance 
                 SET clock_out_time = ?, 
                     `not_allowed` = ?, 
                     `hours` = ? 
                 WHERE `date` = CURDATE() AND `user_id` = ?'
            );
            $sql->execute([$formattedClockOutTime, $not_allowed, $timeDifferenceHours, $user_id]);

            http_response_code(200);
            echo json_encode(array("message" => 'Clock out successful', "status" => 200));
        }
    } else {
        http_response_code(404);
        echo json_encode(array("message" => 'Please clock in first', "status" => 404));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'filterAttandace')) {
    $dateRange = $_POST['dateRange'] ?? '';
    $status = $_POST['status'] ?? '';
    $role = $_POST['role'] ?? '';

    $sql = '
    SELECT 
        `attendance`.*, 
        `users`.`name` AS `user_name`, 
        `users`.`employee_id`, 
        `role`.`name` AS `role_name`
    FROM 
        `attendance`
    JOIN 
        `users` ON `attendance`.`user_id` = `users`.`id`
    JOIN 
        `role` ON `users`.`role_id` = `role`.`id`
    WHERE 
        1 = 1
';

    $params = [];

    // Filter by date range
    if (!empty($dateRange)) {
        [$startDate, $endDate] = explode(' - ', $dateRange);
        $sql .= ' AND `attendance`.`date` BETWEEN ? AND ?';
        $params[] = date('Y-m-d', strtotime($startDate));
        $params[] = date('Y-m-d', strtotime($endDate));
    }

    // Filter by status
    if (!empty($status)) {
        if ($status === 'absent') {
            $sql .= ' AND `attendance`.`not_allowed` = 1';
        } elseif ($status === 'present') {
            $sql .= ' AND `attendance`.`not_allowed` = 0';
        }
    }
    
    if (!empty($role)) {
        if ($role != '') {
            $sql .= ' AND `users`.`role_id` = ?';
            $params[] = $role;
        }
    }

    $sql .= ' ORDER BY `attendance`.`date` DESC';
    $query = $conn->prepare($sql);
    $query->execute($params);

    $attendance = $query->fetchAll(PDO::FETCH_ASSOC);

    // Generate table rows dynamically
    foreach ($attendance as $row) {
        echo '<tr>';
        echo '<td>' . date('d M, Y', strtotime($row['date'])) . '</td>';
        echo '<td>' . $row['user_name'] . '<br>';
        echo '<span class="badge badge-success-transparent d-inline-flex align-items-center">' . ucfirst($row['role_name']) . '</span>';
        if ($row['not_allowed'] == 1) {
            echo '<span class="badge badge-danger-transparent d-inline-flex align-items-center">Absent</span>';
        }
        echo '</td>';
        echo '<td>' . date('h:i A', strtotime($row['clock_in_time'])) . '</td>';
        echo '<td>' . date('h:i A', strtotime($row['clock_out_time'])) . '</td>';
        echo '<td>30 Min</td>';
        echo '<td>20 Min</td>';
        echo '<td>';
        echo '<span class="badge badge-success d-inline-flex align-items-center">';
        echo '<i class="ti ti-clock-hour-11 me-1"></i>' . $row['hours'] . ' Hrs</span>';
        echo '</td>';
        echo '</tr>';
    }
}



if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'addRegularisation')) {
    if ($_POST['clockout_time'] != '' && $_POST['attendance_id'] != '') {
        $sql = $conn->prepare("UPDATE `attendance` SET `clock_out_time` = ? , `remark` = ?, `regularisation` = 1 WHERE `id` = ? AND `user_id` = ?");
        $result = $sql->execute([$_POST['clockout_time'], $_POST['remark'], $_POST['attendance_id'], $user_id]);
        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'Add Regularisation successful', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => 'Add ClockOut Time.', "status" => 500));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'approveAttendance')) {
    $sql = $conn->prepare("UPDATE `attendance` SET `regularisation` = 0 WHERE `id` = ?");
    $result = $sql->execute([$_POST['id']]);
    if ($result) {
        http_response_code(200);
        echo json_encode(array("message" => 'Approve Regularisation successful', "status" => 200));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => 'Something went wrong', "status" => 500));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_GET['type'] == 'getMonth')) {
    if ($_GET['startDate'] != '' && $_GET['endDate'] != '') {
        $startdate = $_GET['startDate'];
        $enddate = $_GET['endDate'];

        if ($startdate > $enddate) {
            http_response_code(400);
            echo json_encode(["message" => "First Date is always Greater then Second Date.", "status" => 400]);
            exit;
        }

        $startDateObj = new DateTime($startdate);
        $endDateObj = new DateTime($enddate);
        $currentDateObj = $startDateObj;
        $attendanceArray = [];

        $users = $conn->prepare('SELECT * FROM `users` ORDER BY `id` DESC');
        $users->execute();
        $users = $users->fetchAll(PDO::FETCH_ASSOC);
        foreach ($users as $user) {
            $data = [];
            $currentDateObj = new DateTime($startdate);

            $date = [];
            $date[] = 'Date';
            $data[] = $user['first_name'] . ' ' . $user['last_name'];
            while ($currentDateObj <= $endDateObj) {
                $currentDate = $currentDateObj->format('Y-m-d');

                $date[] = $currentDate;

                $attendances = $conn->prepare("SELECT * FROM `attendance` WHERE `user_id` = ? AND `date` = ?");
                $attendances->execute([$user['id'], $currentDate]);
                $attendance = $attendances->fetch(PDO::FETCH_ASSOC);

                if ($attendance) {
                    // $data[] = '1';
                    if ($attendance['clock_in_time'] != '' && $attendance['clock_out_time'] != '') {
                        $data[] = date('h:i A', strtotime($attendance['clock_in_time'])) . ' - ' . date('h:i A', strtotime($attendance['clock_out_time']));
                    } else {
                        $data[] = date('h:i A', strtotime($attendance['clock_in_time'])) . ' - ';
                    }
                } else {
                    $holiday = $conn->prepare("SELECT * FROM `holiday` WHERE `date` = ?");
                    $holiday->execute([$currentDate]);
                    $holiday = $holiday->fetch(PDO::FETCH_ASSOC);

                    if ($holiday) {
                        $data[] = 'holiday';
                    } else {
                        $leave = $conn->prepare("SELECT * FROM `leaves` WHERE `form_date` <= ? AND `end_date` >= ? AND `user_id` = ? AND `status` = 'approve'");
                        $leave->execute([$currentDate, $currentDate, $user['id']]);
                        $leave = $leave->fetch(PDO::FETCH_ASSOC);

                        if ($leave) {
                            $data[] = 'leave';
                        } else {
                            if (date("w", strtotime($currentDate)) == 0) {
                                $data[] = 'week off';
                            } else {
                                $data[] = '0';
                            }
                        }
                    }
                }

                $currentDateObj->modify('+1 day');
            }
            $attendanceArray['attendance'][] = $data;
        }
        $attendanceArray['date'] = $date;
        echo json_encode($attendanceArray);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Start Date and End Date is required.", "status" => 400]);
    }
}
