<?php
class Student {
  // Properties
  public $regdno;
  public $name;

  // Methods
  function set($regdno,$name)
 {
    $this->regdno = $regdno;
    $this->name = $name;
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
$a->set('18/04/CS-07','Sachin');

echo $a->get1();
echo "<br>";
echo $a->get2();
echo "<br>";

?>
