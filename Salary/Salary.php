<?php
require_once "ISalary.php";
class Salary implements ISalary
{
    public function fixed($salary)
    {
        return $salary;
    }

    public function hourly($countHour, $salary)
    {
        return $salary * $countHour;
    }
}