<?php
class Student {
  // Properties
  public $regdno;
  public $name;

  // Methods
  function __construct()
 {
    
  }
 
function get1()
 {
    return $this->regdno;
    
  }
 function get2()
 {
    
    return $this->name;
  }
}

$a = new Student();


echo $a->get1();
echo "<br>";
echo $a->get2();
echo "<br>";

?>
