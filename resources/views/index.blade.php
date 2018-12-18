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
    </header>    {!! Form::open(array('rout' => 'queries.search', 'class'=>'form navbar-form navbar-right searchform')) !!}
            {!! Form::text('search', null,array('class'=>'form-control','placeholder'=>'search by product name')) !!}
            {!! Form::submit('Search',array('class'=>'btn btn-default')) !!}
         {!! Form::close() !!}
    <!-- Main Content -->
    <div class="container">
        <div class="row">
                             
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($articles as $article)
                <div class="post-preview">
                    <form method="post">
                        {!! csrf_field() !!}
                    <a href="{!! route('blog.show', [
                       'id'   => $article->id,
                       'slug' => str_slug($article->title)
                    ]) !!}">
                       <h2 name="title" class="post-title">
                           
                           {!! $article->title !!}
                           
                        </h2>
                        <h3 class="post-subtitle">
                            {!! $article->text !!}
                        </h3>
                    </a>
                    <p name="price" class="post-meta">Цена
                        <a href="#">{{$article->price}}</a>
                    </p> 
                    @auth
                     <button type="submit" class="btn btn-success">Add to Cart</button>
                    @endauth
                 </form>
                   <!-- {!! Form::submit('Add to cart',array('class'=>'btn btn-default')) !!}-->
                </div>
                @endforeach
                
                 {{ $articles->links() }}



                <hr>
                <!-- Pager -->
                
            </div>
        </div>
    </div>

@stop