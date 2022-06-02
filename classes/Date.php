<?php

namespace classes;

class Date
{
    public $date;
    protected $arDate = [];
    protected $arMonth = [
        'ru' => ['Январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'],
        'en' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
    ];
    protected $unixTime;

    protected $arWeekDay = [
        'ru' => ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
        'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
    ];

    public function __construct($date = null)
    {
        // если дата не передана - пусть берется текущая
        $this->date = !$date ? date("y-m-d") : $date;
        $this->arDate = explode('-', $this->date);
        $this->unixTime = strtotime($this->date);
    }

    public function getDay()
    {
        // возвращает день
        return $this->arDate[2];
    }

    public function getMonth($lang = null)
    {
        // возвращает месяц
        if (!$lang) return $this->arDate[1];

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
        return $this->arMonth[$lang][intval($this->arDate[1]) - 1];
    }

    public function getYear()
    {
        // возвращает год

        return $this->arDate[0];
    }

    public function getWeekDay($lang = null)
    {
        // возвращает день недели
        $numberDay = date('N', $this->unixTime);
        if (!$lang) return $numberDay;

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть день будет словом на заданном языке
        return $this->arWeekDay[$lang][$numberDay - 1];
    }

    public function addDay($value)
    {
        // добавляет значение $value к дню
        $this->date = date("Y-m-d", $this->unixTime+86400*$value);
        return $this;
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
        return $this->date;
    }
}