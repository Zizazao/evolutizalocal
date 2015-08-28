@include('header')



    <!--=== Content Part ===-->
    <!--<div class="container content">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title-v2">OUR SERVICES</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.</p><br>
                <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark">Read More</a>
                <a href="#" class="btn-u">Purchase Now</a>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="assets/img/mockup/mockup1.png" alt="">
            </div>
        </div>
    </div>-->
    <!--/container-->
    <!--=== End Content Part ===-->
    

    <!--=== Cube Portfolio ===-->
    <div class="container content-sm">
        <div class="text-center margin-bottom-30">
            <h2 class="title-v2 title-center">SERVICIOS</h2>
            <p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p>
        </div>

        <div class="cube-portfolio container margin-bottom-20">
            <div class="margin-bottom-30">
                <div id="filters-container" class="cbp-l-filters-text">
                    <div data-filter=".services" class="cbp-filter-item">Sectores</div> |
                    <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">Todos</div> |
                    <div data-filter=".areas" class="cbp-filter-item">Áreas</div> 
                </div><!--/end Filters Container-->
            </div>

            <div id="grid-container" class="cbp-l-grid-gallery">
                <div class="cbp-item illustration services">
                    <a href="{{asset('assets/ajax/cube-portfolio/project1.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/city-grua.jpg')}}" alt="grúa">                            
                        </div>
                        <div class="cbp-caption-overlayBottom">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Infraestructuras</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item services">
                    <a href="assets/ajax/cube-portfolio/project2.html" class="cbp-caption cbp-singlePageInline"
                       data-title="Bolt UI<br>by Tiberiu Neamu">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/light-bulb.jpg')}}" alt="light bulb">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Energía</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item illustration services">
                    <a href="assets/ajax/cube-portfolio/project3.html" class="cbp-caption cbp-singlePageInline"
                       data-title="WhereTO App<br>by Tiberiu Neamu">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/medio_ambiente.jpg')}}" alt="hirsch">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Medio Ambiente</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item services illustration">
                    <a href="assets/ajax/cube-portfolio/project4.html" class="cbp-caption cbp-singlePageInline"
                       data-title="iDevices<br>by Tiberiu Neamu">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/empire-state-building.jpg')}}" alt="empire state building">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Inmobiliario</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item services graphic">
                    <a href="assets/ajax/cube-portfolio/project5.html" class="cbp-caption cbp-singlePageInline"
                       data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/planos.jpg')}}" alt="posts">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Urbanístico</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item illustration services graphic">
                    <a href="assets/ajax/cube-portfolio/project6.html" class="cbp-caption cbp-singlePageInline"
                       data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/aircraft.jpg')}}" alt="aircraft">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title"></div>
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Aeronáutico</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project7.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/coins.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Fiscal Y Tributario</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project8.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/sydney-puerto.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Mercantil y Societario</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project9.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/taxes.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Contable</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project10.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/reestructuraciones.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Reestructuraciones e insolvencias</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project11.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/stock-exchange.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Financiero y Mercado de Valores</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project12.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/connect.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Fusiones y Adquisiciones</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project13.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/Propiedad_Industrial.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Propiedad Industrial e Intelectual</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project14.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/rrhh.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Recursos Humanos</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project15.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/construction.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Laboral</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project16.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/sectores_regulados_2.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Sectores Regulados</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item areas">
                    <a href="{{asset('assets/ajax/cube-portfolio/project17.html')}}" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-overlayBottomPush">
                            <img src="{{asset('img/files.jpg')}}" alt="">
                        </div>
                        <div class="cbp-caption-overlayBttomPush">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="carousel-caption services-img"><h5 style="background-color:black; opacity:0.8"><span style="color:white">Administrativo</span></h5></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div><!--/end Grid Container-->
        </div>
    </div>
    <!--=== End Cube Portfolio ===-->

     <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="{{action('guestController@index')}}"><img id="logo-footer" class="footer-logo" src="{{asset('img/logo_footer.png')}}" alt=""></a>
                        <p>EVOLUTIZA está dedicada a la Dirección Integral de Proyectos e Inversiones, con profesionales enfocados a la consecución de objetivos, el control de los recursos y el cumplimiento de plazos, que conforman equipos multidisciplinares integrados y altamente cualificados.</p>
                        
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Latest Posts</h2></div>
                            <ul class="list-unstyled latest-list">
                                @foreach($lastPosts as $post)
                                <li>
                                    <a href="#">{{$post->titleh1}}</a>
                                    <small>{{$post->created_at}}</small>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div><!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Useful Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="{{action('guestController@aboutUs')}}">Quienes somos</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="{{action('guestController@services')}}">Servicios</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Equipo</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Oficinas</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="{{action('guestController@training')}}">Formación</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>
                        <address class="md-margin-bottom-40">
                            25, Lorem Lis Street, Orange <br />
                            California, US <br />
                            Phone: 800 123 3456 <br />
                            Fax: 800 123 3456 <br />
                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2015 &copy; All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
    });
</script>

<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>