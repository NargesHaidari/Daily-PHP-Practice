<?php

// 1. for
echo "for:<br>";

for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}


// 2. while
echo "<br>while:<br>";

$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}


// 3. do...while
echo "<br>do...while:<br>";

$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);


// 4. foreach
echo "<br>foreach:<br>";

$names = ["Ali", "Sara", "Reza"];

foreach ($names as $name) {
    echo $name . "<br>";
}

?>