<?php
require_once "padre/hijos/josemon.php";
require_once "padre/hijos/salvapelomon.php";
require_once "padre/hijos/davidcurrymon.php";
require_once "padre/hijos/marcosabuelo.php";
$jose= new Josemon();
echo "Stats of Josemon:<br>";
echo "Tiene ".$jose-> getVida()." de hp.<br>";
echo "Su resaca es de ".$jose-> getResaca()."<br>";
echo $jose-> Vomitar()."<br>";
echo "Su resaca ahora es de ".$jose-> getResaca()."<br>";
echo "<br>";

$salva= new Salvapelomon();
echo "Stats of salvapelomon:<br>";
echo "Tiene ".$salva-> getVida()." de hp.<br>";
echo "Su resaca es de ".$salva-> getResaca()."<br>";
echo $salva->tirarseunpedete ()."<br>";
echo $salva->comerseunblancoynegro ()."<br>";
echo "Su resaca ahora es de ".$salva-> getResaca()."<br>";
echo "<br>";

$david= new davidcurrymon();
echo "Stats of Davidcurrymon:<br>";
echo "Tiene ".$david-> getVida()." de hp.<br>";
echo "Su resaca es de ".$david-> getResaca()."<br>";
echo $david->hacerabs ()."<br>";
echo "Su resaca ahora es de ".$david-> getResaca()."<br>";
echo "<br>";

$marcos= new marcosabuelomon();
echo "Stats of marcosabuelomon:<br>";
echo "Tiene ".$marcos-> getVida()." de hp.<br>";
echo "Su felicidad es de ".$marcos->getFelicidad()."<br>";
echo $marcos->hacerejerciciopersonal ()."<br>";
echo $marcos->criticaralgo ()."<br>";
echo "Su felicidad es de ".$marcos->getFelicidad()."<br>";
echo "Su resaca ahora es de ".$marcos-> getResaca()."<br>";
echo "<br>";

 ?>
