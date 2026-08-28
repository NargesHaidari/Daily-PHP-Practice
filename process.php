

<?php

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);

$name = htmlspecialchars($name, ENT_QUOTES, "UTF-8");
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

echo "Name: " . $name . "<br>";
echo "Email: " . $email;

?>