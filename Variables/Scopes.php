<?php

function add_global_var() {
    $GLOBALS['new'] = "My New Global Variables";
}

add_global_var();
print($new);

// Other predefine $GLOBALS in PHP:
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION


