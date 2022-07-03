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
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var locations = <?php get_all_locations() ?>;

    function initMap() {
        var elSalvador =  {lat: 13.794185, lng: -88.89652999999998};
        infowindow = new google.maps.InfoWindow();
        var myOptions = {
            zoom: 9,
            center: new google.maps.LatLng(13.794185, -88.89652999999998),
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);


        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][4] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][7]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#nombreevento").val(locations[i][4]);
                    $("#organizer").val(locations[i][5]);
                    $("#eventdate").val(locations[i][6]);
                    $("#goal").val(locations[i][7]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0;
        var id = document.getElementById('id').value;
        var url = 'locations_model.php?confirm_location&id=' + id + '&confirmed=' + confirmed ;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
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

<div style="display: none" id="form">
    <table class="map1">
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Description:</a></td>
            <td><textarea disabled id='description' placeholder='Description'></textarea></td>
        </tr>
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Organizer:</a></td>
            <td><textarea disabled id='organizer' placeholder='Organizer'></textarea></td>
        </tr>
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Event date:</a></td>
            <td><textarea disabled id='eventdate' placeholder='Event Date'></textarea></td>
        </tr>
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Goal:</a></td>
            <td><textarea disabled id='goal' placeholder='Goal'></textarea></td>
        </tr>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="confirmed" name='confirmed'  id='confirmed'>
            <label class="form-check-label" for="confirmed">
            Confirm Location            </label>
        </div>
        

        <tr><td></td><td><input type='button' value='Save' onclick='saveData()'/></td></tr>
    </table>
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyBjGcZbkVaH8J7wd1QrUUb3M_m5mF_Fd6k&callback=initMap">
</script>