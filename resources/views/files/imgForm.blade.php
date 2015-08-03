@include('header')

    <body>

        <div class="container">

            <div class="content">

            	<a href="{{action('guestController@index')}}"><h1>Evolutiza</a> - Store Image</h1>
                
            </div>

        <hr>


            <div class="col-md-10">

                {!! Form::open(['url' => "storeimg", 'files' => 'true']) !!}

                @include('errors.list')

                    <div class='form-group'>

                        {!! Form::label('img_path', 'Imagen') !!}

                        {!! Form::file('img_path', null, ['class' => 'form-control']) !!}

                    </div>

                    
                    <div class='form-group'>

                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}

                    </div>    

                {!! Form::close() !!}
                
            
            </div>    


        </div>

    </body>




@include('footer')