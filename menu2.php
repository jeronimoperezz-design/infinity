<link rel="stylesheet" href="style.css">
<nav class="menu-deporte">
	<div class="menu-container">
		<div class="menu-logo">
			<img src="img/apple-touch-icon-2.png" alt="">
		</div>
		<ul>
			<li><a href="hombre.php">HOMBRE</a></li>
			<li><a href="mujer.php">MUJER</a></li>
			<li><a href="index.php">INICIO</a></li>
		</ul>
		<div class="menu-icons">

            <div class="menu-login"><a href="perfil.php" title="Editar Perfil"><?php echo $_SESSION['nom']  ?></a>
             <a class="min" href="/cerrar.php" title="Salida segura"> <b>Cerrar Sesión</b></a>
			<a href="carrito.php" class="menu-login"><i class="fas fa-shopping-cart"></i></a>

			
		</div>
	</div>	

</nav>