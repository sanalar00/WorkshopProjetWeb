<?php 
include '../Model/employee.php';

$employee = new employee();
$employee->lastName = 'Doe';
$employee->firstName = 'Jane';
$employee->phone = '123456789';
$employee->address = '123, Liberty Avenue, Tunis';
$employee->dOB = '1/1/2000';

var_dump($employee);
echo '<br>';
echo '<hr>';
echo '<br>';
$employee->show();
