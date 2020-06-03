@extends('layouts.app')

@section('content')
<div class="container"> 
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
            <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label "> Post caption </label>
                    <input id="caption" 
                            type="text"
                            class="form-control @error('') is-invalid @enderror" 
                            name="caption" value="{{ old('caption') }}" 
                            autocomplete="caption" autofocus>
                    @error('caption')
                            <strong class="danger">{{ $message }}</strong>
                    @enderror
                    
                </div>
         
                <div class="row">
                <label for="image" class="col-md-4 col-form-label "> Post Image </label>
                <input type="file" name="image" id="image" class="form-control-file">
                @error('image')
                            <strong class="danger">{{ $message }}</strong>
                @enderror
            </div>

            <div class="row pt-4">
                <button  class="btn btn-primary" >Add New Post </button>
            </div>

            </div>
            </div>

    </form>
</div>
@endsection
