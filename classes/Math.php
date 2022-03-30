<?php

namespace classes;

class Math
{
    // Найдем удвоенную сумму:
    public static function getDoubleSum($a, $b)
    {
        return 2 * self::getSum($a, $b); // используем другой метод
    }

    public static function getSum($a, $b)
    {
        return $a + $b;
    }

    public static function getProduct($a, $b)
    {
        return $a * $b;
    }
}