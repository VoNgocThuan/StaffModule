<?php

abstract class Vehicle
{
    protected string $name;
    protected string $color;
    protected string $model;
    protected string $company;

    public function __construct(string $name, string $color,
        string $model, string $company)
    {
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
        $this->company = $company;
    }

    public function getInfo()
    {
        return [
            'name' => $this->name,
            'color' => $this->color,
            'model' => $this->model,
            'company' => $this->company
        ];
    }

    public abstract function healthCheck();
}

