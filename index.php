<?php
require_once "Employes/Employee.php";
require_once "Employes/Team.php";
require_once "Salary/Fixed.php";
require_once "Salary/Hourly.php";
require_once "Position/Coder.php";
require_once "Position/Designer.php";
require_once "Position/MiddleDeveloper.php";
require_once "Position/SeniorDeveloper.php";

$X = new Team();

$employee = new Designer("Kolya", "Nikolyaevish", "Bobrov", new Fixed(3000));
$X->addEmployee($employee);

$employee = new SeniorDeveloper("Vasya", "Papkovich", "Ivanov", new Hourly(60, 10));
$X->addEmployee($employee);

$employee = new MiddleDeveloper("Misha", "Dimkovich", "Petrov", new Fixed(1000));
$X->addEmployee($employee);
;
$employee = new MiddleDeveloper("Dima", "Vasykavich", "Sidorov", new Fixed(1000));
$X->addEmployee($employee);

$employee = new Coder("Nikita", "Leshkavich", "Popov", new Hourly(120, 5));
$X->addEmployee($employee);

echo $X->getSumSalary();