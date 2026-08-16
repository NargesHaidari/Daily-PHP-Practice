

<?php

$name = "Narges";
$age = 20;
$height = 1.65;
$isStudent = true;
$favoriteColor = null;
$skills = ['React', 'Javascript', 'HTML', 'CSS'];
function greet($name){
    return "Hello " . $name;
}

echo $name . '<br>';
echo $age . '<br>';
echo $height . '<br>';
echo $isStudent . '<br>';
echo $favoriteColor . '<br>';
print_r($skills);
echo '<br>';
echo greet($name);



