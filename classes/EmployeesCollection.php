<?php

namespace classes;

class EmployeesCollection
{
    private $employees = [];

    // Получаем всех работников в виде массива:
    public function get()
    {
        return $this->employees;
    }

    // Подсчитываем количество хранимых работников:
    public function count()
    {
        return count($this->employees);
    }

    public function add($employee)
    {
        $this->employees[] = $employee;
    }

    public function getTotalSalary()
    {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }

        return $sum;
    }
}