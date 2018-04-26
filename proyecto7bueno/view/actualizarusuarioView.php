<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script type="text/javascript" src="validar.js"> </script>
  <body>
    <form action="listadousuarios.php" method="post" onsubmit="return validar()">
      <input type="text" placeholder="nombre" id="nombre" name="nombre" value="<?php echo $filaUser['nombre']?>">
      <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value="<?php echo $filaUser['apellidos']?>">
      <input type="text" placeholder="edad" id="edad" name="edad" value="<?php echo $filaUser['edad']?>">
      <input type="text" placeholder="curso" id="curso" name="curso" value="<?php echo $filaUser['curso']?>">
      <input type="text" placeholder="puntuacion" id="puntuacion" name="puntuacion" value="<?php echo $filaUser['puntuacion']?>">
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" name="id" value="<?= $_GET["id"]?>">
      <input type="hidden" name="accion" value="actualizar">
    </form>
  </body>
</html>
