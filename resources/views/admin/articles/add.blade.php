@extends('layouts.admin')
@section('content')
	<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
		<h1>Добавить Товар</h1><br>
		<form enctype="multipart/form-data" method="post">
			{!! csrf_field() !!}
			<p>Выбор категории (ий):<br>
			<select name="categories[]" class="form-control" multiple>
            	@foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select> </p>	
			<p>Введите название товара:</p><input type="text" name="title" class="form-control" required></p>
			<p>Описание товара:<textarea name="text" class="form-control"></textarea></p>
			<p>Укажите цену товара:</p><input type="text" name="price" class="form-control" required></p>
			<!--<p><input name="picture" type="file" /></p>-->
			<button tupe="submit" class="btn btn-success">Добавить</button>
		</form>
	</main>	
@stop
