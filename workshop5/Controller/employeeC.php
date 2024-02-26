<?php 
class employeeC
{
    public function showemployee($employee) {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>Last Name</td>
                <td>First Name</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Date of Birth</td>
            </tr>
            <tr>
                <td>'. $employee->getLastName() .'</td>
                <td>'. $employee->getFirstName() .'</td>
                <td>'. $employee->getPhone() .'</td>
                <td>'. $employee->getAddress() .'</td>
                <td>'. $employee->getDOB() .'</td>
            </tr>
        </table>';
    }
}
