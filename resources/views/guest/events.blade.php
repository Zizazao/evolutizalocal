@include('header')
<body>

        <div class="container">

            <div class="content">

                <div class="headline col-md-12"><h1>{{$event->title}}</h1></div>
                
            </div>

            <div class="col-md-12">

                <h3>{{$event->head}}</h3>

            </div>

            <div class="col-md-12">
                
                <p>{{$event->body}}</p>

            </div>

            </div>




        <div class="container">
            <hr>

            <br>
        </div>
    </body>



@include('footer')