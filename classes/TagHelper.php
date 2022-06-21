<?php

namespace classes;

class TagHelper
{
    public function open($name, $attrs = [])
    {
        $attrsStr = $this->getAttrsStr($attrs);
        return "<$name$attrsStr>";
    }

    public function close($name)
    {
        return "</$name>";
    }

    // Формируем строку с атрибутами:
    private function getAttrsStr($attrs)
    {
        if (!empty($attrs)) {
            $result = '';

            foreach ($attrs as $name => $value) {
                if ($value === true) {
                    $result .= " $name";
                } else {
                    $result .= " $name=\"$value\"";
                }
            }

            return $result;
        } else {
            return '';
        }
    }
}