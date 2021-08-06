@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
	        
      <h1 class="mb-5">Create User Confirmation</h1>
      <form class="card-body" method="POST" action="/user/confirm" enctype="multipart/form-data">
        {{ @csrf_field() }}
        <input type="hidden" name="created_user_id" value="{{Auth::user()->id}}"/>
        <div class="row">
          <input type="text" style="display: none" name="profile" value="{{$profile}}">
          <img class="img-thumbnail col-sm-12 mb-5" id="img_prv" style="max-width:200px;max-height:200px;" src="{{asset('/images/'.$profile)}}">    
        </div>  
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Name</h6>
          </label>
          <input type="text"  value ="{{$name}}" class="border-0 col-sm-9 text-secondary" name="name" readonly>         
        </div>
        <hr>
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Email</h6>
          </label>
          <input type="email"  value ="{{$email}}" class="border-0 col-sm-9 text-secondary" name="email" readonly>         
        </div>
        <hr>
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Password</h6>
          </label>
          <input type="password"  value ="{{$password}}" class="border-0 col-sm-9 text-secondary" name="password" readonly>         
        </div>
        <hr>
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Type</h6>
          </label>
          <input type="text"  value ="{{$is_admin}}" class="border-0 col-sm-9 text-secondary" name="is_admin" readonly>
        </div>
        <hr>
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Phone</h6>
          </label>
          <input type="phone"  value ="{{$phone}}" class="border-0 col-sm-9 text-secondary" name="phone" readonly>         
        </div>
        <hr>
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Date Of Birth</h6>
          </label>
          <input type="text"  value ="{{$date}}" class="border-0 col-sm-9 text-secondary" name="date" readonly>         
        </div>
        <hr>
        <div class="row">
          <label class="col-sm-3">
          <h6 class="mb-0">Address</h6>
          </label>
          <input type="address" class="border-0 col-sm-9" value="{{$address}}" name="address" readonly>      
        </div>
        <div class="row mt-5">
          <div class="form-group col text-center">
          <button type="submit" class="btn btn-primary mx-sm-3">
            Create
          </button>
          <a href="{{ URL::previous() }}" class="btn btn-outline-success" role="button">
            Cancel
          </a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection