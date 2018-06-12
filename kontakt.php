<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de-CH">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Advokatur und Treuhand am Falkenstein</title>
    <meta name="robots" content="all">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Solarius Rosenberg">
    <meta name="description" content="..."><!-- definieren -->
    <meta name="keywords" content="Advokatur, Treuhand, Immobilien, Falkenstein, Frank Th. Petermann, Rolf W. Rempfler, Christa Rempfler, Debora Bilgeri, Andres Thürlimann, Tanja Ivanovic, Werner Rempfler, Maria Rempfler, Roger Schai,">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Falkenstein.ag">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="Advokatur und Treuhand am Falkenstein">
    <meta property="og:url" content="http://falkenstein.ag">
    <meta property="og:image" content="..."><!-- definieren -->
    <meta property="business:contact_data:street_address" content="Falkensteinstrasse 1">
    <meta property="business:contact_data:locality" content="St.Gallen">
    <meta property="business:contact_data:region" content="9016">
    <meta property="business:contact_data:postal_code" content="9016">
    <meta property="business:contact_data:country_name" content="Switzerland">
    
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|PT+Serif" rel="stylesheet">
</head>

<body>
    
    <?php $page = 'kontakt'; include 'include/header.php'; ?>
    
    <main class="main-container">
        <section class="content-team column-two contact">
            <h3>Falkensteinstrasse 1<br>Postfach 152<br>9016 St. Gallen
            <span><a href="https://www.google.ch/maps/dir//Falkensteinstrasse+1,+9000+St.+Gallen/@47.4299966,9.3870661,15z" title="Route mit Google berechnen" target="_blank">Anfahrt mit Google</a></span>
            </h3><br>
        </section>
        <section class="content-team column-two contact">
            <h3>Advokatur am Falkenstein<br>
                <span><a href="tel:071 242 66 50">T 071 242 66 50</a>
                <a href="tel:071 242 66 52">T 071 242 66 52</a>
                <a href="mailto:info@falkenstein.ag" target="_top">info@falkenstein.ag</a></span>
            </h3><br>
        </section>
        <section class="content-team column-two contact">
            <h3>Treuhand am Falkenstein<br>
                <span><a class="contact" href="tel:071 242 66 57">T 071 242 66 57</a>
                <a class="contact" href="tel:071 242 66 56">T 071 242 66 56</a>
                <a class="contact" href="mailto:rs@falkenstein.ag" target="_top">rs@falkenstein.ag</a></span>
            </h3>
        </section>
    </main>
    
    <div class="column-six" id="map"></div>
    
    <?php include 'include/footer.php'; ?>

    <script>
        function initMap() {
        var styledMapType = new google.maps.StyledMapType(
            [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dadada"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#0a387a"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#c9c9c9"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                }
            ],
        {name: 'Styled Map'});

        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 47.430176, lng: 9.392557},
            zoom: 14,
            disableDefaultUI: true,
            mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map']
        }
        });
          
        var image = 'img/marker-falkensteinstrasse.png';
        var falkensteinMarker = new google.maps.Marker({
            position: {lat: 47.430176, lng: 9.392557},
            map: map,
            icon: image,
        });
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaMyYyCYt5gnKomtPgBPCFKkPoNTdgtK8&callback=initMap"
    async defer></script>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    
 
</body>

</html>
