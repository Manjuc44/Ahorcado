<?php
require_once "padre/pokemon.php";
/**
 *
 */
class davidcurrymon  extends Pokemon
{
  private $fisico=3;
  private $lesiones=7;

  function __construct()
  {
    parent::setResaca(100);
    parent::setVida(100);
  }

  public function getFisico()
 {
   return $this->fisico;
 }
 public function setFisico($fisico)
 {
   $this->fisico = $fisico;
 }
 public function getLesiones()
 {
   return $this->lesiones;
 }
 public function setLesiones($lesiones)
 {
   $this->lesiones = $lesiones;
 }
 public function recolocarfemur(){
    $this->lesiones=$this->lesiones - 1;
    echo "Ahora se ha arregaldo un hueso";
  }
  public function hacerabs(){
    parent::setResaca(60);
    echo " hacer unos abs lo han hecho mejorar";
  }
}
