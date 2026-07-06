<?php session_start();

?>
<link rel="stylesheet" href="css/style.css">
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
		  <?php if(!$_SESSION){$_SESSION["tipo"]=0;} 
		  if ($_SESSION["tipo"] == 0): ?>  
                <?php else: ?>
                    <div class="d-inline-flex align-items-center user-badge ">
                        <?php if($_SESSION["tipo"] == 1) echo '<a href="admin.php">Panel</a> |'; ?>
                        <a href="perfil.php" >
                            <?php echo $_SESSION['nombre']; ?>
                        </a>
                        <a href="cerrar.php"><b>Salir</b></a>
                    </div>
                <?php endif; ?>
		<div class="menu-icons">
			<a href="inisesion.php" class="menu-login"><i class="fas fa-sign-in-alt"></i></a>
			<a href="carrito.php" class="menu-login"><i class="fas fa-shopping-cart"></i></a>
			<div class="col-md-6 text-right">
              
            </div>
			
		</div>
	</div>	

</nav>
