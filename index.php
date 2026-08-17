<?php

// 1. Arithmetic Operators

$a = 10;
$b = 3;

echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";
echo $a ** $b . "<br>";


// 2. Assignment Operators

$x = 10;

$x += 5;
$x -= 2;
$x *= 2;
$x /= 2;
$x %= 3;


// 3. Comparison Operators

$num1 = 10;
$num2 = 5;

var_dump($num1 == $num2);
echo "<br>";

var_dump($num1 === $num2);
echo "<br>";

var_dump($num1 != $num2);
echo "<br>";

var_dump($num1 !== $num2);
echo "<br>";

var_dump($num1 > $num2);
echo "<br>";

var_dump($num1 < $num2);
echo "<br>";

var_dump($num1 >= $num2);
echo "<br>";

var_dump($num1 <= $num2);
echo "<br>";


// 4. Logical Operators

$age = 20;

var_dump($age >= 18 && $age <= 30);
echo "<br>";

var_dump($age < 18 || $age > 30);
echo "<br>";

var_dump(!($age > 18));
echo "<br>";


// 5. Increment & Decrement

$count = 5;

$count++;
$count--;

++$count;
--$count;


// 6. String Operators

$firstName = "Ali";
$lastName = "Ahmadi";

$fullName = $firstName . " " . $lastName;

echo $fullName . "<br>";

$firstName .= " Khan";

echo $firstName . "<br>";


// 7. Ternary Operator

$age = 20;

$result = ($age >= 18) ? "Adult" : "Young";

echo $result . "<br>";


// 8. Null Coalescing Operator ??

$name = null;

$result = $name ?? "Unknown";

echo $result . "<br>";

?>