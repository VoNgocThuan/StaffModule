<?php

// include_once __DIR__ . '/NoteExistedFile.php';
require_once __DIR__ . '/MyLibs.php';


$handler = new MyLib();

// Print "Retrieved data from partner!"
$handler->getData(); 

// Wait for 2 seconds"
// Then print "Data written into database"
$handler->writeData('database');
