@extends('layouts.app')

@section('content')
<div class="container"> 
<div class="row"> 
    <div class="col-8">
        <img src="/storage/{{$post->image}}" alt="" class="w-100">
    </div>
    <div class="col-4">
        <div>
            <div class="d-flex  align-items-baseline">
                <div class="pr-2">
                    <a href="/profiles/{{$post->user->id}}">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="profile" class="rounded-circle w-100" style="max-width:40px;">
                    </a>
                </div>

                <div class="p-2">
                    <a href="/profiles/{{$post->user->id}}" class="pr-2 text-dark">
                        <h5><b> {{$post->user->username}} </b></h5>
                    </a>
               </div>

                <div class="p-2">
                    <a href="#" class="p-2 "> Follow</a> 
                </div>
                
            </div>

            <hr>

        <p class="pt-3"> 
            <a href="/profiles/{{$post->user->id}}" class="pr-2 text-dark">
                <span><b> {{$post->user->username}} </b></span>
            </a>
            {{$post->caption}} 
        </p>
        
        </div>
    </div>  
</div>
</div>
@endsection
 