@extends('posts.app')

@section('content')

	<a href="{{action('guestController@index')}}"><h1>Evolutiza</a> - Edit - {!! $post->titleh1 !!} </h1>
	<div class="col-md-10">

                {!! Form::model($post, ['method' => 'PATCH', "action" => ['postsController@update', $post->id]]) !!}

                @include('errors.list')
                    <div class='form-group'>

                        {!! Form::label('titleh1', 'Título') !!}

                        {!! Form::text('titleh1', null, ['class' => 'form-control']) !!}
                    
                    </div>
                    

                    <div class='form-group'>

                        {!! Form::label('pic_url', 'Imagen') !!}

                        {!! Form::file('pic_url', null, ['class' => 'form-control']) !!}

                    </div>

                    <div class="form-group">
                        
                        {!! Form::label('img_name', 'Nombre de la imagen') !!}

                        {!! Form::text('img_name', null, ['class' => 'form-control']) !!}

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

                        {!! Form::select('tags[]', $tags, $post->getTagListAttribute(), ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}


                    </div>   

                    <div class='form-group'>

                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}

                {!! Form::close() !!}
                
            
            </div>    


        </div>
    <!-- ToDo = make a way to store new tags from json -->

    <script type="text/javascript">
        $('#tag_list').select2();
    </script>

@stop