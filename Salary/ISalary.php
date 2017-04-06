<?php
interface ISalary
{
    public function hourly($countHour, $salary);
    public function fixed($salary);
}