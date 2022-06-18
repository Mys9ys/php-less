<?php

namespace classes;

class Textarea extends Tag
{
    public function __construct()
    {
        parent::__construct('textarea');
    }

    public function show()
    {
        $name = $this->getAttr('name');

        // Если атрибут name задан у инпута:
        if ($name) {
            if (isset($_REQUEST[$name])) {
                $this->setText($_REQUEST[$name]);
            }
        }

        return parent::show();
    }

    public function __toString()
    {
        return $this->show();
    }
}