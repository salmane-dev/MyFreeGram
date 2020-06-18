@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
         <div class="col-3 p-2">
            <img src="{{ $user->profile->profileImage() }}" alt="profile pic" class="w-100 rounded-circle" >
         </div>

         <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline pb-3">
                <div class="d-flex align-items-center pb-2">
                    <h1 class="w-100"> {{$user->username}} </h1> 
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }} " ></follow-button>
                </div>
                
            @can('update', $user->profile)
                <a href="/profiles/{{$user->id}}/edit" class="btn btn-info btn-sm">Edit Profile </a>
                <a href="/p/create" class="btn btn-success btn-sm">Add new post </a>
            @endcan
             
            </div>
             
            <div class="d-flex">
                <div class="pr-4"><strong> {{ $postCount }} </strong>post</div> 
                <div class="pr-4"><Strong>{{ $followersCount }} </Strong>followers</div> 
                <div class="pr-4"><strong>{{ $followingCount }}  </strong>Following</div> 
            </div>
            <div class="pt-4 pb-1"> <strong> {{$user->profile->title }} </strong> </div>
            <div>{{$user->profile->description}} </div>
            <div class="pt-4 pb-1"><strong><a href="{{$user->profile->url}}" style="color:#000">{{$user->profile->url}}</a></strong></div>

        </div>
     </div>
    <div class="row p-2 ">
       @foreach($user->posts as $post )
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{ $post->image }} "  alt="pic1" class="w-100">
                </a>
            </div>
        @endforeach

       
    
    </div>
</div>
@endsection
