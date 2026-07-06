<!-- Control de acceso -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>INFINITY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon2.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div id="content-wrapper" class="d-flex flex-column" style="padding: 80px;">
    <!-- Contenedor Principal -->
    <div id="content">
        <!-- Inicio del Contenido -->
        <div class="container-fluid">
            <!-- Encabezado de página --><br>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="w2">BIENVENID@ <?php echo $_SESSION['nombre'];?></div><br>
                <div class="w2">Panel Administrativo</div>
            </div>
            <br>
            <div class="row">
                <!-- Opciones del Dashboard -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="productos.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Editar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">PRODUCTOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-newspaper fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                        <a href="crudpedidos.php"> <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Revisión de</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">PEDIDOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comment fa-2x text-blue-300"></i>
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="usuarios.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Editar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">USUARIOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Fin contenedor principal -->
    <br><br>
    <br><br>
    <br><br>
</div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<?php include 'includes/logout.php' ?>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>