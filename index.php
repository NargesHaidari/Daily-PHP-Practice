
<?php

$username = "Narges";
$password = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        header("Location: home.php");
        exit;
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">

    <label>Username:</label>
    <input type="text" name="username">

    <br><br>

    <label>Password:</label>
    <input type="password" name="password">

    <br><br>

    <button type="submit">Login</button>

</form>

</body>
</html>
