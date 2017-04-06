<?php
require_once "Employes/Employee.php";
require_once "Employes/Team.php";
require_once "Salary/Salary.php";
require_once "Position/Coder.php";
require_once "Position/Designer.php";
require_once "Position/MiddleDeveloper.php";
require_once "Position/SeniorDeveloper.php";

$X = new Team();
$computationSalary = new Salary();

$salary = $computationSalary->fixed(3000);
$employee = new Designer("Kolya", "Nikolyaevish", "Bobrov", $salary);
$X->addEmployee($employee);

$salary = $computationSalary->hourly(60,10);
$employee = new SeniorDeveloper("Vasya", "Papkovich", "Ivanov", $salary);
$X->addEmployee($employee);

$salary = $computationSalary->fixed(1000);
$employee = new MiddleDeveloper("Misha", "Dimkovich", "Petrov", $salary);
$X->addEmployee($employee);

$salary = $computationSalary->fixed(1000);
$employee = new MiddleDeveloper("Dima", "Vasykavich", "Sidorov", $salary);
$X->addEmployee($employee);

$salary = $computationSalary->hourly(120, 5);
$employee = new Coder("Nikita", "Leshkavich", "Popov", $salary);
$X->addEmployee($employee);

echo $X->getSumSalary();