<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<!-- Ruta de conexion a la base de datos remota-->
<?php
require 'conexion.php';
$sql = "SELECT id, nombreevento, organizer, eventdate, goal, linkinformation, description FROM locations";

$resultado = $mysqli->query($sql);
?>


<!doctype html>
  <html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> 

  <title>E-tracker Events</title>
</head>
<body id="page-top" >


<!-- HTML para la barra de navegacion-->

              
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container text-uppercase">
        <a class="navbar-brand" href="#page-top">E-Tracker</a>
        
   
        
    <ul class="navbar-nav ">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="user-map.php">Map</a>
                    </li>
    </ul> 
  
  </div>


                </nav>

  <div class="container">

    <div class="row">
      <h1>Eventos</h1>
    </div>
  
    <br>
    <br>
    <br>


        <!-- HTML para desplegar los eventos -->

    <div class="row">
          <?php while ($fila = $resultado->fetch_assoc()) { ?>
              <div class="col-sm-4 col-lg-3 ">

              <div class="card border-success mb-3  text-center" style="max-width: 18rem;">
                  <div class="card-header"><h4 class="card-title"><?php echo $fila['nombreevento']; ?></h4></div>

                  <div class="card-body text-success">
                    <h5 class="card-title"><?php echo $fila['eventdate']; ?></h5>
                    <h5 class="card-title"><?php echo $fila['organizer']; ?></h5>

                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $fila['goal']; ?></h6>
                    <p class="card-text"><?php echo $fila['description']; ?></p>
                    </div> 

                </div>

              </div>
           <?php } ?>
    </div>

    


</body>
</html>