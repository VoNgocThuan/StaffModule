<?php

class Car {
    public static $conditions = ['Good', 'Need For Maintenance', 'Broken'];

    public static function setNewConditions($conds) {
        self::$conditions = $conds;
    }
}

var_dump(Car::$conditions);

Car::setNewConditions(['Good', 'Bad']);

var_dump(Car::$conditions);


