<?php

$score = 75;

if ($score >= 90) {
    echo "Excellent";
} elseif ($score >= 60) {
    echo "Pass";
} else {
    echo "Fail";
}

echo "<br><br>";

$age = 20;
$result = ($age >= 18) ? "Adult" : "Minor";
echo $result;

echo "<br><br>";

$day = 2;

switch ($day) {
    case 1:
        echo "Saturday";
        break;

    case 2:
        echo "Sunday";
        break;

    default:
        echo "Unknown day";
}

?>