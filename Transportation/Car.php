<?php

namespace Transportation;

class Car extends Vehicle
{
    protected bool $powerSteering;
    protected bool $ledScreen;

    public function __construct(
        string $name,
        string $color,
        string $model,
        string $company,
        bool $powerSteering = FALSE,
        bool $ledScreen = TRUE
    ) {
        parent::__construct($name, $color, $model, $company);
        $this->powerSteering = $powerSteering;
        $this->ledScreen = $ledScreen;
    }

    public function setPowerSteering($mode = TRUE)
    {
        if ($this->powerSteering != $mode) {
            print("Power Steering mode updated.\n");
        } else {
            $this->powerSteering = $mode;
            $modeString = (string) $mode;
            print("Power Steering set to $modeString.\n");
        }
    }

    public function addLedScreen()
    {
        if ($this->ledScreen) {
            print("Led Screen already supported.\n");
        } else {
            $this->ledScreen = TRUE;
            print("Led Screen added.\n");
        }
    }

    public function healthCheck()
    {
        print("Checked Engine.\n");
        print("Checked Break.\n");
        print("Checked Lights.\n");
        print("Checked Steering.\n");
    }
}
