<?php

namespace Staff;

class Trainee extends Employee
{
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
    }

    public function working()
    {
        if($this->empId == null) {
            print("Not working or being a trainee.\n");
        } else {
            print("Working.\n");
        }
    }

    public function calculateSalary()
    {
        $this->salary = $this->salary;
    }

    public function writeReports()
    {
        //TODO: write reports
    }
}
