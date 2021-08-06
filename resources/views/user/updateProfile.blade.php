@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h1 class="mb-5">Update User</h1>
      <div class="card">
        <form class="card-body" action="/user/confirmProfile/{{$user->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row pb-lg-5">
            <img src="{{asset('/images/'.$user->profile)}}" class="rounded-circle" width="150">
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Name</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <input type="text" class="form-control @error ('name') is-invalid @enderror" value="{{$user->name}}" name="name">
              @error('name')
                <div class="alert alert-danger mt-1">{{ $message }}</div> 
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Email Address</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <input type="text"  value ="{{$user->email}}" class="form-control @error ('email') is-invalid @enderror" name="email">  
              @error('email')
              <div class="alert alert-danger mt-1">{{ $message }}</div> 
            @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Type</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <select class="custom-select form-control @error ('type') is-invalid @enderror" id="custom-select" name="is_admin" aria-label="select example">h  
                <option value="">{{$user->is_admin}}</option>
                <option value="0">Admin</option>
                <option value="1">User</option>
              </select>
            </div>

          </div>

          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Phone</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <input type="text" name="phone" class="form-control @error ('phone') is-invalid @enderror" value="{{$user->phone}}" >
              @error('Phone')
                <div class="alert alert-danger mt-1">{{ $message }}</div> 
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Date Of Birth</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <input type="date" class="form-control @error ('Date of Birth') is-invalid @enderror" value="{{$user->dob}}" name="date">
              @error('Date of Birth')
                <div class="alert alert-danger mt-1">{{ $message }}</div> 
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Address</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <textarea type="text" class="form-control @error ('Address') is-invalid @enderror" value="" name="address">{{$user->address}}</textarea>
              @error('address')
                <div class="alert alert-danger mt-1">{{ $message }}</div> 
              @enderror
            </div>
          </div>
          <div class="row mb-5">
            <label class="col-sm-3">
              <h6 class="mb-0">Profile</h6>
            </label>
            <label class="col-sm-9 text-secondary">
              <input type="file" class="form-control" value="{{$user->profile}}" id="img_file_upid" name="profile" >
            </label>
          </div>
          <div class="row mb-5">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-9 text-secondary">
              <img src="{{asset('/images/'.$user->profile)}}" class="rounded-circle" width="150" id="img_prv" name="profile">
            </div>
          </div>
          <div class="row">
            <div class="form-group col text-center">
              <button type="submit" class="btn btn-primary mx-sm-3">
                  Confirm
              </button>
              <button type="reset" class="btn btn-outline-success">
                  Clear
              </button>
            </div>
          </div>
          <div class="col text-center">
            <a href="/user/changePassword/{{$user->id}}">Change password</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection