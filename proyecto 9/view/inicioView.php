<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="ahorcado.php" method="post">
        <select class="" name="usuario">
          <?php
            foreach ($filasUsers as $key => $usuario) {
            ?>
              <option value="<?php echo $usuario['id'] ?>"><?php echo $usuario['nombre'] ?></option>
            <?php
        }
          ?>
      </select>
      <input type="submit" name="boton" value="Entrar">
    </form>
  </body>
</html>
