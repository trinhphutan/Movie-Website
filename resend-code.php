<?php
session_start();
include('dbconnect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function resend_email_verify($name, $email, $verify_token)
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
        $mail->setFrom('trinhphutan.tk4@gmail.com', $name);
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Resend Email verification from Group3 Movie Website';

        $email_template = "
    <h2>You have Registered with Group3 Movie Website</h2>
    <h5>Verify your email address to Login with the below given link</h5>
    <br/><br/>
    <a href='http://localhost:8077/Group3_Movie-website_new/verify-email.php?token=$verify_token'>Click me</a>
    ";

        $mail->Body = $email_template;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['resend-email-btn'])) {
    if (!empty(trim($_POST['email']))) {
        $email = mysqli_real_escape_string($connect, $_POST['email']);

        $checkEmail_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $checkEmail_query_run = mysqli_query($connect, $checkEmail_query);

        if (mysqli_num_rows($checkEmail_query_run) > 0) {
            $row = mysqli_fetch_array($checkEmail_query_run);
            if ($row['verify_status'] == 0) {
                $name = $row['name'];
                $phone = $row['phone'];
                $email = $row['email'];
                $verify_token = $row['verify_token'];

                resend_email_verify($name, $email, $verify_token);

                $_SESSION['status'] = "Verification email link has been sent to your email address!";
                header('Location: login.php');
                exit(0);
            } else {
                $_SESSION['status'] = "Email already verified. Please login!";
                header('Location: resend-email-verification.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "Email is not registered. Please register now!";
            header('Location: register.php');
            exit(0);
        }
    } else {
        $_SESSION['status'] = "Please enter the email field!";
        header('Location: resend-email-verification.php');
        exit(0);
    }
}
