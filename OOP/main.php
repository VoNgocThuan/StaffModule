<?php

require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/Truck.php';

$my_car = new Car('Tien Nguyen', 'Black', '2021', 'Toyota', FALSE, FALSE);

var_dump($my_car->getInfo());

$my_car->healthCheck();



$my_truck = new Truck('Tien Nguyen', 'Green', '2021', 'Hyundai', 20);

var_dump($my_truck->getInfo());

$my_truck->healthCheck();
