<?php
session_start();
include('dbconnect.php');

if (isset($_POST['login-btn'])) {
    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))) {
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        $login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
        $login_query_run = mysqli_query($connect, $login_query);

        if (mysqli_num_rows($login_query_run) > 0) {
            $row = mysqli_fetch_array($login_query_run);

            if ($row['verify_status'] == "0") {
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user'] = [
                    'username' => $row['name'],
                    'email' => $row['email'],
                    'phone' => $row['phone']
                ];
                // $_SESSION['status'] = "You are logged in successfully!";
                header('Location: app.php');
                exit(0);
            } else {
                $_SESSION['status'] = "Please verify your email address to login!";
                header('Location: login.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "Invalid email or password!";
            header('Location: login.php');
            exit(0);
        }
    } else {
        $_SESSION['status'] = "All fields are mandetory!";
        header('Location: login.php');
        exit(0);
    }
}
