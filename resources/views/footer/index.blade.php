<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sliders</title>

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

            <a href="{{action('guestController@index')}}"><h1>Evolutiza</a> - Últimos Footers</h1>
                
            </div>

            @if (Session::has('flash_message'))

                <div class="alert alert-success"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{Session::get('flash_message')}} 

                </div>

            @endif

            @if (Session::has('flash_message_updated'))

                <div class="alert alert-success"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{Session::get('flash_message_updated')}} 

                </div>


            @endif

             @if (Session::has('flash_message_destroyed'))

                <div class="alert alert-success"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{Session::get('flash_message_destroyed')}} 

                </div>


            @endif

            @if (Session::has('flash_message_destroyFailed'))

                <div class="alert alert-success"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{Session::get('flash_message_destroyFailed')}} 

                </div>


            @endif


            <div class="col-md-6">
                @foreach($lastFooters as $footer)

                    <h2>{{$footer->title}}</h2>

                    <p>{{$footer->img_name}}</p>

                    <p>{{ $footer->video_url}} </p>

                    <!-- rellenah! -->

                    <!--<a href="{{ action('footerController@edit', [$footer->id]) }}"> Editar footer</a>
                </br>    
                    <a href="{{ action('footerController@destroy', [$footer->id]) }}"> Borrar footer</a> -->
                    <hr>  

                @endforeach    
            
            </div>    

        </div>

    </body>

</html>