<?php
class User {
    public $name = "John";
    public $age;

    final public function printName($name) {
        return "My name is " . $name;
    }
}

class Manager extends User {
    public $name = "Jack";
}

$manage = new Manager();
echo $manager->ptintName("Sajjad");