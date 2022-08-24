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
