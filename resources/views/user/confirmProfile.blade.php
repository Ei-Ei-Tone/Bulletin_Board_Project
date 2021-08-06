@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row gutters-sm justify-content-center">
      <div class="col-md-8">
        <h1 class="mb-5">Update User Confirmation</h1>
        <div class="card mb-3">
          <form class="card-body" method="POST" action="/user/addProfile" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            
            <div class="row pb-lg-5">
              <img src="{{asset('/images/'.$user->profile)}}" class="rounded-circle" width="150">
            </div>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Name</h6>
              </label>
              <input type="text"  value ="{{$user->name}}" class="border-0 col-sm-9 text-secondary" name="name" readonly> 
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Email Addess</h6>
              </label>
              <input type="text"  value ="{{$user->email}}" class="border-0 col-sm-9 text-secondary" name="email" readonly> 
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Type</h6>
              </label>
              <input type="text"  value ="{{$user->is_admin}}" class="border-0 col-sm-9 text-secondary" name="is_admin" readonly> 
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </label>
              <input type="text"  value ="{{$user->phone}}" class="border-0 col-sm-9 text-secondary" name="phone" readonly> 
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Date Of Birth</h6>
              </label>
              <input type="text"  value ="{{$user->dob}}" class="border-0 col-sm-9 text-secondary" name="date" readonly> 
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </label>
              <input type="text"  value ="{{$user->address}}" class="border-0 col-sm-9 text-secondary" name="address" readonly> 
            </div>
            <hr>
            <div class="row">
              <div class="form-group col text-center">
                <button type="submit" class="btn btn-primary mx-sm-3">
                    Update
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
</div>
@endsection