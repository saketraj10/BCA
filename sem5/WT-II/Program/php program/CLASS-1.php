<?php
class Student {
  // Properties
  public $regdno;
  public $name;

  // Methods
  function set_regdno($regdno)
 {
    $this->regdno = $regdno;
  }
 function set_name($name)
 {
    $this->name = $name;
  }
function get_regdno()
 {
    return $this->regdno;
  }
  function get_name()
 {
    return $this->name;
  }
}

$a = new Student();
$b = new Student();
$a->set_regdno('18/04/CS-07');
$a->set_name('Sachin');

echo $a->get_regdno();
echo "<br>";
echo $a->get_name();
echo "<br>";

?>
