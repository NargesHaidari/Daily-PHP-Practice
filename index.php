
<?php

$students = [
    ["Narges", 17, "PHP"],
    ["Ali", 19, "JavaScript"],
    ["Sara", 18, "Python"],
    ["Ahmad", 20, "Laravel"]
];

echo "<h2>Student Information</h2>";

foreach ($students as [$name, $age, $course]) {

    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Course: $course <br>";
    echo "<hr>";
}