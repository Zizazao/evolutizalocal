<html>
  <head>
  <meta charset="utf-8">
    <title>Congresos y jornadas | Free Powerful Theme by HtmlCoder</title>
    <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template"> <!--descripción de la web-->
    <meta name="author" content="htmlcoder.me"> 

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{asset('fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{asset('css/animations.css')}}" rel="stylesheet">

    <!-- Worthy core CSS file -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Custom css --> 
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  </head>
  <body>

    <h1>Creating your Account</h1>
    				<div class="form-group">
    					<div class="col-md-6">
                   @foreach($errors->all() as $error)
                      <p class="alert alert-danger">{!!$error!!}</p>
                    @endforeach
                  
                  {!! Form::open(array('url' => 'auth/register')) !!}
    						
                  {!! Form::label('email', 'E-Mail:') !!}
                  {!! Form::email('email', null, array('class'=>'form-control',
                  'placeholder'=>'Example@gmail.com')) !!}
                  
                  {!! Form::label('name', 'User Name:') !!}
                  
                  {!! Form::text('name', null, array('class'=>'form-control',
                  'placeholder'=>'Coolest Name Ever...')) !!}   
                  
                  {!! Form::label('password', 'Password:') !!}
                    
                  {!! Form::password('password', array('class'=>'form-control',
                  'placeholder'=>'Something You Will Remember :)')) !!}
                    
                  {!! Form::label('password_confirmation', 'Please confirm your password:') !!}
                  
                  {!! Form::password('password_confirmation', array('class'=>'form-control',
                  'placeholder'=>'You are almost done!')) !!}

                  {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                  {!! Form::reset('Reset', array('class'=>'btn btn-primary')) !!}
    							
    						{!! Form::close() !!}
    					</div>	
    				</div>	
    			</div>
    		</div>

  </body>
</html>