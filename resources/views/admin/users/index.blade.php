@extends('layouts.admin')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Список пользователей</h1>
        <br>

        <br><br><br>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Никнейм</th>
                <th>E-mail</th>
                <th>Дата регистрации</th>

            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{ $user->created_at->format('d-m-Y H:i') }}</td>

                </tr>
            @endforeach
        </table>
    </main>
@stop