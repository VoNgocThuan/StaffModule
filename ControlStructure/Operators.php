<?php

$operations = [
    [1, "1"],
    ["1", 1],
    ["1", "1"],
    [1, 1.0],
    [FALSE, TRUE],
    [1, NULL]
];

foreach($operations as $op) {
    var_dump($op[0] + $op[1]);
    print("\n");
}

