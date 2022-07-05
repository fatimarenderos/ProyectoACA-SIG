<!------ SPDX-License-Identifier: Apache-2.0 ---------->
<?php
include_once 'header.php';
include_once 'locations_model.php';
?>

<div id="map"></div>
<!------ Include the above in your HEAD tag ---------->

<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;//marcador de confirmación
    var locations = <?php get_all_locations() ?>;//recopilacion de todas las ubicaciones de la base de datos y pasarla a la variable locations
    //se carga las opciones esenciales de Google Maps
    function initMap() {
        var elSalvador =  {lat: 13.794185, lng: -88.89652999999998};//punto de ubicación El Salvador lat y long
        infowindow = new google.maps.InfoWindow();// iniciar la ventana de informacion
        //Pausará el zoom a 9 en la ubicacion dad
        var myOptions = {
            zoom: 9,   
            center: new google.maps.LatLng(13.794185, -88.89652999999998),//punto de ubicación El Salvador
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);

        //bucle para las ubicaciones que se tienen de la base de datos y crea marcadores dinamicamente utilizando datos que proviene varaible location
        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {
            //Se agrega el marcador en la posicion de lat y long correcta(primer mapa)
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),//lat,long
                map: map,
                icon :   locations[i][8] === '1' ?  red_icon  : purple_icon,//se verifica si la ubicación esta confirmada// 1=iconorojo, de lo contrario iconomorado
                html: document.getElementById('form')//carga el documento del formulario, por id del script del html
            });
             //Aqui se realiza la confirmación del formulario  
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][8] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][7]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#nombreevento").val(locations[i][4]);
                    $("#organizer").val(locations[i][5]);
                    $("#eventdate").val(locations[i][6]);
                    $("#goal").val(locations[i][7]);
                    console.log( (locations[i][4]));
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
//funcion de guardar los datos de confirmación
    function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0; //se confirma para obtener el valor correcto de la checkbox
        var id = document.getElementById('id').value;
        console.log(id);
        console.log(confirmed);

        var url = 'locations_model.php?confirm_location&id=' + id + '&confirmed=' + confirmed ;//se pasa todos los datos por medio de la URL y publicarlos en locations_model

        console.log(url);
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();//cerra la ventana de información
                window.location.reload(true);//carga la misma pagina para actualizar los resultados
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
            }
        });
    }


    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }


</script>
 <!--script del formulario-->
<div style="display: none" id="form">
    

                
 <table class="map1">
        <tr>
           <div class=' d-flex align-items-center justify-content-center'> 
                <img src='https://flexambiental.com/img/Iconos%20flex_12.png' style='width: 80px; height: 100px' alt='logo'> 
            </div> 
        </tr>
        <!-- descripcion-->
        <tr>
            <input name="id" type='hidden' id='id' />
            <td><a>Description: </a>
          
        </td>
            <td>  <input type='text'  id='nombreevento' class='form-control'  readonly> </td>
        </tr>

            <!-- organizador-->
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Organizer: </a></td>
            <td>  <input type='text'  id='organizer' class='form-control'  readonly> </td>
        </tr>
        <!--  fecha del evento-->
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Event date:</a></td>
            <td>  <input type='text'  id='eventdate' class='form-control'  readonly> </td>
        </tr>
        <!-- confirmacion de la ubicacion-->
        <tr>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="confirmed" name='confirmed'  id='confirmed'>
            <label class="form-check-label" for="confirmed">Confirm Location     </label>
        </div>
        </tr>

        <tr> <div class='text-center' > <input type='button' value='Save' class="btn btn-outline-warning text-center" onclick='saveData()'/>  </div> <br> </tr>

    
         <!--meta-->
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Goal:</a></td>
            <td>  <input type='text'  id='goal' class='form-control'  readonly> </td>
        </tr>
        
        
    </table>



</div>
<!--Api Google Maps-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyBjGcZbkVaH8J7wd1QrUUb3M_m5mF_Fd6k&callback=initMap">
</script>