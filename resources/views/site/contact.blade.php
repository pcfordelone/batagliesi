@extends('site.layout')

@section('content')
    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map mt-0" style="height: 350px;"></div>

    <div class="container">

        <div class="row py-4">
            <div class="col-lg-6">
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                    <h4 class="mt-2 mb-1"><strong>Batagliesi - Arquitetos</strong></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark"></strong> R. Diogo Moreira, 149 - Pinheiros - São Paulo - SP</li>
                        <li><i class="fas fa-phone top-6"></i> <strong class="text-dark"></strong> +55 11 3813 1999</li>
                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark"></strong> <a href="contato@batagliesi.com.br">contato@batagliesi.com.br</a></li>
                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark"></strong> <a href="curriculo@batagliesi.com.br">curriculo@batagliesi.com.br</a></li>
                        <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark"></strong> <a href="fornecedores@batagliesi.com.br">fornecedores@batagliesi.com.br</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
@stop

@section('extra_body')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDquBrLmqsW8N0ENWxUE9deAFr2qfnOy20"></script>
    <script>

        /*
         Map Settings

         Find the Latitude and Longitude of your address:
         - https://www.latlong.net/
         - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

         */

        // Map Markers
        var mapMarkers = [{
            address: "R. Diogo Moreira, 149 - Pinheiros - São Paulo - SP",
            html: "<strong>Batagliesi - Arquitetos + Designers</strong><br>R. Diogo Moreira, 149 - Pinheiros - São Paulo - SP",
            icon: {
                image: "/images/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            },
            popup: true
        }];

        // Map Initial Location
        var initLatitude = -23.5702911;
        var initLongitude = -46.6927509;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 17
        };

        var map = $('#googlemaps').gMap(mapSettings);

        // Map text-center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }

    </script>
@stop