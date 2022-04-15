<?php

use template\Date;

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/internal_settings.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php';

$myDate = new Date();

print_debug($myDate->getDay());
print_debug($myDate->getMonth('ru'));
print_debug($myDate->getMonth('en'));
print_debug($myDate->getYear());

echo $myDate->getWeekDay();     // выведет '3'
echo $myDate->getWeekDay('ru'); // выведет 'среда'
echo $myDate->getWeekDay('en'); // выведет 'wednesday'
?>
<?php

//$myDate->addDay(1);

print_debug($myDate->addDay(1));
//echo (new Date('2025-12-31'))->addYear(1); // '2026-12-31'
//echo (new Date('2025-12-31'))->addDay(1);  // '2026-01-01'

//echo (new Date('2025-12-31'))->subDay(3)->addYear(1); // '2026-12-28'