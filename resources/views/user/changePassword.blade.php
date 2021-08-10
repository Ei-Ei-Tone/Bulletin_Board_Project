@extends('layouts.app')
@section('content')
<div class="container">

	<form class="row justify-content-center" action="/user/addPassword" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
		<div class="col-sm-4">
      <h1 class="mb-5">Change Password</h1>
      <label>Current Password</label>
      <div class="form-group">
        @if(session('change_password'))
        <p class="alert alert-danger">{{ session('change_password') }}</p>
        @endif
      </div>
      <div class="form-group pass_show"> 
        <input type="password" value="" class="form-control @error ('current_password') is-invalid @enderror" placeholder="Current Password" name="current_password"> 
        @error('current_password')
        <div class="alert alert-danger mt-1">{{ $message }}</div> 
        @enderror
      </div> 
        <label>New Password</label>
        <div class="form-group pass_show"> 
          <input type="password" value="" class="form-control @error ('new_password') is-invalid @enderror" placeholder="New Password" name="new_password"> 
          @error('new_password')
            <div class="alert alert-danger mt-1">{{ $message }}</div> 
          @enderror
        </div> 
        <label>Confirm Password</label>
        <div class="form-group pass_show"> 
            <input type="password" value="" class="form-control @error ('confirm_password') is-invalid @enderror" placeholder="Confirm Password" name="confirm_password"> 
            @error('confirm_password')
            <div class="alert alert-danger mt-1">{{ $message }}</div> 
            @enderror
        </div> 	
        <div class="row">
          <div class="form-group col text-center">
            <button type="submit" class="btn btn-primary mx-sm-3">
                Change
            </button>
            <button type="reset" class="btn btn-outline-success">
                Clear
            </button>
          </div>
        </div>              
		</div>  
	</form>
</div>
@endsection