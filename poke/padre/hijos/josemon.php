<?php
require_once "padre/pokemon.php";
/**
 *
 */
class Josemon  extends Pokemon
{
  private $tatuajes=3;
  private $cubatas=5;

  function __construct()
  {
    parent::setResaca(100);
    parent::setVida(100);
  }

  public function getTatuajes()
 {
   return $this->tatuajes;
 }
 public function setTatuajes($tatuajes)
 {
   $this->tatuajes = $tatuajes;
 }
 public function getCubatas()
 {
   return $this->cubatas;
 }
 public function setCubatas($cubatas)
 {
   $this->cubatas = $cubatas;
 }
 public function pintarsecuerpoconplastidecor(){
    $this->tatuajes=$this->tatuajes + 1;
    echo "Ahora es mas shulo";
  }
  public function Vomitar(){
    parent::setResaca(90);
    echo "ha vomitado";
  }
}
