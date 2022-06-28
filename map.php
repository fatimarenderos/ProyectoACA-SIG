<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<!DOCTYPE html>
<html>
<body>

    <h1>My First Google Map</h1>

<div id="googleMap" style="width:40%;height:400px;" class="col-lg-4">
    <script>
    function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(13.794185, -88.89652999999998),
    zoom:9,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyBjGcZbkVaH8J7wd1QrUUb3M_m5mF_Fd6k&callback=myMap" defer></script>
    
</div>

<div id="googleMap2" style="width:50%;height:400px;" class="col-lg-4">
    <script>
    function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(13.794185, -88.89652999999998),
    zoom:9,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var map2 = new google.maps.Map(document.getElementById("googleMap2"),mapProp);

    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyBjGcZbkVaH8J7wd1QrUUb3M_m5mF_Fd6k&callback=myMap" defer></script>
    
</div>
</body>
</html>