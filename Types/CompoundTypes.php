<?php

/**
 * PHP Compound Types
 */

# Arrays
$my_arr_1 = [1, 2, 3, 4];

$my_arr_2 = ['Welcome', 'to', 'PHP', 'Language'];

$my_arr_3 = [1, "mixed", NULL, $my_arr_1];

# Objects (init from Class)
class MySample {
    public function greet() {
        print("Hello, my buddy!\n");
    }
}
$my_obj = new MySample();
$my_obj->greet();

# Callable (or Callback)
# Some functions call_user_func, usort accept the callable
call_user_func(['MySample', 'greet']);

# Iterables
function generate_hour() {
    for ($i = 0; $i <= 23; $i++) {
        yield $i;
    }
}

$hourGenerator = generate_hour();
foreach($hourGenerator as $hour) {
    print($hour . "\n");
}

