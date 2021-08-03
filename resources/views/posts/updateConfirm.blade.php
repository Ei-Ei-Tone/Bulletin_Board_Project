@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
	        
      <h1 class="mb-5">Update Post Confirmation</h1>
      <form class="card-body" method="POST" action="/posts/updateConfirm">
        {{ @csrf_field() }}
        <input type="hidden" name="id" value="{{$postId}}">
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
          <label class="col-sm-3">
          <h6 class="mb-0">Status</h6>
          </label>
          <input type="checkbox"  value ="{{$postStatus}}" class="form-control toggle-class" name="status" data-id="{{$postId}}" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="1" data-off="0"
          {{$postStatus  ? "checked" : ""}}>
        </div>
        <hr>
        <div class="row">
          <div class="form-group col text-center">
          <button type="submit" class="btn btn-primary mx-sm-3">
            Update
          </button>
          <a href="{{ URL::previous() }}" class="btn btn-outline-success" role="button">Cancel</a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection
