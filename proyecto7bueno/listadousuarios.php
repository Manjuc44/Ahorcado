<?php
require_once("model/UsuariosModel.php");
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
  $insertarUSUARIOS=$usuarios->insertarUsuario();
} elseif (isset($_POST['accion']) && $_POST['accion']=="actualizar") {
  $actualizarUSUARIOS=$usuarios->actualizarUsuario();
} elseif (isset($_POST['accion']) && $_POST['accion']=="borrar") {
  $borrarUSUARIOS=$usuarios->borrarUsuario($_POST['id']);
}

//lectura de todas las filas(users)
$filasUSUARIOS=$usuarios->getAllFilas();

include_once("view/listadoView.php");
     ?>
