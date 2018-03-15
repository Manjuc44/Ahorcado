<?php
class triangulo {
private $base=5.2;
private $altura=3;


function __construct()
{
  $this->base=0;
  $this->altura=0;
}

public function SetBase($base)
{
  $this->base=$base;
}
public function GetBase()
{
  return $this->base;
}
public function Setaltura($altura)
{
  $this->altura=$altura;
}
public function Getaltura()
{
  return $this->altura;
}
public function area()
{
  return ($this->base*$this->altura)/2;
}
public function perimetro()
{

  return $this->base*3;
}
}
 ?>
