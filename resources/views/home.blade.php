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
                @foreach($articles as $article)
                @if($article->id==Auth::id())
                @if($card->userid==Auth::id())
                
                <div class="post-preview">
                    <form method="post">
                        {!! csrf_field() !!}
                    
                       <h2  class="post-title">
                           
                            {!!$article->title!!}
                           
                        </h2>
                        <h3 class="post-subtitle">
                            {!! $card->articleid !!}
                        </h3>
                    </a>
                 </form>
                   <!-- {!! Form::submit('Add to cart',array('class'=>'btn btn-default')) !!}-->
                </div>
                @endif
                @endif
                @endforeach
                @endforeach
               
                {{ $cards->links() }}
                {{ $articles->links() }}









                <hr>
                <!-- Pager -->
                
            </div>
        </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 <!--   @component('components.who')   
                    @endcomponent-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
