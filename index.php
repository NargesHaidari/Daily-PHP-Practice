<?php

$text = "Hello World";

echo strlen($text);
echo "<br><br>";

echo strtolower($text);
echo "<br><br>";

echo strtoupper($text);
echo "<br><br>";

echo str_replace("World", "PHP", $text);
echo "<br><br>";

echo substr($text, 0, 5);
echo "<br><br>";

echo strpos($text, "World");
echo "<br><br>";

echo trim("   Hello   ");
echo "<br><br>";

echo ucfirst("hello");
echo "<br><br>";

echo ucwords("hello world");
echo "<br><br>";

echo str_repeat("Hi ", 3);
echo "<br><br>";

echo str_contains($text, "World") ? "Yes" : "No";
echo "<br><br>";

echo str_starts_with($text, "Hello") ? "Yes" : "No";
echo "<br><br>";

echo str_ends_with($text, "World") ? "Yes" : "No";

?>