<?php
if (!isset($_SESSION)) {
  session_start();
}

use Daw\model\UsuariosModel;
use Daw\model\Sesion;
require_once("vendor/autoload.php");
$usuariosModel= new UsuariosModel();
$filasUsers=$usuariosModel->getAllFilas();
include_once('view/inicioView.php');
