<?php

require_once("Db.php");

class UsuariosModel extends Db
{
    function __construct() {
     //Utilizar el operador de ambito de clases
     parent::__construct();

     $this->conectar();
   }

   public function getAllFilas(){
      $query="SELECT * FROM usuarios";

      $filas = $this->execute($query);

      return $filas;
   }
   public function getOne($id){
     $query="SELECT * FROM usuarios WHERE id=$id";
     $resOne= $this->execute($query);
     return $resOne->fetch_assoc();
   }
   public function insertarUsuario($nombre,$apellidos,$edad,$curso,$puntuacion){
     $query="insert into usuarios (nombre,apellidos,edad,curso,puntuacion) values ('".$_POST['nombre']."','".$_POST['apellidos']."', '".$_POST['edad']."','".$_POST['curso']."','".$_POST['puntuacion']."')";
     $resInsertar = $this->execute($query);
     return $resInsertar;

   }
   public function actualizarUsuario(){
     $query="update usuarios set nombre='".$_POST['nombre']."',apellidos='".
     $_POST['apellidos']."',edad='".$_POST['edad']."',curso='".$_POST['curso']."'
     where id='".$_POST['id']."';";
     $resActualizar = $this->execute($query);
     return $resActualizar;

   }
   public function borrarUsuario($id){
     $query="delete from usuarios where id=$id";
     $resBorrar = $this->execute($query);
     return $resBorrar;
   }


}

 ?>
