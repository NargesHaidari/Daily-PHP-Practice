

<?php

function showNames($names) {
    foreach ($names as $name) {
        echo $name . "<br>";
    }
}

$names = ["Ali", "Sara", "Reza", "Mina"];

showNames($names);

?>