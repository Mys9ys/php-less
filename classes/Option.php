<?php

namespace classes;

class Option extends Tag
{
    public function __construct()
    {
        parent::__construct('option');
    }

    public function setSelected(){
        $this->setAttr('selected', 'true');
        return $this;
    }
}