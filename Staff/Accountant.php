<?php

namespace Staff;

class Accountant extends Employee implements IAccountantTask, IRevenueExpenditure, IGetBonus
{
    protected float $bonus;
    protected $revenue;
    protected $expenditure;

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
        //TODO: write reports.
    }
    
    public function getBonus()
    {
        return $this->bonus;
    }

    public function manageAccountingData()
    {
        //TODO: perform company accounting information here.
    }

    public function manageRevenue()
    {
        //TODO: perform company revenue information here.
    }

    public function manageExpenditure()
    {
        //TODO: perform company expenditure information here.
    }
}
