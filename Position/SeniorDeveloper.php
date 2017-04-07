<?php
class SeniorDeveloper extends Employee
{
    public function __construct(string $firstName, string $lastName, string $patronymic, ISalary $salary)
    {
        parent::__construct($firstName, $lastName, $patronymic, $salary->getSalary());
    }
}