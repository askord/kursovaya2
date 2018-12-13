@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
	
    <body>
	<div id="text" ></div>
		{!! Form::open(['url' => 'send-mail']) !!}
			<p align=center>{{ Form::text('name', '', ['class'=>'textbox', 'placeholder'=>'Your name']) }}</p>
			<p align=center>{{ Form::email('email', '', ['class'=>'textbox', 'placeholder'=>'Your e-mail' ,'pattern' =>'[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$']) }}</p>
			<p align=center>{{ Form::textarea('msg', '', ['class'=>'textbox', 'placeholder'=>'Your message']) }}</p>
			<p align=center>{{ Form::submit('Send', ['class'=>'button']) }}
		{!! Form::close() !!}</p>>
		
    </body>
</html>
@endsection