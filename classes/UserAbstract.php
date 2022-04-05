<?php

namespace classes;

abstract class UserAbstract
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // Абстрактный метод без тела:
    abstract public function increaseRevenue($value);
}