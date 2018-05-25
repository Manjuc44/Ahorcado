<?php
namespace Daw\model;
//require_once(__DIR__."/../../vendor/autoload.php");
use Daw\model\Db;


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
   public function insertarUsuario($nombre,$apellidos,$usuario,$contrasenya,$edad,$curso,$puntuacion,$correo){
     $query="INSERT into usuarios (nombre,apellidos,usuario,contrasenya,edad,curso,puntuacion,correo)
        values ('".$nombre."','".$apellidos."','".$usuario."','".$contrasenya."','".$edad."','".$curso."','".$puntuacion."','".$correo."')";
     $resInsertar = $this->execute($query);
     return $resInsertar;

   }
   public function actualizarUsuario($id,$nombre,$apellidos,$usuario,$contrasenya,$edad,$curso,$puntuacion,$correo){
     $query="UPDATE usuarios SET nombre='".$nombre."',apellidos='".$apellidos."'
     ,usuario='".$usuario."',contrasenya='".$contrasenya."',edad='".$edad."',curso='".$curso."',puntuacion='".$puntuacion."',correo='".$correo."'
     WHERE id='".$id."';";
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
