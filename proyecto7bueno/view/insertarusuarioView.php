<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script type="text/javascript" src="validar.js"> </script>
  <body>
    <form action="listadousuarios.php" method="post" onsubmit="return validar()">
      <input type="text" id="nombre" name="nombre" value="nombre">
      <input type="text" id="apellidos" name="apellidos" value="apellidos">
      <input type="text" id="edad" name="edad" value="edad">
      <input type="text" id="curso" name="curso" value="curso">
      <input type="text" id="puntuacion" name="puntuacion" value="puntuacion">
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" name="accion" value="insertar">
    </form>
  </body>
</html>
