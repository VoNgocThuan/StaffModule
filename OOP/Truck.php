<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/ICarrier.php';

class Truck extends Vehicle implements ICarrier
{
    protected int $maxCapacity;
    protected $carrier;


    public function __construct(string $name, string $color,
        string $model, string $company,
        int $maxCapacity=10)
    {
        parent::__construct($name, $color, $model, $company);
        $this->maxCapacity = $maxCapacity;
    }

    public function healthCheck()
    {
        print("Checked Engine.\n");
        print("Checked Break.\n");
        print("Checked Lights.\n");
        print("Checked Container.\n");
    }

    public function getMaxCapacity()
    {
        return $this->maxCapacity;
    }

    public function load() {
        // TODO: perform cargo load here.
    }

    public function unload() {
        // TODO: perform package upload here.
    }

}

