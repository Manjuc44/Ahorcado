<?php
if (!isset($_SESSION)) {
  session_start();
}
use Daw\model\UsuariosModel;
require_once("vendor/autoload.php");


include_once("view/insertarusuarioView.php");


 ?>
