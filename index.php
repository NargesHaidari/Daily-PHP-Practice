

<?php

$name = "Narges";
$count = 0;

$numbers = [1, 2, 3, 4];


// 1. simple Closure
$greet = function($name) {
    return "Hello $name";
};

echo $greet("Narges") . "<br>";


// 2. Closure with use
$message = "Welcome";

$welcome = function($name) use ($message) {
    return "$message, $name";
};

echo $welcome($name) . "<br>";


// 3. Closure with Reference
$increase = function() use (&$count) {
    $count++;
};

$increase();
$increase();

echo "Count: $count<br>";


// 4. Closure as Callback
$result = array_map(function($number) {
    return $number * 2;
}, $numbers);

print_r($result);
echo "<br>";


// 5. Arrow Function
$result2 = array_map(fn($number) => $number * 2, $numbers);

print_r($result2);