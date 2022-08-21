<?php
class User{
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
       // echo "my name is: " .$this->name; ok
    }

    public function __destruct(){
       echo "Destrucor is always run end of the code";
    }

    public function myAge() {
        return "My age: ". $this->age;
    }
}

$user = new User("Sajjad", 20);
//echo "my name is: " .$user->name; ok
echo $user->myAge();
echo "<br>";