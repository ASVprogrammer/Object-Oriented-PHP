<?php

class User
{
    public $name;

    public function sayHello()
    {
        return $this->name . " Hello";
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
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
}

$user = new User('Sajjad', 20);

$user->__set('name', 'Tom');
echo $user->__get('name');
