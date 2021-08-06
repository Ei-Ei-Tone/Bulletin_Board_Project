@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Create User') }}</div>
              <div class="card-body">
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                  @if(session('status'))
                    <p class="alert alert-success">{{ session('status') }}</p>
                  @endif
                  {{ @csrf_field() }}
          
                  <input type="hidden" name="id" value="" />
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error ('name') is_invalid @enderror" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                    @error('name')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>
          
                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" value="{{ old('email') }}" autocomplete="email">
                    @error('email')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>
                                          
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" autocomplete="new-password">
                    @error('password')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>
          
                  <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" placeholder="Enter Confirm Password" name="password_confirmation" autocomplete="new-password">
                    @error('password_confirmation')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>
          
                  <div class="mb-3">
                    <select class="custom-select @error ('is_admin') is-invalid @enderror" id="custom-select" aria-label="select example" name="is_admin" value={{ old('is_admin')}} autocomplete="is_admin">
                      <option value="">Type</option>
                      <option value="0">Admin</option>
                      <option value="1">User</option>
                    </select>
                    @error('is_admin')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>  
          
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone" name="phone" value="{{ old('phone') }}" autocomplete="phone">
                    @error('phone')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>
          
                  <div class="mb-3"> 
                    <label for="date" class="form-label">Date Of Birth</label>
                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" placeholder="Enter Date Of Birth" name="date" value="{{ old('date') }}" autocomplete="date">
                    @error('date')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>  
          
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea type="text" class="form-control @error ('address') is-invalid @enderror" name="address" placeholder="Enter Address" id="address" value="{{ old('address') }}" autocomplete="address"></textarea>
                    @error('address')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>
          
                  <div class="mb-3">
                    <label for="profile" class="form-label">Profile</label>
                    <input class="form-control @error ('profile') is-invalid @enderror" name="profile" type="file" id="img_file_upid" value="{{ old('profile') }}" autocomplete="profile"/>
                    @error('profile')
                      <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>
                  <img class="img-thumbnail" id="img_prv" style="max-width:150px;max-height:150px;" src="{!!asset('/images/user.jpg')!!}">
                  <div class="form-group col text-center">
                    <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Register') }}
                          </button>
                      </div>
                  </div>
                   
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

