<?php

namespace classes;

class Select extends Tag
{
    protected $options = [];

    public function __construct()
    {
        parent::__construct('select');
    }

    public function add(Option $item)
    {
        $this->options[] = $item;
        return $this;
    }

    public function show()
    {
        $result = $this->open();

        foreach ($this->options as $item) {
            $result .= $item->show();
        }

        $result .= $this->close();

        return $result;
    }

    public function __toString(){
        return $this->show();
    }

}