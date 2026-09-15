
<?php

$students = [
    ["name" => "Narges", "score" => 95],
    ["name" => "Sara", "score" => 82],
    ["name" => "Ali", "score" => 70]
];

$getResult = fn($score) => $score >= 60 ? "Passed" : "Failed";

foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Score: " . $student["score"] . "<br>";
    echo "Result: " . $getResult($student["score"]) . "<br>";
    echo "<hr>";
}

?>