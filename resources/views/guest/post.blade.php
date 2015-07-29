@include('header')
<body>

        <div class="container">

            <div class="content col-md-9">

                <h1>{{$post->titleh1}}</h1>                
            </div>

            <div class="overflow-hidden col-md-9">
                <img class="img-responsive" src="{{asset('postimages')}}/{{$post->img_name}}" alt="" />
            </div>

            <div class="container col-md-3">
                <div class="headline-v2 bg-color-light"><h4>Últimas Noticias</h4></div>
                <div class="list-inline tags-v2">

                    @foreach($lastPosts as $postRight)

                    <h5><a href="{{ action('guestController@showPost', [$post->id]) }}">{{$postRight->titleh1}}</a>
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




            <div class="col-md-9">

                <h3>{{$post->head}}</h3>

            </div>

            <div class="col-md-9">
                
                <p>{!! $post->body !!}</p>

            </div>

            </div>

        <div class="container">
            <div class="headline-v2 bg-color-light"><h4>Tags</h4></div>
            <div class="list-inline tags-v2">

                @foreach($post->tags as $tag)

                    <li><a>{{ $tag->name }}</a></li>

                @endforeach


            </div>
        </div>
            
            <hr>

    </body>



@include('footer')