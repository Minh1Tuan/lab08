<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == 'Tuan' && $password == '105943126') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    header('Location: login.html?error=1');
    exit;
}
?>
