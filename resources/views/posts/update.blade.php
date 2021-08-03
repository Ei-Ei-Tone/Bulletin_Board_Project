@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
	    
    <div class="col-md-8 col-md-offset-2">
            
      <h1 class="mb-5">Update Post</h1>
      <form action="/posts/updatePost" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}">
        <div class="form-group">
          <label for="title">Title <span class="require">*</span></label>
          <input type="text"  value ="{{$post->title}}" class="form-control @error ('title') is-invalid @enderror" name="title">         
          @error('title')
             <div class="alert alert-danger mt-1">{{ $message }}</div> 
          @enderror
        </div>
      
        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="5" class="form-control @error ('description') is-invalid @enderror" name="description">{{$post->description}}</textarea>
            @error('description')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

        <div class="form-group">
          <label for="status" class="mr-5">Status</label>
          <input type="checkbox"  value ="{{$post->status}}" class="form-control toggle-class" name="status" data-id="{{$post->id}}" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="1" data-off="0"
          {{$post->status  ? "checked" : ""}}>
        </div>

        <div class="form-group col text-center">
          <button type="submit" class="btn btn-primary mr-3">
            Confirm
          </button>
          <button type="reset" class="btn btn-outline-success">
            Clear
          </button>
        </div>          
      </form>

    </div>
	</div>
</div>
@endsection
