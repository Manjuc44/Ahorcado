<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <?php
    echo "<a href='insertarusuario.php?id='> insertar</a> <br>";
     foreach ($filasUSUARIOS as $fila) {
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
        echo "<a href='actualizarusuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
        echo "<a href='borrarusuarios.php?id=".$fila['id']."'> Borrar</a> <br> <br>";
      }
     ?>
  </body>
</html>
