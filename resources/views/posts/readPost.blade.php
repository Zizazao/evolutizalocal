<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel</title>

        <!-- jQuery library -->
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>

    <body>

        <div class="container">

            <div class="content">

                <a href="{{action('indexController@index')}}"><h1>Evolutiza</a> - {{$lastPost->titleh1}}</h1>
                
            </div>

            <div class="col-md-5">

                <h3>{{$lastPost->head}}</h3>

            </div>

            <div class="col-md-12">
                
                <p>{{$lastPost->body}}</p>

            </div>

            </div>

            <div class="container">
                <h3>Tags:</h3>

                @foreach($lastPost->tags as $tag)

                    <li> {{ $tag->name }} </li>

                @endforeach

            </div>
            
            <hr>

        <div class="container">

            <a href="{{action('indexController@index')}}">A la página principal</a>
            <br>
            <a href="{{action('indexController@showAll')}}">Lista de posts</a>
            <br>
            <a href="{{action('indexController@edit', [$lastPost->id])}}"> Editar post</a>  

        </div>
    </body>

</html>