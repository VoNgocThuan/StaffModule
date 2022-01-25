<?php

namespace Staff;

class Manager extends Employee implements IManagerTask, IRevenueExpenditure, IGetBonus
{
    protected bool $secretary;
    protected float $bonus;
    protected $requirement;
    protected $employee;
    protected $task;

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
        bool $secretary,
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
        $this->secretary = $secretary;
        $this->bonus = $bonus;
    }

    public function setSecretary()
    {
        if ($this->secretary == TRUE) {
            print("Manager has secretary.\n");
        } else {
            print("Manager does not have secretary.\n");
        }
    }

    public function working()
    {
        if($this->empId == 0) {
            print("Not working or being a trainee.\n");
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
        //TODO: write reports
    }

    public function getBonus()
    {
        return $this->bonus;
    }

    public function manageRequirement() {
        // TODO: perform customer requirement information to manage here.
    }

    public function manageEmployee()
    {
        // TODO: perform employee information to manage here.
    }

    public function assignTask() {
        // TODO: assign task for teams here.
    }

    public function manageRevenue()
    {
        //TODO: perform company revenue information to manage here.
    }

    public function manageExpenditure()
    {
        //TODO: perform company expenditure information to manage here.
    }
}
