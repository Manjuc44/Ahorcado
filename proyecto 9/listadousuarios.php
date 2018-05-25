<?php
if (!isset($_SESSION)) {
  session_start();
}
use Daw\model\UsuariosModel;
use Daw\model\SessionModel;
require_once("vendor/autoload.php");
$sesion= new SessionModel();
if (!$sesion->esAdmin()) {
  header("location:inicio.php");
}
//require_once("src/model/UsuariosModel.php");
$usuarios= new UsuariosModel ();

/*
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $edad=$_POST['edad'];
        $curso=$_POST['curso'];
        $puntuacion=$_POST['puntuacion'];
*/

if (isset($_POST['accion']) && $_POST['accion']=="insertar") {
$res= $insertarUSUARIOS=$usuarios->insertarUsuario($_POST['nombre'],$_POST['apellidos'],
                                              $_POST['usuario'],$_POST['pass'],
                                                $_POST['edad'],$_POST['curso'],$_POST['puntuacion'],$_POST['email']);
  if ($res!=false) {
    echo "se ha insertado correctamente";
  }  else {
      echo "error en la insercion";
    }

} elseif (isset($_POST['accion']) && $_POST['accion']=="actualizar") {
  $actualizarUSUARIOS=$usuarios->actualizarUsuario($_POST['id'],$_POST['nombre'],$_POST['apellidos'],
                                                $_POST['usuario'],$_POST['pass'],
                                                  $_POST['edad'],$_POST['curso'],$_POST['puntuacion'],$_POST['email']);
} elseif (isset($_POST['accion']) && $_POST['accion']=="borrar") {
  $borrarUSUARIOS=$usuarios->borrarUsuario($_POST['id']);
}

//lectura de todas las filas(users)
$filasUSUARIOS=$usuarios->getAllFilas();

include_once("view/listadoView.php");
     ?>
