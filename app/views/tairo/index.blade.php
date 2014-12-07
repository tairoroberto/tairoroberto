<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Tairo Roberto</title>
	
	<!-- core CSS -->
    <link href="packages/css/bootstrap.min.css" rel="stylesheet">
    <link href="packages/css/font-awesome.min.css" rel="stylesheet">
    <link href="packages/css/animate.min.css" rel="stylesheet">
    <link href="packages/css/prettyPhoto.css" rel="stylesheet">
    <link href="packages/css/main.css" rel="stylesheet">
    <link href="packages/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="packages/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="packages/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="packages/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="packages/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="packages/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

{{-- begin nav Menu--}}
    @include('tairo.nav-menu')
{{-- end nav Menu--}}

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>

           {{--Carousel--}} 
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(packages/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Olá obrigado por visitar minha página, seja bem vindo!</h1>
                                    <h2 class="animation animated-item-2">Fique a vontade para ver um pouco de meus trabalhos.</h2>
                                   {{-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> --}}
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="packages/images/slider/tairo.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

           </div>
           {{-- Espaço para colocar corousel--}}


        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->


{{-- Begin Feature
    @include('tairo.feature')
 End Feature--}}



{{--Gegin recent-works--}}
    @include('tairo.recent-works')
{{--End recent-works--}}}






{{-- Begin Services
    @include('tairo.services-detail')
 End Services--}}

{{--begin middle
    @include('tairo.middle')
 End middle--}}

{{--Begin partiner--}}
    @include('tairo.partiner')
{{--end pertiner--}}}



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
    <script src="packages/js/jquery.js"></script>
    <script src="packages/js/bootstrap.min.js"></script>
    <script src="packages/js/jquery.prettyPhoto.js"></script>
    <script src="packages/js/jquery.isotope.min.js"></script>
    <script src="packages/js/main.js"></script>
    <script src="packages/js/wow.min.js"></script>
</body>
</html>