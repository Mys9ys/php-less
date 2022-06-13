<?php

namespace classes;

class Link extends Tag
{
    protected $activeLinkClass = 'active';
    public function __construct()
    {
        parent::__construct('a');
        $this->setAttr('href', '');
    }

    // Переопределяем метод родителя:
    public function open()
    {
        $this->activateSelf(); // вызываем активацию
        return parent::open(); // вызываем метод родителя
    }

    private function activateSelf()
    {
        if ($this->getAttr('href') === $_SERVER['REQUEST_URI']) {
            $this->addClass($this->activeLinkClass);
        }
    }
}