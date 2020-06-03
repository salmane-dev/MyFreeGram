@extends('layouts.app')

@section('content')
<div class="container"> 

@foreach($posts as $post)

<div class="row"> 
    <div class="col-6 offset-3">
        <a href="/profiles/{{ $post->user->id }}">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </a>
    </div>
</div>

<div class="row pt-1 pb-5"> 

    <div class="col-6 offset-3">
        <div>
             

        <p class="pt-3"> 
            <a href="/profiles/{{$post->user->id}}" class="pr-2 text-dark">
                <span><b> {{$post->user->username}} </b></span>
            </a>
            {{$post->caption}} 
        </p>
        <hr>
        </div>
    </div> 
</div> 

@endforeach

<div class="row ">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>

</div>
@endsection
 