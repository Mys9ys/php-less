<?php

namespace classes;

class CookieShell
{
    public function set($name, $value, $time)
    {
        // устанавливает куки
        // $time задает время в сек, через сколько кука умрет
        setcookie($name, $value, time() + $time);
        $_COOKIE[$name] = $value; // принудительно запишем в массив
    }

    public function get($name)
    {
        // получает куки
        return $_COOKIE[$name] ?: null;
    }

    public function del($name)
    {
        setcookie($name, '', -1);
        unset($_COOKIE[$name]);
    }

    public function exists($name)
    {

        // проверяет наличие куки
        return $_COOKIE[$name] ? true : null;
    }
}