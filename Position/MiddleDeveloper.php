<?php
class MiddleDeveloper extends Employee
{
    public function __construct($firstName, $lastName, $patronymic, $salary)
    {
        parent::__construct($firstName, $lastName, $patronymic, $salary);
    }

    public function __toString()
    {
        return "Middle Developer";
    }
}