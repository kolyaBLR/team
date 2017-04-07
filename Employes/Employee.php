<?php
class Employee
{
    private $firstName;
    private $lastName;
    private $patronymic;
    private $salary;

    public function __construct(string $firstName, string $lastName, string $patronymic, int $salary)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->patronymic = $patronymic;
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}