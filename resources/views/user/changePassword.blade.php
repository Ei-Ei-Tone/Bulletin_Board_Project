@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-4">
      <h1 class="mb-5">Change Password</h1>
      <label>Current Password</label>
      <div class="form-group pass_show"> 
        <input type="password" value="" class="form-control" placeholder="Current Password" required> 
        </div> 
        <label>New Password</label>
        <div class="form-group pass_show"> 
          <input type="password" value="" class="form-control" placeholder="New Password" required> 
        </div> 
        <label>Confirm Password</label>
        <div class="form-group pass_show"> 
            <input type="password" value="" class="form-control" placeholder="Confirm Password" required> 
        </div> 	
        <div class="row">
          <div class="form-group col text-center">
            <button type="submit" class="btn btn-primary mx-sm-3">
                Change
            </button>
            <button type="button" class="btn btn-outline-success">
                Clear
            </button>
          </div>
        </div>              
		</div>  
	</div>
</div>
@endsection