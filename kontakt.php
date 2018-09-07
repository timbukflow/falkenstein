<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de-CH">
<head>
    <?php include 'include/head.php'; ?>
    <meta name="description" content="..."><!-- definieren -->
</head>

<body>
    
    <?php $page = 'kontakt'; include 'include/header.php'; ?>
    
    <div class="main-container">
        <section class="content top column-two contact contact-resp-top inview">
            <h3>
                Advokatur und Treuhand<br>
                am Falkenstein<br>
                Falkensteinstrasse 1<br>
                Postfach 152<br>
                9016 St.Gallen<br>
                <a href="https://www.google.ch/maps/dir//Falkensteinstrasse+1,+9000+St.+Gallen/@47.4299966,9.3870661,15z" target="_blank"><span class="gray" >Route mit Google berechnen</span></a><br>
                Advokatur<br>
                <span class="gray">
                    <a href="tel:0712426650">T: 071 242 66 50</a>
                    F: 071 242 66 52
                    <a href="mailto:info@falkenstein.ag" target="_top">info@falkenstein.ag</a>
                </span><br>
                Treuhand und Immobilien<br>
                <span class="gray">
                    <a href="tel:0712426657">T: 071 242 66 57</a>
                    F: 071 242 66 56
                    <a href="mailto:rs@falkenstein.ag" target="_top">rs@falkenstein.ag</a>
                </span>
            </h3>
        </section>
        
        <div class="column-map container-img inview">
            <div id="map"></div>
        </div>        
    </div>
    
    <script>
        function initMap() {
        var styledMapType = new google.maps.StyledMapType(
            [{"elementType": "geometry","stylers": [{"color": "#f5f5f5"}]},
             {"elementType": "labels.icon","stylers": [{"visibility": "off"}]},
             {"elementType": "labels.text.fill","stylers": [{"color": "#616161"}]},
             {"elementType": "labels.text.stroke","stylers": [{"color": "#f5f5f5"}]},
             {"featureType": "administrative.land_parcel","elementType": "labels.text.fill","stylers": [{"color": "#bdbdbd"}]},
             {"featureType": "poi","elementType": "geometry","stylers": [{"color": "#eeeeee"}]},{"featureType": "poi","elementType": "labels.text.fill","stylers": [{"color": "#757575"}]},
             {"featureType": "poi.park","elementType": "geometry","stylers": [{"color": "#e5e5e5"}]},{"featureType": "poi.park","elementType": "labels.text.fill","stylers": [{"color": "#9e9e9e"}]},
             {"featureType": "road","elementType": "geometry","stylers": [{"color": "#ffffff"}]},{"featureType":"road.arterial","elementType": "labels.text.fill","stylers": [{"color": "#757575"}]},{"featureType": "road.highway","elementType": "geometry","stylers": [{"color": "#dadada"}]},
             {"featureType": "road.highway","elementType": "labels.text.fill","stylers": [{"color": "#616161"}]},
             {"featureType": "road.highway.controlled_access","elementType": "geometry.fill","stylers": [{"color": "#0a387a"}]},
             {"featureType": "road.local","elementType": "labels.text.fill","stylers": [{"color": "#9e9e9e"}]},
             {"featureType": "transit.line","elementType": "geometry","stylers": [{"color": "#e5e5e5"}]},{"featureType": "transit.station", "elementType": "geometry", "stylers": [{"color": "#eeeeee" }]},
             {"featureType": "water","elementType": "geometry","stylers": [{"color": "#c9c9c9"}]},
             {"featureType": "water","elementType": "labels.text.fill","stylers": [{"color": "#9e9e9e"}]}
           ],
        {name: 'Styled Map'});
         var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 47.430176, lng: 9.392557},
            zoom: 13,
            disableDefaultUI: true,
        });
        
        var image = {
            url: 'img/marker.svg',
            scaledSize: new google.maps.Size(46, 46),
        }
         var falkensteinMarker = new google.maps.Marker({
            position: {lat: 47.430176, lng: 9.392557},
            map: map,
            optimized: false,
            icon: image,
        });
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
        }
    </script>
   
    
    <?php include 'include/footer.php'; ?>

    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaMyYyCYt5gnKomtPgBPCFKkPoNTdgtK8&callback=initMap"
    async defer></script>
 
</body>

</html>
