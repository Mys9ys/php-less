<?php

namespace classes;

class Arr2
{
    private $nums = [];
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper;
    }

    // Находим сумму квадратов и кубов элементов массива:
    public function getSum23()
    {
        // Для краткости запишем $this->nums в переменную:
        $nums = $this->nums;

        // Найдем описанную сумму:
        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    public function add($number)
    {
        $this->nums[] = $number;
    }
}