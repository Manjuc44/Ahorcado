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
        echo "<strong>ID</strong> ".$fila['id']."<br>";
        echo "<strong>Nombre: </strong>".$fila['nombre']."<br>";
        echo "<strong>Apellidos: </strong>".$fila['apellidos']."<br>";
        echo "<strong>Usuario: </strong>".$fila['usuario']."<br>";
        echo "<strong>Edad: </strong>".$fila['edad']."<br>";
        echo "<strong>Curso: </strong>".$fila['curso']."<br>";
        echo "<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
        echo "<strong>Correo: </strong>".$fila['correo']."<br>";

        echo "<a href='actualizarusuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
        echo "<a href='borrarusuarios.php?id=".$fila['id']."'> Borrar</a> <br> <br>";
      }
     ?>
  </body>
</html>
