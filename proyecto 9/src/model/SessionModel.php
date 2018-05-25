<?php
namespace Daw\model;
//require_once(__DIR__."/../../vendor/autoload.php");


class SessionModel extends Db
{
  private $filaUsuario=[];

  function __construct($filaUser=[]) {

   parent::__construct();
   if (sizeof($filaUser)>0) {
     $this->filaUsuario=$filaUser;
     $_SESSION['filaUser']=$filaUser;
   }else {
     $this->filaUsuario=$_SESSION['filaUser'];
   }
   $this->conectar();
 }
 public function destruir(){
   session_destroy();
 }
 public function getPuntos(){
   return $this->filaUsuario['puntuacion'];
 }
 public function esAdmin(){
   return $this->filaUsuario['admin']==1;
 }
}


  ?>
