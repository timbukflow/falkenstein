<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de-CH">
<head>
    <?php include 'include/head.php'; ?>
    <meta name="description" content="Advokatur und Treuhand am Falkenstein, Falkensteinstrasse 1, Postfach 152, 9016 St.Gallen">
</head>

<body>
    
    <?php $page = 'kontakt'; include 'include/header.php'; ?>
    
    <div class="main-container">
        <section class="content top column-two contact contact-resp-top inview">
            <h3>
                Advokatur und Treuhand<br>
                am Falkenstein<br>
                Falkensteinstrasse 1<br>
                Postfach<br>
                9016 St.Gallen<br>
                <a href="https://www.google.ch/maps/dir//Falkensteinstrasse+1,+9000+St.+Gallen/@47.4299966,9.3870661,15z" target="_blank"><span class="gray" >Route mit Google berechnen</span></a><br>
                Advokatur<br>
                <span class="gray">
                    <a href="tel:0712426650">T: 071 242 66 50</a>
                    <a href="mailto:info@falkenstein.ag" target="_top">info@falkenstein.ag</a>
                </span><br>
                Treuhand und Immobilien<br>
                <span class="gray">
                    <a href="tel:0712426657">T: 071 242 66 57</a>
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
            var falkenstein = {lat: 47.429926, lng: 9.391524}; 
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 14, 
                    center: falkenstein,
                    zoomControl: undefined,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    rotateControl: false,
                    fullscreenControl: false,
                    styles: [
                        {"featureType": "administrative","elementType": "geometry","stylers":[{"visibility": "off"}]},
                        {"featureType": "landscape.man_made","elementType": "geometry.stroke","stylers": [{"color": "#c8c8c8"}]},
                        {"featureType": "poi","stylers": [{"visibility": "off"}]},
                        {"featureType": "road","elementType": "labels.icon","stylers": [{"visibility": "off"}]},
                        {"featureType": "transit","stylers": [{"visibility": "off"}]}
                    ]
                });
            
            var marker = new google.maps.Marker({
                position: falkenstein, 
                map: map,
                icon: 'img/marker.svg',
            });
        }
    </script>
   
    
    <?php include 'include/footer.php'; ?>

    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZFKGJ7AUYJKpts4vtPVvXgCp8XhY4GFI&callback=initMap"
    async defer></script><!--AIzaSyCaMyYyCYt5gnKomtPgBPCFKkPoNTdgtK8&callback-->
 
</body>

</html>
