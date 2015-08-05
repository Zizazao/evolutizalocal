@include('header')
<body>

        <div class="container content-sm">
            <div class="row">
                <div class="col-md-9">
                    <h1>{{$event->title}}</h1>

                    <hr>
                    
                    <h3>{{$event->head}}</h3>

                    
                    <p>{!! $event->body !!}</p>
                
                </div>

                <div class="col-md-3">
                    <div class="headline-v2 bg-color-light"><h4>Últimas Noticias</h4></div>
                    <div class="list-inline tags-v2">

                        @foreach($lastPosts as $postRight)

                        <h5><a href="{{ action('guestController@showPost', [$postRight->id]) }}">{{$postRight->titleh1}}</a>
                        <small>{{str_limit($postRight->head, $limit="75", $end="...")}}</small></h5>

                        @endforeach
                    </div>
                </div>

                <div class="col-md-3">
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
    <br>
</body>



@include('footer')