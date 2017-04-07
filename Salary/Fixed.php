<?php
require_once "ISalary.php";
class Fixed implements ISalary
{
    private $salary;

    public function __construct(int $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}