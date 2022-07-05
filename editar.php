<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<?php
require 'conexion.php';
// Se verifican los datos
    if  (isset($_GET['id'])) {
        $id = $mysqli->real_escape_string($_GET['id']);
        $sql = "SELECT id, nombreevento, lat, lng, organizer, eventdate, goal, linkinformation, description FROM locations where id= $id";
        $resultado= $mysqli->query($sql);
        $fila = $resultado->fetch_assoc();

        echo "<script>console.log({$id})</script>"; 
    }
//Actualizacion de datos del evento
    if (isset($_POST['update'])) {
        $id = $mysqli->real_escape_string($_POST['id']);
        $nameE = $mysqli->real_escape_string($_POST['nameE']);
        $organizerE = $mysqli->real_escape_string($_POST['organizerE']);
        $dateE = $mysqli->real_escape_string($_POST['dateE']);
        $descriptionE = $mysqli->real_escape_string($_POST['descriptionE']);
        $goalE = $mysqli->real_escape_string($_POST['goalE']);
        $linkinfoE = $mysqli->real_escape_string($_POST['linkinfoE']);
        
        $sql ="UPDATE locations SET nombreevento = '$nameE' , organizer = '$organizerE',
        eventdate= '$dateE', goal = '$goalE', linkinformation= '$linkinfoE', description = '$descriptionE' WHERE id= '$id' ";
        
        $resultado = $mysqli->query($sql);
        if ($resultado>0){
          echo "<script>console.log('Registro Modificado')</script>"; 
        } else{
          echo "<script>console.log('Error al modificar Registro')</script>"; 
        }

        header('Location: events.php');

  }
    
?>

<!--esturctura HTML Editar evento-->
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


    <title>Edit Events</title>
  </head>
  <body id="page-top">
  <!-- Navigation-->
  
              
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container text-uppercase">
        <a class="navbar-brand" href="#page-top">E-Tracker</a>

   
    <ul class="navbar-nav ">
                    <li class="nav-item active">
                    <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="admin-map.php">Map</a>
                    </li>
    </ul> </div>
 

                </nav>

  <!-- Masthead-->
        
<!-- Services-->
<section class="page-section" >
  <div class="container">
    
            <!--  formulario -->
          <div class="row">
      
              <div class="col-sm-6 col-lg-6 ">

                <form  id="registro" name="registro" action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST" autocomplete="on" >
                  <div class="form-group">
                    <label for="nameE" class="form-label">Event</label>
                    <input type="hidden" id="id" name="id" value="<?php echo $id?>">
                    <input type="text" class="form-control" id="nameE" name="nameE" value="<?php echo $fila['nombreevento']?>"  aria-describedby="nombreHelp">
                    <div id="nameEHelp" class="form-text">Event name</div>
                  </div>

                  <div class="form-group">
                    <label for="organizerE" class="form-label">Organizer</label>
                    <input type="text" class="form-control" id="organizerE" name="organizerE"  value="<?php echo $fila['organizer']?>"   aria-describedby="organizerEHelp">
                    <div id="organizerEHelp" class="form-text">Event Organizer</div>
                  </div>

                  <div class="form-group">
                    <label for="dateE" class="form-label">Date</label>
                    <input type="date" class="form-control" id="dateE" name="dateE"   value="<?php echo $fila['eventdate']?>"  aria-describedby="dateEHelp">
                    <div id="dateEHelp" class="form-text">Event Date</div>
                  </div>


                  <div class="form-group">
                    <label for="descriptionE" class="form-label">Description</label>
                    <input type="text" class="form-control" id="descriptionE" name="descriptionE"  value="<?php echo $fila['description']?>"  >
                  </div>

                  <div class="form-group">
                    <label for="goalE" class="form-label">Goal</label>
                    <input type="number" class="form-control" id="goalE" name="goalE"  value="<?php echo $fila['goal']?>"   >
                  </div>

                  <div class="form-group">
                    <label for="linkinfoE" class="form-label"> Information Link</label>
                    <input type="text" class="form-control" id="linkinfoE" name="linkinfoE"  value="<?php echo $fila['linkinformation']?>"   >
                  </div>
                  <br>
                  <br>

                  <div class="form-group"> 
                    <button id="guarda" name="update" type="submit" class="btn btn-outline-success">Update Event</button>
                    <a href="events.php"class="btn btn-outline-warning"> Go Back</a>

                  </div>  
                  
                </form>
              </div>

            <div class="col-sm-6 col-lg-6 ">

              <div id="googleMap" style="width:100%;height:100%;" class="col-lg-4">
                  <script>

                  const myLatLng = { lat: <?php echo $fila['lat']; ?>   , lng: <?php echo $fila['lng']; ?>   };

                  function myMap() {
                  var mapProp= {
                  center:new google.maps.LatLng(<?php echo $fila['lat']; ?> ,  <?php echo $fila['lng']; ?>),
                  zoom:9,
                  };
                  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                  var marker = new google.maps.Marker({position: myLatLng});

                  marker.setMap(map);

                  }
                  </script>

                  <script src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyBjGcZbkVaH8J7wd1QrUUb3M_m5mF_Fd6k&callback=myMap" defer></script>
          
            </div>
          </div>

            
            
      
        </div>
    </div>
    
    </section>
  </body>
  </html>