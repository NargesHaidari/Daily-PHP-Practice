

<?php

class Student
{
    public $name;
    public $age;
    public $grade;
    public $favoriteSubject;

    public function introduce()
    {
        echo "My name is " . $this->name . "<br>";
        echo "I am " . $this->age . " years old.<br>";
        echo "I am in grade " . $this->grade . ".<br>";
        echo "My favorite subject is " . $this->favoriteSubject . ".<br>";
    }

    public function study()
    {
        echo $this->name . " is studying " . $this->favoriteSubject . ".<br>";
    }

    public function birthday()
    {
        $this->age++;
        echo $this->name . " is now " . $this->age . " years old.<br>";
    }
}


// Object 1
$student1 = new Student();

$student1->name = "Narges";
$student1->age = 17;
$student1->grade = 10;
$student1->favoriteSubject = "Computer Science";

$student1->introduce();
$student1->study();
$student1->birthday();

echo "<hr>";


// Object 2
$student2 = new Student();

$student2->name = "Sara";
$student2->age = 16;
$student2->grade = 10;
$student2->favoriteSubject = "Mathematics";

$student2->introduce();
$student2->study();
$student2->birthday();

?>

