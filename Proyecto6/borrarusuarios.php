<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="listadousuarios.php" method="post">
      Pulse para eliminar: <input type="submit" name="borrar" value="borrar">
      <input type="hidden" name="id" value="<?= $_GET["id"]?>">
    </form>
  </body>
</html>
