<?php
session_start();

if (!isset($_SESSION['authenticated'])) {
    $_SESSION['status'] = "Please login to access Movie ZoZo!";
    header('Location: login.php');
    exit(0);
}
