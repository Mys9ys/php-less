<?php

use classes\Date;
use classes\File;
use classes\Interval;

require_once $_SERVER['DOCUMENT_ROOT'] . '/internal_settings.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php';

$date = new Date();
$date1 = new Date('2000-12-31');
$date2 = new Date('2022-06-03');
//echo $date;
//print_debug($date->getYear());
//print_debug($date->getMonth());
//print_debug($date->getMonth('ru'));
//print_debug($date->getMonth('en'));
//print_debug($date->getDay());
//print_debug($date->getWeekDay('ru'));
//print_debug($date->getWeekDay('en'));
//print_debug($date->getWeekDay());
//
//echo (new Date())->addDay(1);

//$interval = new Interval($date1, $date2);
//print_debug($interval);
//print_debug($interval->toDays());
//print_debug($interval->toMonths());
//print_debug($interval->toYears());

$file = new File('files/test.txt');

print_debug($file);
print_debug($file->getName());
print_debug($file->getDir());
print_debug($file->getExt());
print_debug($file->getSize());


$file->setText('tesst test');
$file->appendText('t432234t');
print_debug($file->getText());

$file->copy('files/copy.txt');
//$file->delete();
//$file->rename('new');
print_debug($file->replace('upload/new2.txt'));