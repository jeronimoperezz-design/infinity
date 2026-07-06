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
  <?php include 'menu.php'; ?>
  <main>
    <section class="catalogo-section">
      <h1>Catálogo de Camisas</h1>
      <div class="catalogo-grid">
        <div class="catalogo-item">
          <img src="img/1.jpg" alt="Camisa Azul Clásica">
          <h2>Camisa Azul Clásica</h2>
          <p>Camisa de algodón premium, corte slim fit, color azul profundo.</p>
          <span class="catalogo-precio">$49.900</span>
          <button class="btn">Comprar</button>
        </div>
        <div class="catalogo-item">
          <img src="img/2.jpg" alt="Camisa Blanca Minimal">
          <h2>Camisa Blanca Minimal</h2>
          <p>Camisa blanca, diseño minimalista, tela suave y fresca.</p>
          <span class="catalogo-precio">$44.900</span>
          <button class="btn">Comprar</button>
        </div>
        <div class="catalogo-item">
          <img src="img/3.jpg" alt="Camisa Rayas Azules">
          <h2>Camisa Rayas Azules</h2>
          <p>Camisa con rayas azul marino, ideal para ocasiones formales.</p>
          <span class="catalogo-precio">$54.900</span>
          <button class="btn">Comprar</button>
        </div>
        <div class="catalogo-item">
          <img src="img/4.jpg" alt="Camisa Denim">
          <h2>Camisa Denim Azul</h2>
          <p>Camisa denim azul claro, estilo casual y moderno.</p>
          <span class="catalogo-precio">$59.900</span>
          <button class="btn">Comprar</button>
        </div>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>
