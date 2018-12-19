@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cart</div>

               <div class="row">

            <input type="hidden" name="userid" value="{!! $id = Auth::id();!!} " >                
            <div class="col-lg-8 col-md-10 mx-auto">

                @foreach($cards as $card)
                @if($card->userid==Auth::id())
                <div class="post-preview">
                    <form method="post">
                        {!! csrf_field() !!}
                        <a href="{!! route('blog.show', [
                       'id'   => $card->articleid,
                       'slug' => str_slug($card->title)
                    ]) !!}">
                       <h3 class="post-subtitle">
                        Name:    {!! $card->title !!}
                        </h3>
                        </a>
                       <h3  class="post-title">
                        Order number:
                            {!!$card->id!!}
                       </h3>
                        
                        <h3 class="post-subtitle">
                        Price:    {!! $card->price !!}
                        </h3>
                        <hr>
                    
                 </form>
                </div>
                @endif
                @endforeach
                {{ $cards->links() }}
                <!-- Pager -->
                
            </div>
        </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
