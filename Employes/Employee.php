<?php
require_once "FullName.php";
class Employee extends FullName
{
    private $salary;

    public function __construct($firstName, $lastName, $patronymic, $salary)
    {
        parent::__construct($firstName, $lastName, $patronymic);
        $this->setSalary($salary);
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}