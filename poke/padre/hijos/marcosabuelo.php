<?php
require_once "padre/pokemon.php";
/**
 *
 */
class marcosabuelomon  extends Pokemon
{
  private $felicidad=0;
  private $salidez_mental=69;

  function __construct()
  {
    parent::setResaca(100);
    parent::setVida(100);
  }

  public function getFelicidad()
 {
   return $this->felicidad;
 }
 public function setFelicidad($felicidad)
 {
   $this->felicidad = $felicidad;
 }
 public function getSalidez_mental()
 {
   return $this->salidez_mental;
 }
 public function setSalidez_mental($salidez_mental)
 {
   $this->salidez_mental = $salidez_mental;
 }
 public function criticaralgo(){
    $this->felicidad=$this->felicidad + 10;
    echo "Ahora es mas feliz que ha criticado algo";
  }
  public function hacerejerciciopersonal(){
    parent::setResaca(25);
    echo "se ha quedado mucho mejor despues de su ejercicio personal";
  }
}
