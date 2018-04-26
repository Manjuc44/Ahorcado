<?php
require_once("model/UsuariosModel.php");
$usuarios= new UsuariosModel();

//coger el id

$filaUser = $usuarios->getOne($_GET['id']);
include_once("view/actualizarusuarioView.php");
 ?>
