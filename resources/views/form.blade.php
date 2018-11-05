<!doctype html>
<html lang='en'>
<head>
	<meta charset="viewport"
		content="width-device-width",user-scalable-no,initial-scale-1.0,maximum-scale-1.0,minimum-scale-1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Laravel form</title>		
</head>
<body>
	<h1>Send mail</h1>
	{!! Form::open(['url' => 'send-mail']) !!}
    	{{Form::text('name')}}
    	{{Form::text('email')}}
    	{{Form::textarea('msg')}}
    	{{Form::submit('send')}}
	{!! Form::close() !!}
</body>
</html>