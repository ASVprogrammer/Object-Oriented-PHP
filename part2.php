<?php
//Define a class
class User
{
    //Properties
    public $name;

    //Methods
    public function sayHello(){
        return $this ->name ." Hello";
    }
}
//Instantiate user object from "User class"
$user = new User();
$user ->name = "Sajjad";
//echo $user->name;
echo "<br>";
echo  $user->sayHello();


