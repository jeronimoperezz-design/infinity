<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>DEPIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon2.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <?php include 'menu.php'; ?> <br>
    <div class="formreg">
    <h2 style="text-align: center;">REGISTRARSE</h2>
  <form method="POST" id="formulariom" action= "crearu.php" enctype="multipart/form-data">
    <br><label for="nombre">Nombre completo:</label> <br>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="fechaNacimiento">Fecha de nacimiento:</label> <br>
    <input type="date" id="fechaNacimiento" name="fechaNacimiento" required><br>

    <label for="usuario">Usuario:</label> <br>
    <input type="text" id="usuario" name="usuario" required><br>

    <label for="clave">Contraseña:</label> <br>
    <input type="password" id="clave" name="clave" required><br>

    <label for="clave2">Repetir contraseña:</label> <br>
    <input type="password" id="clave2" name="clave2" required>

    <p class="error" id="errorMensaje"></p><br>
    <div class="button1"><br>
    <button type="submit">Registrarse</button><br><br>
    <a href="inisesion.php">¿Ya tienes una cuenta? Inicia sesión.</a>

</div>

</form>
  </div>
  </div>
<?php include 'footer.php'; ?>
</body>
</html>
