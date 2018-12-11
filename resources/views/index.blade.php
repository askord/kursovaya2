@extends('layouts.appp')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/blog/img/1513143552_bambuk.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>First-class furniture store</h1>
                        <span class="subheading">The best and high-quality furniture we have</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<input type="text" class="form-controller" id="search" name="search"></input>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($articles as $article)
                <div class="post-preview">
                    <a href="{!! route('blog.show', [
                       'id'   => $article->id,
                       'slug' => str_slug($article->title)
                    ]) !!}">
                        <h2 class="post-title">
                           {!! $article->title !!}
                        </h2>
                        <h3 class="post-subtitle">
                            {!! $article->text !!}
                        </h3>
                    </a>
                    <p class="post-meta">Цена
                        <a href="#">{{$article->price}}</a>
                        <br>
                        дата и время добавления товара {!! $article->created_at->format('H:i - d/m/Y') !!}</p>
                </div>
                @endforeach
				 {{ $articles->links() }}



                <hr>
                <!-- Pager -->
                
            </div>
        </div>
    </div>

@stop