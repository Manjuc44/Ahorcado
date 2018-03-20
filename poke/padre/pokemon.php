<?php
/**
 *
 */
class Pokemon
{
  //Vida y resaca
  private $vida=100;
  private $resaca=100;

  function __construct()
  {

  }
  //Getters y setters de Vida
  public function setVida($valor){
    $this->vida=$valor;
  }
  public function getVida(){
    return $this->vida;
  }
  //Getters y setters de Resaca
  public function setResaca($resaca){
    $this->resaca=$resaca;
  }
  public function getResaca(){
    return $this->resaca;
  }

}
 ?>
