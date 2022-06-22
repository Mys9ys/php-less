<?php

namespace classes;

class FormHelper extends TagHelper
{
    public function openForm($attrs = [])
    {
        return $this->open('form', $attrs);
    }

    public function closeForm()
    {
        return $this->close('form');
    }

    public function input($attrs = [])
    {
        if (isset($attrs['name'])) {
            $name = $attrs['name'];

            if (isset($_REQUEST[$name])) {
                $attrs['value'] = $_REQUEST[$name];
            }
        }

        return $this->open('input', $attrs);
    }

    public function password($attrs = [])
    {
        $attrs['type'] = 'password';
        return $this->input($attrs);
    }

    public function hidden($attrs = [])
    {
        $attrs['type'] = 'hidden';
        return $this->open('input', $attrs);
    }

    public function submit($attrs = [])
    {
        $attrs['type'] = 'submit';
        return $this->open('input', $attrs);
    }

    public function checkbox($attrs = [])
    {
        $attrs['type'] = 'checkbox';
        $attrs['value'] = 1;

        if (isset($attrs['name'])) {
            $name = $attrs['name'];

            if (isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
                $attrs['checked'] = true;
            }

            $hidden = $this->hidden(['name' => $name, 'value' => '0']);
        } else {
            $hidden = '';
        }

        return $hidden . $this->open('input', $attrs);
    }

    public function textarea($attrs = []){
        $arAttrs = [];
        $text = '';

        if (isset($attrs['text'])) {
            $text = $attrs['text'];
        }

        if (isset($attrs['name'])) {
            $name = $arAttrs['name'] =$attrs['name'];

            if (isset($_REQUEST[$name])) {
                $text = $_REQUEST[$name];
            }
        }

        if (isset($attrs['class'])) {
            $arAttrs['class'] = $attrs['class'];
        }

        $open = $this->open('textarea', $arAttrs);
        return $open . $text . $this->close('textarea');
    }

    public function select($attrs = [], $options = []){

        $open = $this->open('select', $attrs);

        $arOptions = '';
        if($options){
            foreach ($options as $item){
                $arOptions .= $this->option($item);
            }
        }

        return $open . $arOptions . $this->close('select');
    }

    public function option($arr){
        return $this->open('option', $arr['attrs'])
            . $arr['text'] . $this->close('option');
    }
}