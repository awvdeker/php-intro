<?php

class Person {
  private $firstName;
  private $lastName;
  public $phoneNumber;

public function __construct($fn,$ln){
  $this->firstName=$fn;
  $this->lastName=$ln;
}


public function setFirstName($fn){
  $this->firstName=$fn;
}

public function setLastName($ln){
  $this->lastName=$ln;
}

public function getFullName(){
  return $this->firstName." ".$this->lastName;
}

}

$someOne = new Person('Vincent','Kompany');
//$someOne->setFirstName('Alexander');
//$someOne->setLastName('Vandekerckhove');
$someOne->phoneNumber='1234';

echo $someOne->getFullName();
var_dump($someOne);

?>
