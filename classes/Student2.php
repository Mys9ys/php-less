<?php

namespace classes;

class Student2
{
    private $name;
    private $scholarship; // стипендия

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }
}