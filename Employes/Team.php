<?php
class Team
{
    private $employes = array();

    public function addEmployee(Employee $employee)
    {
        $this->employes[] = $employee;
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