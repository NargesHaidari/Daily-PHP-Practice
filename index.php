<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'school';

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die('connection fialed: ' . mysqli_connect_error() . '<br>');
}else{
    echo 'connected successfuly' . '<br>';
}

$sql = "SELECT * FROM students";

$result = mysqli_query($conn , $sql);

while($row = mysqli_fetch_assoc($result)){
    echo $row['name'] . '<br>';
    echo $row['age'] . '<br>';
}


?>
