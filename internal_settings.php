<?php
// пример реализации
// ищем файлы согласно директивы include_path
function myAutoload($classname) {
    $filename = $classname .".php";
    $class_name = str_replace('\\', '/', $filename);
    require_once $_SERVER['DOCUMENT_ROOT'] . '\\' . $class_name;
}

// регистрируем загрузчик
spl_autoload_register('myAutoload');
