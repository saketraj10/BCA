<?php
class Student {
  // Properties
  public $regdno;
  public $name;

  // Methods
  function __construct($regdno,$name)
 {
    $this->regdno = $regdno;
    $this->name = $name;
  }
 
function __destruct()
 {
    echo "Student registration number is: $this->regdno and Name is: $this->name";
    
  }
 
}

$a = new Student('18/04/CS-07','Sachin');



?>
