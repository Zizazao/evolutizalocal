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

            <a href="{{action('indexController@index')}}"><h1>Evolutiza</a> - Últimos Eventos</h1>


            <div class="col-md-4">
                @foreach($events as $event)
                    <article>
                        <h2>{{$event->title}}</h2>
                        <p>{{$event->head}}</p>
                        <hr>
                        <p><h5>Fecha del Evento:</h5>{{$event->launch_date}}</p>
                        <hr>
                    </article>
                    <a href="{{ action('eventsController@show', [$event->id]) }}"> Leer más</a>
                     </br>
                    <a href=""> Editar evento</a>
                     </br>    
                    <a href=""> Borrar evento</a>   

                @endforeach    

            
            </div>    


        </div>

    </body>

</html>