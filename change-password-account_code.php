<?php
session_start();
include('dbconnect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($get_name, $get_email, $token)
{
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'trinhphutan.tk4@gmail.com';                     //SMTP username
        $mail->Password   = 'wfjltqguuvvneoat';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('trinhphutan.tk4@gmail.com', $get_name);
        $mail->addAddress($get_email);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset password notification from Group3 Movie Website';

        $email_template = "
    <h2>Hello</h2>
    <h5>You are receiving this email because we received a password reset request for your account.</h5>
    <br/><br/>
    <a href='http://localhost:8077/Group3_Movie-website_new/change-password-account.php?token=$token&email=$get_email'>Click me</a>
    ";

        $mail->Body = $email_template;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['send-email-account'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
    $check_email_run = mysqli_query($connect, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE users SET verify_token = '$token' WHERE email = '$get_email' LIMIT 1";
        $update_token_run = mysqli_query($connect, $update_token);

        if ($update_token_run) {
            send_password_reset($get_name, $get_email, $token);
            $_SESSION['status'] = "We have emailed you a password reset link!";
            header('Location: account.php');
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong!";
            header('Location: account.php');
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No email found!";
        header('Location: account.php');
        exit(0);
    }
}

if (isset($_POST['password-update-btn'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $new_password = mysqli_real_escape_string($connect, $_POST['new-password']);
    $confirm_password = mysqli_real_escape_string($connect, $_POST['confirm-password']);

    $token = mysqli_real_escape_string($connect, $_POST['password_token']);

    if (!empty($token)) {
        if (!empty($email) && !empty($new_password) && !empty($confirm_password)) {
            //Checking token is valid or not
            $check_token = "SELECT verify_token FROM users WHERE verify_token='$token' LIMIT 1";
            $check_token_run = mysqli_query($connect, $check_token);

            if (mysqli_num_rows($check_token_run) > 0) {
                if ($new_password == $confirm_password) {
                    $update_password = "UPDATE users SET password='$new_password' WHERE verify_token='$token' LIMIT 1";
                    $update_password_run = mysqli_query($connect, $update_password);

                    if ($update_password_run) {
                        $new_token = md5(rand());

                        $update_to_new_token = "UPDATE users SET verify_token='$new_token' WHERE verify_token='$token' LIMIT 1";
                        $update_to_new_token_run = mysqli_query($connect, $update_to_new_token);

                        $_SESSION['status'] = "New password successfully updated!";
                        header("Location: account.php");
                        exit(0);
                    } else {
                        $_SESSION['status'] = "Did not update password. Something went wrong!";
                        header("Location: change-password-account.php?token=$token&email=$email");
                        exit(0);
                    }
                } else {
                    $_SESSION['status'] = "Password and confirm password does not match!";
                    header("Location: change-password-account.php?token=$token&email=$email");
                    exit(0);
                }
            } else {
                $_SESSION['status'] = "Invalid token!";
                header("Location: change-password-account.php?token=$token&email=$email");
                exit(0);
            }
        } else {
            $_SESSION['status'] = "All filed are mandetory!";
            header("Location: change-password-account.php?token=$token&email=$email");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No token available!";
        header("Location: change-password-account.php");
        exit(0);
    }
}
