<?php

# Flow 1
$bid_flag = '1';

if ($bid_flag == -1) {
    print("Flow 1 - Sale!\n");
}
elseif ($bid_flag === 1) {
    print("Flow 1 - Buy!\n");
}
else {
    print("Flow 1 - Keep!\n");
}

# Flow 2
const SALE_STATE = -1;
const BUY_STATE = 1;
const KEEP_STATE = 0;

switch ($bid_flag) {
    case SALE_STATE:
        print("Flow 2 - Sale!\n");
        break;
    case BUY_STATE:
        print("Flow 2 - Buy!\n");
        break;
    case KEEP_STATE:
        print("Flow 2 - Keep!\n");
        break;
    default:
        print("Flow 2 - Invalid State data!\n");
        break;
}

