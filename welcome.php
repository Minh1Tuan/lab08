<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome, " . htmlspecialchars($_SESSION['user']) . "! You are logged in.";
} else {
    header('Location: login.html');
    exit;
}
?>
