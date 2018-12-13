@extends('layouts.appp')
@section('content')
    <!-- Page Header -->

    <header class="masthead">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{!! $article->title !!}</h1>
                        <h2 class="subheading">{!! $article->text !!}</h2>
                        <span class="meta"> Цена
                <a href="#">{{$article->price}}</a>
                 </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! $article->text !!}
                </div>

            </div>
        </div>

        
    </article>

@stop