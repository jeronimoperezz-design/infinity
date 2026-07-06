<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>DEPIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon2.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <?php include 'menu.php'; ?> <br>
  <div class="formini">
    <h2 class="textini">INICIAR  SESIÓN</h2>
  <form method="POST" id="formulariom" action= "conexion.php" onsubmit="return validarFormulario()">

    <label for="usuario">Usuario:</label> <br>
    <input type="text" id="usuario" name="usuario" required><br>

    <label for="clave">Contraseña:</label> <br>
    <input type="password" id="clave" name="clave" required><br><br>

    <p class="error" id="errorMensaje"></p><br>
    <div class="button1">
    <button type="submit">INICIAR SESIÓN</button><br><br>
     <a href="registrar.php">¿No tienes una cuenta? Regístrate.</a>
    </div>
</div>
</form>
  </div>

  <?php include 'footer.php'; ?>
 

</body>
</head>