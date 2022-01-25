<?php

$my_array = [1, 2, 3, 4 , 5];

# Flow 1
foreach ($my_array as $item) {
    print($item * 2);
}

# Flow 1.1
foreach ($my_array as $key => $value) {
    print("[$key]=" . $value * 2);
}

# Flow 2
for ($i = 0; $i < count($my_array) - 1; $i++) {
    print($my_array[$i] + 1);
}

# Flow 3
$j = 0;
while ($j <= 3) {
    print($my_array[$j] ** 2);
    $j++;
}

# Flow 4
$k = 0;
do {
    print($my_array[$k]);
    $k++;
}
while ($k <= 3);

