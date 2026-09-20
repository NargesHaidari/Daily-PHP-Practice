<?php

class Student
{
    // Properties
    public $name;
    public $age;

    // Method
    public function introduce()
    {
        echo "Hello, my name is " . $this->name;
        echo "<br>";
        echo "I am " . $this->age . " years old.";
    }
}

$student1 = new Student();

$student1->name = "Narges";
$student1->age = 17;

$student1->introduce();

