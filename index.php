
<?php

// JSON
$user = [
    "name" => "Narges",
    "age" => 17,
    "country" => "Pakistan"
];

$json = json_encode($user);

echo "<h3>JSON:</h3>";
echo $json;

echo "<br><br>";

// Anonymous Function
$showUser = function($user) {
    return "Name: " . $user["name"] .
           "<br>Age: " . $user["age"] .
           "<br>Country: " . $user["country"];
};

echo "<h3>User Information:</h3>";
echo $showUser($user);

?>