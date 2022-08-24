<?php

namespace App;

class User
{
    public $name;
    private $age;

    public function sayHello()
    {
        return $this->name . " Hello";
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return "Name: " . $this->name . "<br> Age: " . $this->age;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

    private static $nextId = 0;
    public $myId;

    public static function printId()
    {
        return "User id is: ". self::$nextId;
    }
}

$user = new User('Sajjad', 20);

$user->__set('name', 'Tom');
echo $user->__get('name');
