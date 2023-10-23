<?php
session_start();
include('dbconnect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendemail_verify($name, $email, $verify_token)
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
        $mail->Subject = 'Email verification from Group3 Movie Website';

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
if (isset($_POST['signup-btn'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $verify_token = md5(rand());

    //Email exists or not: Kiểm tra email có tồn tại hay không
    $check_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    //Kết nối db
    $check_email_query_run = mysqli_query($connect, $check_email_query);

    //Kiểm tra tồn tại email
    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['status'] = "Email already exists!";
        header('Location: register.php');
    } else {
        //insert user / Registered user data
        $query = "INSERT INTO users (name, phone, email, password, verify_token) VALUES ('$name', '$phone', '$email', '$password', '$verify_token')";
        $query_run = mysqli_query($connect, $query);

        if ($query_run) {
            sendemail_verify("$name", "$email", "$verify_token");

            $_SESSION['status'] = "Registration successfull! Please verify your email address.";
            header('Location: register.php');
        } else {
            $_SESSION['status'] = "Registration failed!";
            header('Location: register.php');
        }
    }
}
