
<?php

$fruits = ["Apple", "Banana", "Orange", "Mango"];

echo count($fruits);
echo "<br>";

echo in_array("Banana", $fruits) ? "Yes" : "No";
echo "<br>";

array_push($fruits, "Grapes");
print_r($fruits);
echo "<br>";

array_pop($fruits);
print_r($fruits);
echo "<br>";

sort($fruits);
print_r($fruits);
echo "<br>";

rsort($fruits);
print_r($fruits);
echo "<br>";

$numbers = [10, 20, 30, 40];

echo array_sum($numbers);
echo "<br>";

echo array_search(30, $numbers);
echo "<br>";

$newFruits = array_slice($fruits, 1, 2);
print_r($newFruits);
echo "<br>";

$moreFruits = ["Peach", "Watermelon"];

$allFruits = array_merge($fruits, $moreFruits);
print_r($allFruits);

?>