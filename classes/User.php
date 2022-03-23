<?php

namespace classes;

class User
{
    private $name;
    private $age;

    // Конструктор объекта:
    public function __construct($name, $age)
    {
        $this->name = $name; // запишем данные в свойство name
        $this->age = $age; // запишем данные в свойство age
    }


    // Геттер для имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер для возраста:
    public function getAge()
    {
        return $this->age;
    }

    // Сеттер для возраста:
    public function setAge($age)
    {
        $this->age = $age;
    }

    // Метод для проверки возраста:
    private function isAgeCorrect($age)
    {
        if ($age >= 18 and $age <= 60) {
            return true;
        } else {
            return false;
        }
    }
}