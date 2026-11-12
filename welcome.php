<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit;
}
$pageTitle = 'Welcome';
include 'header.inc';
?>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>! You are logged in.</p>
<?php include 'footer.inc'; ?>
