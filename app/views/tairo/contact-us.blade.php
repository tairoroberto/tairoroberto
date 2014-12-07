<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | Corlate</title>
    
    <!-- core CSS -->
    <link href="packages/css/bootstrap.min.css" rel="stylesheet">
    <link href="packages/css/font-awesome.min.css" rel="stylesheet">
    <link href="packages/css/prettyPhoto.css" rel="stylesheet">
    <link href="packages/css/animate.min.css" rel="stylesheet">
    <link href="packages/css/main.css" rel="stylesheet">
    <link href="packages/css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="packages/js/html5shiv.js"></script>
    <script src="packages/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="packages/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="packages/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="packages/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="packages/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="packages/images/ico/apple-touch-icon-57-precomposed.png">
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAkyS2gK1LBa3neoDq2iHHvGY3_jD1fi-4&sensor=false'></script>

    <script src="packages/js/jquery.js"></script>
    <script src="packages/js/bootstrap.min.js"></script>
    <script src="packages/js/jquery.prettyPhoto.js"></script>
    <script src="packages/js/jquery.isotope.min.js"></script>
    <script src="packages/js/main.js"></script>
    <script src="packages/js/wow.min.js"></script>

    <script type="text/javascript">
           var geocoder;
                var map;
                function initialize() {
                    geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(-23.425218, -46.6611029);
                    var mapOptions = {
                        zoom: 15,
                        center: latlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    map = new         google.maps.Map(document.getElementById('mapa'), mapOptions);
                    codeAddress();
                }

                function codeAddress() {
                    var address = "Av. Manoel Martins, 745 Mairiporã - SP 07600-000";
                    geocoder.geocode( { 'address': address},     function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                    });
                } 


 // Contact form
    var form = $('#main-contact-form');
    form.submit(function(event){
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: "{{action('HomeController@enviarEmail')}}",

            beforeSend: function(){
                form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
            }
        }).done(function(data){
            form_status.html('<p class="text-success">' + data.message + '</p>').delay(3000).fadeOut();
        });
    });

    </script>  
</head><!--/head-->

<body onload="initialize()">

{{-- begin nav Menu--}}
    @include('tairo.nav-menu');
{{-- end nav Menu--}}

    <section id="contact-info">
        <div class="center">                
            <h2> Como me encontrar?</h2>
            <p class="lead">Aqui estáo alguns dados onde vc pode entrar em contato comigo</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap"  id="mapa" >
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Home Office</h5>
                                    <p>Rua Gastão de Orleans,95 <br>
                                    Jardim Samambaia, Sao Paulo</p>
                                    <p>Telefone:(11) 95297-9157 <br>
                                    Email:contato@tairoroberto.kinghost.net</p>
                                </address>                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">


         @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
          </div>
        @else
        
            <div class="center">        
                <h2>Envie-me uma mensagem</h2>
                <p class="lead">Fique a vontade para me enviar uma mensagem, vou lhe responder com todo prazer.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" 
                        name="contact-form" method="post" action="{{action('HomeController@sendEmail')}}">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nome *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="number" class="form-control" name="number" id="number">
                        </div>
                        <div class="form-group">
                            <label>Nome da Empresa</label>
                            <input type="text" class="form-control" name="nameEmpresa" id="nameEmpresa">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Assunto *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mensagem *</label>
                            <textarea name="mensagem" id="mensagem" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar Mensagem</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
    @endif

        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    

{{--Begin of footer--}}
    @include('tairo.footer');
{{--End of footer--}}


</body>
</html>