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

                <a href="{{action('guestController@index')}}"><h1>Evolutiza</a> - {{$event->title}}</h1>
                
            </div>

            <div class="col-md-5">

                <h3>{{$event->head}}</h3>

            </div>

            <div class="col-md-12">
                
                <p>{{$event->body}}</p>

            </div>

            </div>



            
            <hr>

        <div class="container">

            <a href="{{action('guestController@index')}}">A la página principal</a>
            <br>
            <a href="{{action('guestController@index')}}">Lista de eventos</a>
            <br>
            <a href="{{action('postsController@edit', [$event->id])}}"> Editar post</a>  

        </div>
    </body>

</html>