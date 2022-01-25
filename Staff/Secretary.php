<?php

namespace Staff;

class Secretary extends Employee implements ISecretaryTask, IGetBonus
{
    protected float $bonus;
    protected $schedule;

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

    public function organizeMeetingSchedule()
    {
        //TODO: create and arrange meeting schedule here.
    }

    public function organizeWorkingSchedule()
    {
        //TODO: create and arrange working schedule here.
    }
}
