<?php
require_once "ISalary.php";
class Hourly implements ISalary
{
    private $salary;

    public function __construct(int $countHourly, int $salary)
    {
        $this->salary = $countHourly * $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}