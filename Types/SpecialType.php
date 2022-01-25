<?php

/**
 * PHP Special Types
 */

# NULL Type
$my_null = NULL;

# Resource Type
# Special variables that hold references to resources external to PHP 
# (such as database connections, file stream).

$fp = fopen("text.txt", "r");

var_dump($fp); # stream type

print(stream_get_contents($fp));

fclose($fp);

