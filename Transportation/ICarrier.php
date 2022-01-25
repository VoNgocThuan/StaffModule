<?php

namespace Transportation;

interface ICarrier 
{
    public function load();

    public function unload();

    public function getMaxCapacity();
}


