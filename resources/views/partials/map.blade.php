<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}]
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 29.8771488, lng: -97.932536},
          zoom: 11,
        });
      }

       function markIt(someObject) {
             var geocoder = new google.maps.Geocoder();
 
             geocoder.geocode({address: someObject.address}, function(results, status) {
 
                 if (status === "OK") {
                     var coordinates = {};
                     coordinates.lat = results[0].geometry.location.lat();
                     coordinates.lng = results[0].geometry.location.lng();
 
                     addAMarker(coordinates, someObject);
 
                 }
 
              var marker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      title: 'EAA'
                    });
             }) ;
 
       }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAytcuKxfCmmuSxqKfppWk-7SIKglX-4X0&callback=initMap"
    async defer></script>
  </body>
</html>