

<?php

$name = trim($_POST["name"] ?? "");

if (empty($name)) {
    echo "Please enter your name.";
} elseif (strlen($name) < 3) {
    echo "Name must be at least 3 characters.";
} else {
    echo "Welcome " . htmlspecialchars($name);
}