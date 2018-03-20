<?php
require_once "padre/pokemon.php";
/**
 *
 */
class Salvapelomon  extends Pokemon
{
  private $pelos=5;
  private $gases=20;

  function __construct()
  {
    parent::setResaca(100);
    parent::setVida(100);
  }

  public function getPelos()
 {
   return $this->pelos;
 }
 public function setPelos($pelos)
 {
   $this->pelos = $pelos;
 }
 public function getGases()
 {
   return $this->gases;
 }
 public function setGases($gases)
 {
   $this->gases = $gases;
 }
 public function tirarseunpedete(){
    $this->gases=$this->gases - 1;
    echo "Se ha tirado un pedete,ahora esta mas sueltecillo";
  }
  public function comerseunblancoynegro(){
    parent::setResaca(50);
    echo "se ha comido un buen bocatita";
  }
}
