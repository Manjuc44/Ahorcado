<?php
if (!isset($_SESSION)) {
  session_start();
}
use Daw\model\SessionModel;
$sesion= new SessionModel();
if (!$sesion->esAdmin()) {
  header("location:inicio.php");
}
use Daw\model\UsuariosModel;
require_once("vendor/autoload.php");
$usuarios= new UsuariosModel();

//coger el id

$filaUser = $usuarios->getOne($_GET['id']);
include_once("view/actualizarusuarioView.php");
 ?>
