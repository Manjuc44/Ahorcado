<?php
require_once(__DIR__. "/../config/config.php");
/**
 *
 */
class Db
{
  //Propiedades de conexion
  private $server="";
  private $user="";
  private $pass="";
  public $db="";


  //Propiedad conector
  private $conector;

  function __construct()
  {
    global $config;
    $this->server=$config["host"];
    $this->user=$config["user"];
    $this->pass=$config["pass"];
    $this->db=$config["db"];
  }
  function conectar(){
    $conectorTmp = new mysqli ($this->server,$this->user,
                                  $this->pass,$this->db) ;
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }
  }
  public function execute($consulta){
    $resultado=$this->conector->query($consulta);
    return $resultado;
  }


  public function getConector(){
    return $this->conector;
  }
  public function getServer()
  {
    return $this->server;
  }
  public function setServer($server)
  {
    $this->server = $server;
  }
  public function getUser()
  {
    return $this->user;
  }
  public function setUser( $user )
  {
    $this->user = $user;
  }
  public function getPass()
  {
    return $this->pass;
  }
  public function setPass($pass)
  {
    $this->pass = $pass;
  }
  public function getDb()
  {
    return $this->db;
  }
  public function setDb($db)
  {
    $this->db = $db;
  }

}
