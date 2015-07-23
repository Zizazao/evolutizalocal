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

                <a href="{{action('indexController@index')}}"><h1>Evolutiza</h1></a>

                <a href="posts"><h2> Ver Posts </h2></a>

                <a href="create"><h2> Añadir un nuevo Post </h2></a>

                <a href="createevents"><h2> Añadir un nuevo Evento</h2></a>
                
            </div>


        </div>

    </body>

</html>
