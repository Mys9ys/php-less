<?php

namespace classes;

class Tag
{
    private $name;
    private $attrs;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Реализуем метод для атрибутов:
    public function setAttr($name, $value)
    {
        $this->attrs[$name] = $value;
        return $this; // возвращаем $this чтобы была цепочка
    }

    public function removeAttr($name){
        unset($this->attrs[$name]);
        return $this;
    }

    public function setAttrs($attrs)
    {
        foreach ($attrs as $name => $value) {
            $this->setAttr($name, $value);
        }

        return $this;
    }

    // Выводим открывающую часть тега:
    public function open()
    {
        $attrs = $this->getAttrsStr($this->attrs);
        return "<$this->name $attrs>";
    }

    public function close()
    {
        return "</$this->name>";
    }

    private function getAttrsStr($attrs)
    {
        if (!empty($attrs)) {
            $result = '';

            foreach ($attrs as $name => $value) {
                $result .= " $name=\"$value\"";
            }

            return $result;
        } else {
            return '';
        }
    }
}