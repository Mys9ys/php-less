<?php

use template\Date;

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/internal_settings.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php';

$myDate = new Date();

print_debug($myDate->getDay());
print_debug($myDate->getMonth('ru'));
print_debug($myDate->getMonth('en'));
print_debug($myDate->getYear());