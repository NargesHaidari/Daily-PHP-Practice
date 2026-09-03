

<?php


$name = "Narges";
$age = 17;
$country = "Pakistan";
$language = "English";

function showInformation() {
    echo "Name: " . $GLOBALS['name'] . "<br>";
    echo "Age: " . $GLOBALS['age'] . "<br>";
    echo "Country: " . $GLOBALS['country'] . "<br>";
    echo "Language: " . $GLOBALS['language'] . "<br>";
}

$_ENV['APP_NAME'] = "My Website";
$_ENV['APP_VERSION'] = "1.0";
$_ENV['APP_AUTHOR'] = "Narges";

echo "Application: " . $_ENV['APP_NAME'] . "<br>";
echo "Version: " . $_ENV['APP_VERSION'] . "<br>";
echo "Author: " . $_ENV['APP_AUTHOR'] . "<br><br>";

showInformation();

?>
