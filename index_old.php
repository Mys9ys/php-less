<?php

use classes\Arr;
use classes\Arr2;
use classes\Car;
use classes\Employee;
use classes\Employee2;
use classes\EmployeeAbstract;
use classes\EmployeesCollection;
use classes\Magic;
use classes\Math;
use classes\Student;
use classes\tCity;
use classes\TestStatic;
use classes\tUser;
use classes\User;
use classes\User2;


$myCar = new Car;

$myCar->color = 'red'; // красим в красный цвет
$myCar->fuel = 50; // заливаем топливо


// Первый объект
//$user1 = new User; // создаем первый объект
//$user1->name = 'john'; // записываем имя
//$user1->setAge(24); // записываем возраст
//$user1->addAge(4); // записываем возраст

// Второй объект
//$user2 = new User; // создаем второй объект
//$user2->setName('eric'); // записываем имя
//$user2->age = 30; // записываем возраст

$user1 = new User('john', 25);

$user2 = new User('eric', 5);

// Найдем сумму возрастов:
echo $user1->getAge() + $user2->getAge(); // выведет 55

$users = [
    new User('john', 21),
    new User('eric', 22),
    new User('kyle', 23)
];



print_debug($myCar);
print_debug($user1);
print_debug($user2);

print_debug($users, 'users');

$arr = new Arr([1, 2, 3]); // создаем объект, записываем в него массив [1, 2, 3]
$arr->add(4); // добавляем в конец массива число 4
$arr->add(5); // добавляем в конец массива число 5

// Находим сумму элементов массива:
print_debug($arr->getSum());

print_debug($arr->add(1)->add(2)->push([3, 4])->getSum());
print_debug($arr);
print_debug((new Arr)->add(7)->add(2)->push([3, 4, 8])->getSum());

$sal = new Employee('kyle', 23);
$sal->setSalary('sal');

print_debug($sal);

$student = new Student('john', 25);

$student->setCourse(3);    // установим курс

$student->addOneYear();    // увеличим возраст на единицу
print_debug($student);

$arr = new Arr2(); // создаем объект

$arr->add(1); // добавляем в массив число 1
$arr->add(2); // добавляем в массив число 2
$arr->add(3); // добавляем в массив число 3

// Находим сумму квадратов и кубов:

print_debug($arr->getSum23());

$employeesCollection = new EmployeesCollection;

$employeesCollection->add(new Employee2('john', 100));
$employeesCollection->add(new Employee2('eric', 200));
$employeesCollection->add(new Employee2('kyle', 300));

echo $employeesCollection->getTotalSalary(); // выведет 600

print_debug($employeesCollection);

echo Math::getSum(1, 2) + Math::getProduct(3, 4);

print_debug(Math::getDoubleSum(1, 2));

// Cоздаем объект класса:
$test = new TestStatic;

// Записываем значение в статическое свойство:
$test::$staticProperty  = 'static';

// Выводим значение, обратившись к классу:
echo TestStatic::$staticProperty; // выведет 'static'

// Выводим значение, обратившись к объекту класса:
echo $test::$staticProperty; // выведет 'static'

$user1 = new User2('user1'); // создаем первый объект класса
echo User2::getCount() . PHP_EOL; //выведет 1

$user2 = new User2('user2'); // создаем второй объект класса
echo User2::getCount() . PHP_EOL; //выведет 2


$employee = new EmployeeAbstract();
$employee->setName('john');      // установим имя
$employee->setSalary(1000);      // установим зарплату
$employee->increaseRevenue(100); // увеличим зарплату

echo '<br>';
echo $employee->getSalary();     // выведет 1100


echo '<br>';
$user = new tUser('john', 30);
echo $user->getName(); // выведет 'john'

echo '<br>';
echo $user->getAge();  // выведет 30

echo '<br>';
$city = new tCity('Minsk', 1000);
echo $city->getName(); // выведет 'Minsk'
echo '<br>';
echo $city->getAge();  // выведет 1000

$test = new Magic();

$test->prop1 = 1; // запишем 1
$test->prop2 = 2; // запишем 2
echo '<br>';
echo $test->prop1; // выведет 1
echo '<br>';
echo $test->prop2; // выведет 2
echo '<br>';
$test->prop3 = 3; // запишем 3
echo $test->prop3; // выведет 3
