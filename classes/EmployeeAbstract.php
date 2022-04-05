<?php

namespace classes;

class EmployeeAbstract extends UserAbstract
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    // Напишем реализацию метода:
    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }
}