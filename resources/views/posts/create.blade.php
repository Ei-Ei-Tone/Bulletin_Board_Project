@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
  	    
    <div class="col-md-8 col-md-offset-2">         
      <h1 class="mb-5">Create post</h1>
      
      <form action="{{url('/posts/store')}}" method="POST" enctype="multipart/form-data">
     {{ @csrf_field() }}
      <div class="form-group">
        <label for="title">Title <span class="require">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"/>
        @error('title')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="description">Description</label>
        <textarea rows="5" class="form-control  @error('description') is-invalid @enderror" id="description" name="description"></textarea>
        @error('description')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group col text-center">
        <button type="submit" class="btn btn-primary mx-sm-3">
          Confirm
        </button>
        <button type="button" class="btn btn-outline-success reset">
          Clear
        </button>
      </div>
      
      </form>
    </div>
		
	</div>
</div>
@endsection
