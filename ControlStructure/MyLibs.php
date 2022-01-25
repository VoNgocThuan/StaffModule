<?php

class MyLib {
    public function getData() {
        print("Retrieved data from partner!\n");
    }

    public function writeData($mode = 'file') {
        sleep(2);
        print("Data written into $mode!\n");
    }
}
