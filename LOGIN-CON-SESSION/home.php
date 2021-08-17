<?php include 'app/sesion.php'; ?>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
  </head>
  <body>
  
  
    <div class="container-fluid mt-5">
      <div class="row justify-content-center">
        <div class="col-4 mt-5 text-center">
          <h1>Bienvenido</h1>
          <h2> <?php echo $_SESSION['user']; ?></h2>
          <a href="app/salir.php" class="btn btn-secondary mt-5">Salir</a>
        </div>
      </div>
    </div>
  
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

