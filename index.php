<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>DEPIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon2.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .body {
            background-image: url('img/grafo2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <main>
        <section class="carrusel-section">
            <div class="carrusel-container">
                <div class="carrusel-item active">
                    <img src="img/1.jpg" alt="bienvenido">
                    <div class="carrusel-caption">
                        <h2>¡BIENVENIDOS!</h2>
                        <p>INFINITY STORE</p>
                    </div>
                </div>
                <div class="carrusel-item">
                    <img src="img/2.jpg" alt="Deporte 2">
                    <div class="carrusel-caption">
                        <h2>LAS MEJORES PRENDAS</h2>
                        <p>Conoce nuestra colección</p>
                    </div>
                </div>
                <div class="carrusel-item">
                    <img src="img/3.jpg" alt="Deporte 3">
                    <div class="carrusel-caption">
                        <h2>CONOCE MAS SOBRE NOSOTROS</h2>
                        <p>¿Qué nos hace únicos?</p>
                    </div>
                </div>
                <button class="carrusel-control prev"><i class="fas fa-chevron-left"></i></button>
                <button class="carrusel-control next"><i class="fas fa-chevron-right"></i></button>
                <div class="carrusel-indicadores">
                    <span class="indicador active"></span>
                    <span class="indicador"></span>
                    <span class="indicador"></span>
                </div>
            </div>
        </section>
    <script src="script.js"></script>
    </main>
    <br>
    <br>
   
        <section>
            <main>
    <div class="destacados">
    <div class="texto-index2">
    <div class="texto-index">
    
        <h2>PRENDAS DESTACADAS</h2>
        </div>
        </div>
        <br>
        <br>
        <div class="fotos-index2">
            <div class="foto-placeholder"><img src="img/4.jpg" alt="imagen 4">
            
        <div class="texto-index">SACOS<br>
        <div class="ver-mas"><a rel="ver mas" href="sacos.php"><h4>VER MÁS...</h4></a></div></div></div>
            <div class="foto-placeholder"><img src="img/5.jpg" alt="imagen 5">
        <div class="texto-index">PANTALONES <br>
        <div class="ver-mas"><a rel="ver mas" href="pantalones.php"><h4>VER MÁS...</h4></a></div></div></div>
            <div class="foto-placeholder"><img src="img/6.jpg" alt="imagen 6">
        <div class="texto-index">CAMISAS <br>
        <div class="ver-mas"><a rel="ver mas" href="camisas.php"><h4>VER MÁS...</h4></a></div></div></div>
        </div>
        </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>