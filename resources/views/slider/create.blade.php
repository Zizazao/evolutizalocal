<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Evolutiza - Creating Slider</title>

        <!-- jQuery library -->
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <!-- Select2 plugin for form select tags -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
        <script rel="stylesheet" src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- ckeditor Plugin -->
        <script src="//cdn.ckeditor.com/4.5.1/full/ckeditor.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



    </head>

    <body>

        <div class="container">

            <div class="content">

            <a href="{{action('guestController@index')}}"><h1>Evolutiza</a> - Posting</h1>
                
            </div>

        <hr>


            <div class="col-md-10">

                {!! Form::open(['action' => "sliderController@store"]) !!}

                @include('errors.list')
                
                    <div class='form-group'>

                        {!! Form::label('title', 'Título') !!}

                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    
                    </div>
                    

                    <div class='form-group'>

                        {!! Form::label('subtitle', 'Subtitulo') !!}

                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}

                    </div>


                    <div class="form-group">
                        {!! Form::label('img_name', 'Nombre de la imagen') !!}

                        {!! Form::text('img_name', null, ['class' => 'form-control']) !!}

                    </div>    
                    

                    <div class='form-group'>

                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}

                    </div>    

                {!! Form::close() !!}
                
            
            </div>    


        </div>

    </body>

    <!-- ToDo = make a way to store new tags from json GULP/SCSS/-->

    <script type="text/javascript">
        $('#tag_list').select2();
    </script>

    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'body' );
    </script>

</html>