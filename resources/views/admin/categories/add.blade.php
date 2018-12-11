@extends('layouts.admin')
@section('content')
	<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
		<h1>Добавить категорию</h1><br>
		<form method="post">
			{!! csrf_field() !!}
		<p>Введите наименование категории:</p><br><input type="text" name="title" class="form-control" required></p>
		<p>Текст категории:<br><textarea name="description" class="form-control"></textarea></p>
		<button tupe="submit" class="btn btn-success">Добавить</button>
		</form>
	</main>	
@stop