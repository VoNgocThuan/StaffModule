<?php

namespace Staff;

class Supervisor extends Employee implements ISupervisorTask, IGetBonus
{
    protected float $bonus;
    protected $products;
    protected $employees;

    public function __construct(
        int $empId,
        string $firstName,
        string $lastName,
        string $designation,
        string $address,
        string $email,
        string $department,
        int $age,
        string $phone,
        int $workingDays,
        float $salary,
        float $bonus
    ) {
        parent::__construct(
            $empId,
            $firstName,
            $lastName,
            $designation,
            $address,
            $email,
            $department,
            $age,
            $phone,
            $workingDays,
            $salary
        );
        $this->bonus = $bonus;
    }

    public function working()
    {
        if ($this->empId == 0) {
            print("Not working.\n");
        } else {
            print("Working.\n");
        }
    }

    public function calculateSalary()
    {
        $this->salary = (($this->salary + $this->bonus) / 26) * (float) $this->workingDays;
    }

    public function writeReports()
    {
        //TODO: write reports.
    }

    public function getBonus()
    {
        return $this->bonus;
    }

    public function coordinateActivities()
    {
        //TODO: perform coordinated activities for employees here.
    }

    public function manageEmployeeActivities()
    {
        //TODO: perform employees activities here.
    }

    public function monitorProductsSupplied()
    {
        //TODO: perform information of products supplied here.
    }    
}
