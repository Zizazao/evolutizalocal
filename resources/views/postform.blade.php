<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Evolutiza - Posting</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>

    <body>

        <div class="container">

            <div class="content">

                <h1>Evolutiza - Posting</h1>
                
            </div>

        <hr>


            <div class="col-md-10">

                {!! Form::open() !!}
                    <div class='form-group'>

                        {!! Form::label('titleh1', 'Título') !!}

                        {!! Form::text('titleh1', null, ['class' => 'form-control']) !!}
                    
                    </div>
                    

                    <div class='form-group'>

                        {!! Form::label('pic_url', 'Url de la imagen') !!}

                        {!! Form::text('pic_url', null, ['class' => 'form-control']) !!}

                    </div>    
                    
                    <div class='form-group'>

                        {!! Form::label('tags', 'Tags') !!}

                        {!! Form::text('tags', null, ['class' => 'form-control']) !!}


                    </div>

                    <div class='form-group'>

                        {!! Form::label('body', 'Cuerpo') !!}

                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                    </div>

                    <div class='form-group'>

                        {!! Form::label('head', 'Encabezado') !!}

                        {!! Form::textarea('head', null, ['class' => 'form-control']) !!}

                    </div>

                    <div class='form-group'>

                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}

                {!! Form::close() !!}
                
            
            </div>    


        </div>

    </body>

</html>