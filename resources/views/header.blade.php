<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Evolutiza Abogados y Asesores Tributarios | {{$title}}</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Abogados en España, Chile, El Salvador, Perú, Reino Unido, Suiza">
    <meta name="author" content="Francisco José Montañez Vega">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{asset('assets/css/headers/header-default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footers/footer-v1.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/revolution-slider/rs-plugin/css/settings.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css')}}">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body class="boxed-layout container">
<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="{{action('guestController@index')}}">
                <img width="250px" src="{{asset('img/logo_footer.png')}}" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    <li class="hoverSelector">
                        <i class="fa fa-globe"></i>
                        <a>Idiomas</a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="#">English</a>
                            </li>
                            <li><a href="#">Spanish<i class="fa fa-check"></i></a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Home
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Evolutiza -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Evolutiza</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{action('guestController@index')}}">Evolutiza</a></li>
                                    <li><a href="{{action('postsController@showAll')}}">Ver Posts</a></li>
                                    <li><a href="{{action('postsController@create')}}">Añadir Posts</a></li>
                                    <li><a href="{{action('eventsController@index')}}">Ver Eventos</a></li>
                                    <li><a href="{{action('eventsController@create')}}">Añadir Eventos</a></li>
                                    <li><a href="{{action('sliderController@index')}}">Ver Sliders</a></li>
                                    <li><a href="{{action('sliderController@create')}}">Añadir Slider</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- End Home -->

                    <!-- Servicios -->
                    <li >
                        <a href="{{action('guestController@services')}}">
                            Servicios
                        </a>
                    </li>
                    <!-- End Servicios -->


                    <!-- Quienes somos -->
                    <li>
                        <a href="{{action('guestController@aboutUs')}}">
                            Quienes Somos
                        </a>
                    </li>
                    <!-- End Quienes somos -->


                    <!-- Equipo -->
                    <li>
                        <a href="{{action('guestController@team')}}">
                            Equipo
                        </a>
                    </li>
                    <!-- End Equipo -->

                    <!-- Oficinas -->
                    <li>
                        <a href="{{action('guestController@offices')}}">
                            Oficinas
                        </a>
                    </li>
                    <!-- End Oficinas -->

                    <!-- Formación -->
                    <li>
                        <a href="{{action('guestController@training')}}">
                            Formación
                        </a>
                    </li>
                    <!-- End Formación -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>