@extends('layouts.app')
@section('content')
<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-6">

      <h1 class="mb-5">Create User</h1>
  
      <form action="/user/store" method="POST" enctype="multipart/form-data">
        @if(session('status'))
          <p class="alert alert-success">{{ session('status') }}</p>
        @endif
        {{ @csrf_field() }}
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Name">
          @error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
          @error('email')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>
                                
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter Password">
          @error('password')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" class="form-control pass_show" name="password_confirmation" placeholder="Enter Confirm Password">
          @error('password_confirmation')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <select class="custom-select" id="custom-select" aria-label="select example" name="type">
            <option value="">Type</option>
            <option value="0">Admin</option>
            <option value="1">User</option>
          </select>
          @error('type')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>  

        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="phone" class="form-control" name="phone" placeholder="Enter Phone">
          @error('phone')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3"> 
          <label for="date" class="form-label">Date Of Birth</label>
          <input class="form-control col-md-12" name="date"  type="date" placeholder="Enter Date Of Birth"/>
          @error('date')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>  

        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <textarea type="address" class="form-control" name="address" placeholder="Enter Address"></textarea>
          @error('address')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="profile" class="form-label">Profile</label>
          <input class="form-control" name="profile" type="file" id="img_file_upid"/>
          @error('image')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
          @enderror
        </div>
        <img class="img-thumbnail" id="img_prv" style="max-width:150px;max-height:150px;" src="{!!asset('/images/user.jpg')!!}">
          
        <div class="form-group col text-center">
          <button type="submit" class="btn btn-primary mx-sm-3">
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