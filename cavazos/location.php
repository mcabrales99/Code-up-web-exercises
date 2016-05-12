<!DOCTYPE html>


<html>
<head>
    <title>Location</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
</head>
<body>
<?php require_once 'navbar.php';?>
<?php require_once 'header.php'; ?>

    <style>
      #map {
        width: 500px;
        height: 400px;
        margin-left: 300px;
    }
        body  {

          background-image: url(img/green_back.jpg);

         }
    </style>


    <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 26.183685, lng: -98.123064},
          zoom: 15
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
 
<?php require_once 'footer.php'; ?>
</body>
</html>