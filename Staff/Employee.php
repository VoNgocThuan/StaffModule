<?php

namespace Staff;

abstract class Employee
{
    protected int $empId;
    protected string $firstName;
    protected string $lastName;
    protected string $designation;
    protected string $address;
    protected string $email;
    protected string $department;
    protected int $age;
    protected string $phone;
    protected int $workingDays;
    protected float $salary;

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
        float $salary
    ) {
        $this->empId = $empId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->designation = $designation;
        $this->address = $address;
        $this->email = $email;
        $this->department = $department;
        $this->age = $age;
        $this->phone = $phone;
        $this->workingDays = $workingDays;
        $this->salary = $salary;
    }

    public function getInfo()
    {
        return [
            'id' => $this->empId,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'designation' => $this->designation,
            'address' => $this->address,
            'email' => $this->email,
            'department' => $this->department,
            'age' => $this->age,
            'phone' => $this->phone,
            'workingDays' => $this->workingDays,
            'monthly salary' => $this->salary,
        ];
    }

    public abstract function working();
    public abstract function calculateSalary();
    public abstract function writeReports();
}
