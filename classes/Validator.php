<?php

namespace classes;

class Validator
{
    public function isEmail($str)
    {
        // проверяет строку на то, что она корректный email
        return filter_var($str, FILTER_VALIDATE_EMAIL) ? 'Корректен' : 'Не корректен';
    }

    public function isDomain($str)
    {
        // проверяет строку на то, что она корректное имя домена
        return filter_var($str, FILTER_VALIDATE_URL) ? 'Корректен' : 'Не корректен';
    }

    public function inRange($num, $from, $to)
    {
        // проверяет число на то, что оно входит в диапазон
        return ($num >= $from && $num <= $to) ? 'Входит в диапазон' : 'Не входит в диапазон';
    }

    public function inLength($str, $from, $to)
    {
        // проверяет строку на то, что ее длина входит в диапазон
        return (strlen($str) >= $from && strlen($str) <= $to) ? 'Длина входит в диапазон' : 'Длина не входит в диапазон';
    }
}
