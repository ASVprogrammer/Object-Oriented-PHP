<?php

namespace App\Separation;

use App\Teacher;

class Separation extends Teacher
{
    private $lession;
    public $history;

    public function setLession($name)
    {
        $this->lession = $name;

        return $this;
    }

    public function showHistroy()
    {
        return $this->lession * 2;
    }
}

$separation = new Separation();
$separation->name = "Arthur";
$separation->age = "37";
$separation->history = "16";

$separation->setLession("Math")->history = 12;

echo $separation->name . " " . $separation->age . " years old," . $separation->lession . " " . $separation->history . " years";
echo $separation->welcomeMessage();
