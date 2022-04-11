<?php

namespace classes;

class Magic
{
    private $prop1;
    private $prop2;

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    // Магический геттер свойств:
    public function __get($property)
    {
        return $this->$property;
    }
}