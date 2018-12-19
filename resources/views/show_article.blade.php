@extends('layouts.appp')
@section('content')
    <!-- Page Header -->
<form method="post">
    <header class="masthead">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">

                        <h1 name="title" >{!! $article->title !!}
                         </h1>
                        <h2 class="subheading">{!! $article->text !!}
                            </h2>
                        <span  class="meta"> Цена
                        {!!$article->price!!}
                 </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <input type="hidden" name="articleid" value="{!!$article->id!!}">
    <input type="hidden" name="title" value="{!!$article->title!!}">
    <input type="hidden" name="price" value="{!!$article->price!!}">
    <input type="hidden" name="userid" value="{!! $id = Auth::id();!!} ">
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! $article->text !!}
                   
                </div>

            </div>
        </div>
        
            {!! csrf_field() !!}
        
       
        
        @auth
        <button type="submit"  class="btn btn-success">Add to cart</button>
       @endauth
            
        
       
       
       

        
    </article>
 </form>
@stop