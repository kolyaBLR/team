<?php
class Coder extends Employee
{
    public function __construct($firstName, $lastName, $patronymic, $salary)
    {
        parent::__construct($firstName, $lastName, $patronymic, $salary);
    }

    public function __toString()
    {
        return "Coder";
    }
}