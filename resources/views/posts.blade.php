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

                <h1>Evolutiza - Últimos Posts</h1>
                
            </div>



            <div class="col-md-4">
                @foreach($lastPosts as $post)

                    <h2>{{$post->titleh1}}</h2>

                    <p>{{$post->head}}</p>

                    <a href="{{ action('indexController@show', [$post->id]) }}"> Leer más</a>

                @endforeach    

            
            </div>    


        </div>

    </body>

</html>