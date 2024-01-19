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
 
function get()
 {
    echo "Registration Number:$this->regdno and Name:$this->name";
    
  }
 
}

$a = new Student();
$a->set('18/04/CS-07','Sachin');

echo $a->get();
echo "<br>";

?>
