<?php 
include '../Model/employee.php';

$client = new Client();
$client->lastName = 'Doe';
$client->firstName = 'Jane';
$client->phone = '123456789';
$client->address = '123, Liberty Avenue, Tunis';
$client->dOB = '1/1/2000';

var_dump($employee);
echo '<br>';
echo '<hr>';
echo '<br>';
$client->show();