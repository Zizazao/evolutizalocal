<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>

    <body>

        <div class="container">

            <div class="content">

                <h1>Evolutiza - {{$lastPost->titleh1}}</h1>
                
            </div>

            <div class="col-md-5">

                <h3>{{$lastPost->head}}</h3>

            </div>

            <div class="col-md-12">
                
                <p>{{$lastPost->body}}</p>

            </div>    


        </div>

    </body>

</html>