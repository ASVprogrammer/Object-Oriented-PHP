<?php
class Teacher {
    public $name;
    public $age;

    public function welcomeMessage(){
        return "Have a good day";
    }
}
class Separation extends Teacher {
    public $lession;
    public $history;
}
$teacher = new Teacher();
$teacher-> name="Arthur";
$teacher-> age="37";
echo $teacher->name . "  " .$teacher->age. " years old";

$separation = new Separation();
$separation->name="Arthur";
$separation->age="37";
$separation->lession="Math";
$separation->history="16";
echo "<br><br>";
echo $separation->name . " " . $separation->age . " years old," . $separation->lession . " " . $separation->history . " years";
echo "<br>";
echo $separation->welcomeMessage();





