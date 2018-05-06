<?php
use Daw\model\UsuariosModel;
require_once("vendor/autoload.php");
$usuarios= new UsuariosModel();

//coger el id

$filaUser = $usuarios->getOne($_GET['id']);
include_once("view/actualizarusuarioView.php");
 ?>
