<!------ SPDX-License-Identifier: Apache-2.0 ---------->


<!--Estructura HTML y estilo para tomar el mapa pantalla completa-->
<!DOCTYPE html>
<html>
<head>
    <title>E-tracker</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<!--Comienza la etiqueta de css-->
<style>

    
    /*Opcional: Hace que la pagina rellene la ventana completa*/
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
 
 /*Se establece la altura del div que contiene el mapa de manera explicita */
    #map {
        height: 100%;
    }
</style>
      
      <!--HTML del la barra de navegacion -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container text-uppercase">
        <a class="navbar-brand" href="#page-top">E-Tracker</a>
        
   
    <ul class="navbar-nav ">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login/logout.php">Logout</a>
                    </li>
    </ul> 
  
  </div>


  </nav>
<!--Estilo de la API de Google Maps-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

