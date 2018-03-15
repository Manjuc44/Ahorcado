<?php
  class Circulo
  {
     const PI=3.14159265358979323846;
      private $radio=3;
        //Constuctor
        function __construct()
        {
          $this->radio=0;
        }
        public function SetRadio($radio)
        {
          $this->radio=$radio;
        }
        public function GetRadio()
        {
          return $this->radio;
        }
        public function getArea()
        {
          return ($this->radio*$this->radio)*self::PI;
        }
        public function getPerimetro()
        {
          return $this->radio*2*self::PI;
        }
  }
 ?>
