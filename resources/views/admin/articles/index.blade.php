@extends('layouts.admin')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Список товаров</h1>
        <br>
        <a href="{!! route('articles.add') !!}" class="btn btn-info">Добавить товар</a>
        <br><br><br>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Наименование</th>
                <th>Цена</th>
                <th>Действия</th>
            </tr>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                     <td>{{$article->price}}</td>
                    <td><a href="{!! route('articles.edit', ['id' => $article->id]) !!}">Редактировать</a> ||
                        <a href="javascript:;" class="delete" rel="{{$article->id}}">Удалить</a></td>
                </tr>
            @endforeach
        </table>
    </main>
@stop
@section('js')
    <script>
        $(function(){
            $(".delete").on('click', function () {
                if(confirm("Вы действительно хотите удалить эту запись ?")) {
                    let id = $(this).attr("rel");
                    $.ajax({
                        type: "DELETE",
                        url: "{!! route('articles.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:id},
                        complete: function() {
                            alert("Товар удален");
                            location.reload();
                        }
                    });
                }else{
                    alertify.error("Дествие отменено пользователем");
                }
            });
        });
    </script>
@stop