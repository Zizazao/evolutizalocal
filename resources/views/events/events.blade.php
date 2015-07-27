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


            @if (Session::has('flash_message_event_created'))

                <div class="alert alert-success"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{Session::get('flash_message_event_created')}} 

                </div>

            @endif

            @if (Session::has('flash_message_event_destroyed'))

                <div class="alert alert-success"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{Session::get('flash_message_event_destroyed')}} 

                </div>

            @endif

            @if (Session::has('flash_message_event_updated'))

                <div class="alert alert-success"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{Session::get('flash_message_event_updated')}} 

                </div>

            @endif


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
                    <a href="{{ action('eventsController@edit', [$event->id]) }}"> Editar evento</a>
                     </br>    
                    <a href="{{ action('eventsController@destroy', [$event->id]) }}"> Borrar evento</a>   

                @endforeach    

            
            </div>    


        </div>

    </div>

    </body>

</html>