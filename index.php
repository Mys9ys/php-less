<?php

use classes\Car;

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/internal_settings.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php';

$myCar = new Car;

$myCar->color = 'red'; // красим в красный цвет
$myCar->fuel = 50; // заливаем топливо


print_debug($myCar);