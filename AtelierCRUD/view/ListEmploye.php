<?php

include "../controller/employeC.php";

$empC= new EmployeC();
$list=$empC->ListEmployees();
var_dump($list);
?>
<html>

<head></head>

<body>
    <center>
        <h1>List of employes</h1>
        
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Employe</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $employe) {
        ?>
           <tr>

            <td> <?php echo  $employe['id'];?>  </td>
            <td> <?php echo  $employe['FirstName'];?> </td>
            <td>  <?php echo  $employe['LastName'];?></td>
            <td>  <?php echo $employe['email'];?></td>
            <td><?php echo  $employe['DoB'];?>  </td>
            <td> <input type="submit" value="update"> </td>
            <td><a href="deleteEmploye.php?id=<?php echo $employe ['id'];?>"> Delete</a> </td>
           
           </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>