<?php

require __DIR__ . '/vendor/autoload.php';

use Transportation\Car;
use Transportation\Truck;
use Staff\Manager;
use Staff\Trainee;

// $my_car = new Car('Tien Nguyen', 'Black', '2021', 'Toyota', FALSE, FALSE);

// var_dump($my_car->getInfo());

// $my_car->healthCheck();



// $my_truck = new Truck('Tien Nguyen', 'Green', '2021', 'Hyundai', 20);

// var_dump($my_truck->getInfo());

// $my_truck->healthCheck();

$my_manager = new Manager(1, 'Thuan', 'Vo Ngoc', 'Manager', 'My Tho', 'abc@gmail.com', 'MA01', 23, '0843339738', 31, 10000000, true, 1000000);
$my_manager->calculateSalary();
var_dump($my_manager->getInfo());

$trainee = new Trainee(0, 'a', 'b', 'Trainee', 'abc street', 'a@gmail.com', 'abc department', 23, '0843339738', 31, 1000000);
$trainee->calculateSalary();
var_dump($trainee->getInfo());