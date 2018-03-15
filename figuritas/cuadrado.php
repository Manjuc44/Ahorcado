<?php
class cuadrado
{
    private $lado=4.5;

  //constructor
  function __construct()
  {
    $this->lado=0;
  }
  public function setLado($lado)
  {
    $this->lado=$lado;
  }
  public function getLado()
  {
  return $this->lado;
  }
  public function area()
  {
    return $this->lado*$this->lado;
  }
  public function perimetro()
  {
    return $this->lado*4;
  }
}
 ?>
