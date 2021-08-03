@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
	        
      <h1 class="mb-5">Create Post Confirmation</h1>
      <form class="card-body" method="POST" action="/posts/confirm">
        {{ @csrf_field() }}
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Title</h6>
          </label>
          <input type="text"  value ="{{$postTitle}}" class="border-0 col-sm-9 text-secondary" name="title" readonly>         
        </div>
        <hr>
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Description</h6>
          </label>
          <input type="text"  value ="{{$postDescription}}" class="border-0 col-sm-9 text-secondary" name="description" readonly> 
        </div>
        <hr>
        <div class="row">
          <div class="form-group col text-center">
          <button type="submit" class="btn btn-primary mx-sm-3">
            Create
          </button>
          <a href="{{ URL::previous() }}" class="btn btn-outline-success" role="button">Cancel</a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection