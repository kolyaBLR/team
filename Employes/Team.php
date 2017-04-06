<?php
class Team
{
    private $employes = array();

    public function addEmployee($empl)
    {
        $this->employes[] = $empl;
    }

    public function getSumSalary()
    {
        $sum = 0;
        foreach ($this->employes as $employee){
            $sum += $employee->getSalary();
        }
        return $sum;
    }
}