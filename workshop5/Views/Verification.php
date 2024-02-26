<?php 

include '../Model/employee.php';
include '../Controller/employeeC.php';

$lastName = $_POST['lName'];
$firstName  = $_POST['fName']; 
$phone  = $_POST['phone'];
$address  = $_POST['address'];
$dOB  = $_POST['dob'];


$employee = new employee($lastName, $firstName, $phone, $address, $dOB);


var_dump($employee);
echo '<br>';
echo '<hr>';
echo '<br>';

$employeeC = new employeeC();
$employeeC->showEmployee($employee);