<?php

class Employee extends Manager
{
    public function showProject($project = "Apple")
    {
        return "I am working in " . $project;
    }

    public function startProject($project)
    {
        return $this->showProject($project);
    }
}
