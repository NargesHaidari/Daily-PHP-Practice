

<?php
session_start();

if (isset($_POST['login'])) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: process.php");
    exit();
}
?>

<h2>Login</h2>

<form method="post">
    <input type="text" name="username" placeholder="Enter username">
    <button type="submit" name="login">Login</button>
</form>


