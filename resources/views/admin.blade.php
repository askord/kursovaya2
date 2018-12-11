@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')   
                    @endcomponent
                    <a href="{{url('admin/panel')}}">В админ панель</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
