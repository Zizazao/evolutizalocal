@include('header')
    <!--=== End Header ===-->

    <!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE -->
                @foreach($lastSliders as $slider)
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="300" data-title="Slide 1">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('postimages')}}/{{ $slider->img_name}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                        data-x="center"
                        data-hoffset="0"
                        data-y="100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endeasing="Power1.easeIn"
                        data-endspeed="300">
                        {!!$slider->title!!}
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption revolution-ch2 sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="190"
                        data-speed="1400"
                        data-start="2000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        {!!$slider->subtitle!!}<br>
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="310"
                        data-speed="1600"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Leer más</a>
                    </div>
                </li>
                @endforeach
                <!-- END SLIDE -->
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!--=== End Slider ===-->


    <!--=== Content Part ===-->

    <div class="container">

        <!-- Eventos -->

        <div class="container content-sm">

            <div class="row">
            
                <div class="col-md-3 col-sm-6">
                    <div class="headline"><h2>Eventos</h2></div>
                        @foreach($lastEvents as $event)
                        <div class="thumbnails thumbnail-style thumbnail-kenburn">
                            <div class="caption">
                                <h3><a class="hover-effect" href="{{ action('guestController@showEvent', [$event->id]) }}">{{$event->title}}</a></h3>
                                <p>{{str_limit($event->head, $limit="120", $end="...")}}</p>
                                Fecha del Evento: <b>{{$event->launch_date}}</b>
                            </div>
                        </div>
                        @endforeach
                </div>
                    

                <div class="col-md-3 col-sm-6">
                    <br><br><br><br>
                    @foreach($lastEvents2 as $event2)
                        <div class="thumbnails thumbnail-style thumbnail-kenburn">
                            <div class="caption">
                                <h3><a class="hover-effect" href="{{ action('guestController@showEvent', [$event2->id]) }}">{{$event2->title}}</a></h3>
                                <p>{{str_limit($event2->head, $limit="120", $end="...")}}</p>                                Fecha del Evento: <b>{{$event2->launch_date}}</b>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- End Eventos -->

                <!-- News -->

                <div class="headline"><h2>Noticias</h2></div>

                @foreach($lastPosts as $post)

                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnails thumbnail-style thumbnail-kenburn">
                            <div class="thumbnail-img">
                                <div class="overflow-hidden">
                                    <img class="" height="200" src="{{asset('postimages')}}/{{$post->img_name}}" alt="{{$post->img_name}}" />
                                </div>
                                <a class="btn-more hover-effect" href="{{ action('guestController@showPost', [$post->id]) }}">read more +</a>
                            </div>
                            <div class="caption">
                                  
                                <h3><a class="hover-effect" href="{{ action('guestController@showPost', [$post->id]) }}">{{$post->titleh1}}</a></h3>
                                
                                <p>{{str_limit($post->head, $limit="170", $end="...")}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
            <!-- End News -->

        <!-- Info Blokcs -->
        <div class="row margin-bottom-30">
            <!-- Welcome Block -->
            <div class="container">
                <div class="col-md-12 md-margin-bottom-40">
                    <div class="headline"><h2>Evolutiza Abogados & Asesores Tributarios</h2></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img width="350"class="img-responsive margin-bottom-20 center-block" src="img/watch.jpg" alt="" />
                        </div>
                        <div class="text-center col-sm-12">
                            <p><span class="color-green">Abogados y asesores tributarios</span> que se quitan el reloj para hablar contigo, <span class="color-green">¿hablamos?</span></p>
                        </div>
                    </div>
                </div><!--/col-md-8-->

                <!-- Latest Shots 
                <div class="col-md-4">
                    <div class="headline"><h2>Latest Shots</h2></div>
                    <div id="myCarousel" class="carousel slide carousel-v1">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="assets/img/main/img5.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="assets/img/main/img4.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                                </div>
                                </div>
                            <div class="item">
                                <img src="assets/img/main/img3.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-arrow">
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div> 
                End Latest Shots col-md-4-->
            </div>
        </div>
        <!-- End Info Blokcs -->

    <!--/container-->
<!-- End Content Part -->
    

@include('footer')

