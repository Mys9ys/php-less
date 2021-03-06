<?php

namespace template;

class Date
{
    private $date;

    public function __construct($date = null)
    {
        // если дата не передана - пусть берется текущая
        if (empty($date)) $date = date('y-m-d');

        $this->date = $date;
    }

    public function getDay()
    {
        // возвращает день
        return date("d", strtotime($this->date));
    }

    public function getMonth($lang = null)
    {
        $months = array(1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
        switch ($lang) {
            case 'ru':
                return date($months[date('n')], strtotime($this->date));
                break;
            case 'en':
                return date("F", strtotime($this->date));
                break;
            default:
                return date("m", strtotime($this->date));
        }
        // возвращает месяц

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке

    }

    public function getYear()
    {
        // возвращает год
        return date("Y", strtotime($this->date));
    }

    public function getWeekDay($lang = null)
    {
        $days = array(1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
        switch ($lang) {
            case 'ru':
                return date($days[date('N')], strtotime($this->date));
                break;
            case 'en':
                return date("l", strtotime($this->date));
                break;
            default:
                return date("N", strtotime($this->date));
        }
        // возвращает день недели

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть день будет словом на заданном языке
    }

    public function addDay($value)
    {
        // добавляет значение $value к дню

//        return false;
        return (string)date("y-m-d", strtotime("+" . $value . " days", strtotime($this->date)));
//        var_dump(date("y-m-d", strtotime("+" . $value . " days", strtotime($this->date))));
//        $this->date = date("y-m-d", strtotime("+" . $value . " days", strtotime($this->date)));
//        return $this;

    }

    public function subDay($value)
    {
        // отнимает значение $value от дня
    }

    public function addMonth($value)
    {
        // добавляет значение $value к месяцу
    }

    public function subMonth($value)
    {
        // отнимает значение $value от месяца
    }

    public function addYear($value)
    {
        // добавляет значение $value к году
        $this->date = date("y-m-d", strtotime("+" . $value . " year", strtotime($this->date)));
        return $this;
    }

    public function subYear($value)
    {
        // отнимает значение $value от года
    }

    public function format($format)
    {
        // выведет дату в указанном формате
        // формат пусть будет такой же, как в функции date
    }

    public function __toString()
    {
        // выведет дату в формате 'год-месяц-день'
    }
}