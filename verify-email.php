<?php
session_start();
include('dbconnect.php');

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $verify_query = "SELECT verify_token FROM users WHERE verify_token='$token' LIMIT 1";
    $verify_query_run = mysqli_query($connect, $verify_query);

    if (mysqli_num_rows($verify_query_run) > 0) {
        $row = mysqli_fetch_array($verify_query_run);

        if ($row['verify_status'] == '0') {
            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE users SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
            $update_query_run = mysqli_query($connect, $update_query);

            if ($update_query_run) {
                $_SESSION['status'] = "Your account has been verified successfully!";
                header('Location: login.php');
                exit(0);
            } else {
                $_SESSION['status'] = "Verification failed!";
                header('Location: login.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "Email already verified. Please Login!";
            header('Location: login.php');
            exit(0);
        }
    } else {
        $_SESSION['status'] = "This token does not exists!";
        header('Location: login.php');
        exit(0);
    }
} else {
    $_SESSION['status'] = "Not allowed!";
    header('Location: login.php');
}
