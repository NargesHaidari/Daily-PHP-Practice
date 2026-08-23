

<?php

// Scope in PHP

$x = 10;

function test() {
    $y = 20;
    static $z = 0;

    $z++;

    echo $y;
    echo $z;
}

test();
test();

echo $x;


// Type declarations

function add(int $a, int $b): int {
    return $a + $b;
}

function greet(string $name): string {
    return "Hello " . $name;
}

function isAdult(int $age): bool {
    return $age >= 18;
}

function getNumbers(): array {
    return [1, 2, 3];
}

class User {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

echo add(5, 3);
echo "<br>";

echo greet("Ali");
echo "<br>";

var_dump(isAdult(20));
echo "<br>";

print_r(getNumbers());
echo "<br>";

$user = new User("Ali", 20);

echo $user->name;
echo "<br>";

echo $user->age;

