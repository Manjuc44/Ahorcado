<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'cuadrado.php';
    include 'circulo.php';
    include 'triangulo.php';
  echo "CUADRADO";
  echo "<br>";
    $cuadrado1= new cuadrado();
    $cuadrado1->setLado(4.5);
  echo   "El lado es ".$cuadrado1->getLado();
  echo "<br>";
  echo   "El area es ".$cuadrado1->area();
  echo "<br>";
  echo   "El perimetro es ".$cuadrado1->perimetro();
  echo "<br>";
  echo "CIRCULO";
  echo "<br>";
    $circulo1= new Circulo();
    $circulo1->setradio(3);
    echo "El radio es ".$circulo1->GetRadio();
    echo "<br>";
    echo "El area es ".$circulo1->getArea();
    echo "<br>";
    echo "El perimetro es ".$circulo1->getPerimetro();
    echo "<br>";
    echo "TRIANGULO";
    echo "<br>";
    $triangulo1= new Triangulo();
    $triangulo1->setBase(5.2);
    $triangulo1->setAltura(3);
    echo "La base del triangulo es ".$triangulo1->GetBase();
    echo "<br>";
    echo "La altura del triangulo es ".$triangulo1->GetAltura();
    echo "<br>";
    echo "El area del triangulo es ".$triangulo1->area();
    echo "<br>";
    echo "El perimetro del triangulo es ".$triangulo1->perimetro();
    echo "<br>";


     ?>
  </body>
</html>
