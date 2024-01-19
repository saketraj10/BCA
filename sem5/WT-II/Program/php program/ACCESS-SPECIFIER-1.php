<?php
class Student {
  // Properties
  public $regdno;
  public $name;
  public $mobno;

  // Methods
  function set1($r)  // by default public
 {
    $this->regdno = $r;
   
  }
  private function set2($n)
 {
    
    $this->name = $n;
  }
 protected function set3($m)
 {
    
    $this->mobno = $m;
  }
function get1()
 {
    return $this->regdno;
    
  }
 function get2()
 {
    
    return $this->name;
  }
function get3()
 {
    
    return $this->mobno;
  }
}

$a = new Student();
$a->set1('18/04/CS-07'); 
//$a->set2('Sachin');      // error to access outside the class
//$a->set3('7978930861');  // error to access outside the class
echo $a->get1();
echo "<br>";
echo $a->get2();
echo "<br>";
echo $a->get3();
echo "<br>";
?>
