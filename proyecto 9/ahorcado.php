<?php
if (!isset($_SESSION)) {
  session_start();
}

use Daw\model\SessionModel;
use Daw\model\UsuariosModel;
require_once("vendor/autoload.php");


if (isset($_POST['usuario'])) {
  $idUsuario=$_POST['usuario'];
  $UserModel= new UsuariosModel();
  $filaUser= $UserModel->getOne($idUsuario);
  $sesion= new SessionModel($filaUser);
}else {
  $sesion= new SessionModel();

}
include_once('view/ahorcadoView.php')
 ?>
