<?php
include "../config.php";
class EmployeC {

public function ListEmployees() {

$sql="SELECT * FROM employe";
$db= config::getConnexion();
try {
    $liste = $db->query($sql);
    return $liste;
} catch (Exception $e) {
    die('Error:' . $e->getMessage());
}

}



function deleteEmploye($id)
{
    $sql = "DELETE FROM employe WHERE id = :id";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':id', $id);

    try {
        $req->execute();
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
}

public function addEmploye($emp) {

    $sql="INSERT INTO employe VALUES (NULL,:firstName,:lastName,:email,:dob)";
    $db=config::getConnexion();
    try {
        $req=$db->prepare($sql);
        $req->execute([
            "firstName"=>$emp->getfirstName(),
            "lastName"=>$emp->getlastName(),
            "email"=>$emp->getEmail(),
            "dob"=>$emp->getdob()->format('d/m/y') ]);
    }

    catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }


}










}













?>