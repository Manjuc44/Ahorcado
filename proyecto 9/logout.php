<?php
if (!isset($_SESSION)) {
  session_start();
}
use Daw\model\SessionModel;
require_once("vendor/autoload.php");
$sessionModel= new SessionModel();
$sessionModel->destruir();
header('location:inicio.php');
 ?>
