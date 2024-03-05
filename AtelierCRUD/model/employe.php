<?php 
class employe {
private ?int $id=null;
private ?string $firsName;
private ?string $lastName=null;
private  ?string $email=null;
private ?DateTime $dob =null;



public function __construct($a=null,$b,$c,$d,$e) {

$this->id=$a;
$this->firstName=$b;
$this->lastName=$c;
$this->dob=$d;
$this->email=$e;

}


public function getId() {

return $this->id;
}

public function getfirstName() {
    return $this->firstName;
    }

 public function getlastName() {

  return $this->lastName; }

 public function getdob() {

  return $this->dob;
            }

 public function getEmail() {

  return $this->email;
                }
                                        

public function setfirstName($a) {

$this->firstName=$a;

}
public function setlastName($b) {

 $this->lastName=$b;
    
    }
  public function setdob($d) {

 $this->dob=$d;
        
        }

 public function setemail($e) {

 $this->email=$e;
            
            }


}











?>