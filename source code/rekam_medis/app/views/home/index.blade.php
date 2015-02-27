 <!DOCTYPE HTML>
<html>
<head>
    <title>Rekam Medis</title>
    @include("includes.head")
</head>
<body class="metro">
    @include("includes.navbar")
    <div class="container">
    		<h3> Rekam Medis</h3>
    	<br>
    	<br>
    	<br>
    	<br>
    		<center>
    		 <div class="col-lg-2 text-align-left">
                        {{Form::open(array('action' => 'UserController@authenticate')) }}
        
            <center>
            <h2>Login</h2>
            </center>
             <div class="span3">
                <div class="input-control text" data-role="input-control">
                    <input type="text" placeholder="type email" name="email">
                    <button class="btn-clear" tabindex="-1"></button>
                </div>
                <div class="input-control password" data-role="input-control">
                    <input type="password" placeholder="type password" name="password" autofocus>
                    <button class="btn-reveal" tabindex="-1"></button>
                </div>
            </div>
                @if(Session::has('pesan_error'))
                    <p class="text-alert">{{ Session::get('pesan_error') }}</p>
                @endif
                <div class="span2">
                {{Form::submit('Login', array('class' => 'large info size2')) }}
                {{Form::close() }}
            </div>
        </div>
            </div>
        </center>
    		
       @yield("content")
    </div>
</body>
</html>