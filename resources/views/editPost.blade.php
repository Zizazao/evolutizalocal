@extends('app')

@section('content')

	<a href="{{action('indexController@index')}}"><h1>Evolutiza</a> - Edit - {!! $post->titleh1 !!} </h1>
	<div class="col-md-10">

                {!! Form::model($post, ['method' => 'PATCH', "action" => ['indexController@update', $post->id]]) !!}

                @include('errors.list')
                    <div class='form-group'>

                        {!! Form::label('titleh1', 'Título') !!}

                        {!! Form::text('titleh1', null, ['class' => 'form-control']) !!}
                    
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

                    <div class="form-group">

                        {!! Form::label('tag', 'Tags (presiona Ctrl + click para seleccionar más de uno):') !!}

                        {!! Form::select('tags[]', $tags, $post->getTagListAttribute(), ['class' => 'form-control', 'multiple']) !!}


                    </div>   

                    <div class='form-group'>

                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}

                {!! Form::close() !!}
                
            
            </div>    


        </div>

@stop