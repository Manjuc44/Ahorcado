<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script type="text/javascript" src="public/js/validar.js"> </script>
  <body>
    <form action="listadousuarios.php" method="post" onsubmit="return validar()">
      <input type="text" id="nombre" name="nombre" placeholder="nombre">
      <input type="text" id="apellidos" name="apellidos" placeholder="apellidos">
      <input type="text" id="usuario" name="usuario" placeholder="usuario">
      <input type="password" id="contrasenya" name="pass" placeholder="contrasenya">
      <input type="text" id="edad" name="edad" placeholder="edad">
      <input type="text" id="curso" name="curso" placeholder="curso">
      <input type="text" id="puntuacion" name="puntuacion" placeholder="puntuacion">
      <input type="text" id="correo" name="email" placeholder="correo">
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" name="accion" value="insertar">
    </form>
  </body>
</html>
