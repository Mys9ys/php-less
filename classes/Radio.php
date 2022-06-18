<?php

namespace classes;

class Radio extends Tag
{
    public function __construct()
    {
        $this->setAttr('type', 'radio');
        parent::__construct('input');
    }

    public function __toString()
    {
        return parent::open();
    }
}