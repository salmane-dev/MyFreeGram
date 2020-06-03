@extends('layouts.app')

@section('content')
<div class="container">
     
<form action="/profiles/{{ $user->id }}" enctype="multipart/form-data"  method="post">
        @csrf
        @method('PATCH')
            <div class="row">
            <div class="col-8 offset-2"> 
                <div class="row">
                    <h1>Edit Profile </h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label "> title </label>
                    <input id="title" 
                            type="text"
                            class="form-control @error('') is-invalid @enderror" 
                            name="title" value="{{ old('title') ?? $user->profile->title }}" 
                            autocomplete="title" autofocus>
                    @error('title')
                            <strong class="danger">{{ $message }}</strong>
                    @enderror
                    
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label "> Description </label>
                    <input id="description" 
                            type="text"
                            class="form-control @error('') is-invalid @enderror" 
                            name="description" value="{{ old('description') ?? $user->profile->description  }}" 
                            autocomplete="description" autofocus>
                    @error('description')
                            <strong class="danger">{{ $message }}</strong>
                    @enderror
                    
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label "> url </label>
                    <input id="url" 
                            type="text"
                            class="form-control @error('') is-invalid @enderror" 
                            name="url" value="{{ old('caption') ?? $user->profile->url  }}" 
                            autocomplete="url" autofocus>
                    @error('url')
                            <strong class="danger">{{ $message }}</strong>
                    @enderror
                    
                </div>
         
                <div class="row">
                <label for="image" class="col-md-4 col-form-label "> Profile Image </label>
                <input type="file" name="image" id="image" class="form-control-file">
                @error('image')
                            <strong class="danger">{{ $message }}</strong>
                @enderror
            </div>

            <div class="row pt-4">
                <button  class="btn btn-primary" >Save Profile</button>
            </div>

            </div>
            </div>

    </form>

</div>
@endsection
