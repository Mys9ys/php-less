<?php

namespace classes;

class User
{
    public $name;
    public $age;

    // Метод для изменения имени юзера:
    public function setName($name)
    {
        $this->name = $name; // запишем новое значение свойства name
    }
}