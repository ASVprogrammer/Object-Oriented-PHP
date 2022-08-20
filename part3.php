<?php

// Acces modifiers = Public, Private, Protected
class User {
    //properties
    public $name;
    private $family_name;
    protected $age;
    //Methods

}
$user = new User();
$user ->name = "Sajjad";
//$user ->family_name = "Vosough";
//$user ->age = "20";


echo $user ->name;  // ok
//echo $user ->family_name; //Error
//echo $user ->age; // Error