<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Evolutiza - Posting Events</title>

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

            <a href="{{action('indexController@index')}}"><h1>Evolutiza</a> - Posting Events</h1>
                
            </div>

        <hr>


            <div class="col-md-10">

                {!! Form::open(['url' => "events/store"]) !!}

                @include('errors.list')
                
                    <div class='form-group'>

                        {!! Form::label('title', 'Título') !!}

                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    
                    </div>
                    

                    <div class='form-group'>

                        {!! Form::label('pic_url', 'Url de la imagen') !!}

                        {!! Form::text('pic_url', null, ['class' => 'form-control']) !!}

                    </div>    
                    

                    <div class='form-group'>

                        {!! Form::label('head', 'Encabezado') !!}

                        {!! Form::textarea('head', null, ['class' => 'form-control']) !!}

                    </div>

                    <div class='form-group'>

                        {!! Form::label('body', 'Cuerpo') !!}

                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                    </div>  

                    <div class='form-group'>

                        {!! Form::label('date', 'Fecha del Evento:') !!}

                        {!! Form::input('date', 'launch_date', null, ['class' => 'form-control']) !!}

                    </div>

                    <div class='form-group'>

                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}

                {!! Form::close() !!}
                
            
                     </div>   
            </div>

    </body>

</html>