@extends('site.layout')

@section('content')
    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map mt-0" style="height: 350px;"></div>

    <div class="container">

        <div class="row py-4">
            <div class="col-lg-6">

                <div class="overflow-hidden mb-1">
                    <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
                </div>
                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Envie aqui sua mensagem que, em breve, entraremos em contato! Obrigado.</p>
                </div>

                {!! Form::open(['class' => 'contact-form appear-animation', 'method' => 'post', 'data-appear-animation' => "fadeIn", 'data-appear-animation-delay' => '600']) !!}
                    <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                        <strong>Sucesso!</strong> Sua mensagem foi enviada com sucesso, em breve, retornaremos. Obrigado.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                        <strong>Erro!</strong> Problemas ao enviar sua mensagem, tente enviar novamente! Obrigado.
                        <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label class="required font-weight-bold text-dark">Nome</label>
                            <input type="text" value="" data-msg-required="Insira seu nome, por gentileza." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="required font-weight-bold text-dark">E-mail</label>
                            <input type="email" value="" data-msg-required="Insira seu email, por gentileza." data-msg-email="Por gentileza, insira um email válido." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-dark">Telefone</label>
                            <input type="text" value="" maxlength="100" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-dark">Assunto</label>
                            <input type="text" value="" maxlength="100" class="form-control" name="subject" id="subject">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="required font-weight-bold text-dark">Mensagem</label>
                            <textarea maxlength="5000" data-msg-required="Por gentileza, insira sua mensagem." rows="4" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Enviar Mensagem" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">

                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                    <h4 class="mt-2 mb-1"><strong>Batagliesi - Arquitetos + Designers</strong></h4>
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