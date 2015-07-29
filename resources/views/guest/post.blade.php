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
                <div class="headline-v2 bg-color-light"><h4>Últimos eventos</h4></div>
                <div class="list-inline tags-v2">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                    </p>
                </div>
            </div>

            <div class="container col-md-3">
                <div class="headline-v2 bg-color-light"><h4>Últimas Noticias</h4></div>
                <div class="list-inline tags-v2">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                    </p>
                </div>
            </div>

            <div class="container col-md-3">
                <div class="headline-v2 bg-color-light"><h4>Últimos eventos</h4></div>
                <div class="list-inline tags-v2">
                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                    </p>
                </div>
            </div>



            <div class="col-md-9">

                <h3>{{$post->head}}</h3>

            </div>

            <div class="col-md-9">
                
                <p>{{$post->body}}</p>

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