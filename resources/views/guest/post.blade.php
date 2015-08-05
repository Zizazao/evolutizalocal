@include('header')
    <body>
        <div class="container content-sm">
            <div class="row">
                <div class="col-md-9">
                    <h1>{{$post->titleh1}}</h1>
                    <hr>
   
                    <div class="overflow-hidden">

                        <img class="img-responsive center-block" src="{{asset('postimages')}}/{{$post->img_name}}" alt="" />
                    
                    </div>

                    <div class="blog-post-tags">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-calendar"></i> {{$post->created_at}}</li>
                        </ul>

                        <ul class="list-unstyled list-inline blog-tags">
                            <li>
                                <i class="fa fa-tags"></i>

                                @foreach($post->tags as $tag)

                                    <a href="#">{{$tag->name}}</a>

                                @endforeach

                            </li>
                        </ul>
                    </div>
                
                    <h3>{{$post->head}}</h3>

                    <p>{!! $post->body !!}</p> 

                </div>

                <div class="container col-md-3">
                    <div class="headline-v2 bg-color-light"><h4>Últimas Noticias</h4></div>
                    <div class="list-inline tags-v2">

                        @foreach($lastPosts as $postRight)

                            <h5><a href="{{ action('guestController@showPost', [$postRight->id]) }}">{{$postRight->titleh1}}</a>
                            <small>{{str_limit($postRight->head, $limit="75", $end="...")}}</small></h5>

                        @endforeach
                    </div>
                </div>

                <div class="container col-md-3">
                    <div class="headline-v2 bg-color-light"><h4>Últimos Eventos</h4></div>
                    <div class="list-inline tags-v2">

                        @foreach($lastEvents as $eventRight)

                            <h5><a href="{{ action('guestController@showEvent', [$eventRight->id]) }}">{{$eventRight->title}}</a>
                            <small>{{str_limit($eventRight->head, $limit="75", $end="...")}}</small></h5>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
@include('footer')