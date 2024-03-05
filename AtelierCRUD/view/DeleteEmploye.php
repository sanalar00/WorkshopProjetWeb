<?php

include '../controller/employeC.php';
$EmpC = new EmployeC();
$EmpC->deleteEmploye($_GET['id']);
header('Location:ListEmploye.php');


?>