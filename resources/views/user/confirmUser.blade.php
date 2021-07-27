@extends('layouts.app')
@section('content')
<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-6">

      <h1 class="mb-5">Create User Confirmation</h1>
  
      <form action="/" method="POST">

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Required Name" required>
          <div class="invalid-feedback">
            Please enter name.
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
          <div class="invalid-feedback">
            Please enter email address.
          </div>
        </div>
                                
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Required Password" required>
          <div class="invalid-feedback">
            Please enter password.
          </div>
        </div>

        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Required Confirm Password" required>
          <div class="invalid-feedback">
            Please enter confirm password.
          </div>
        </div>

        <div class="mb-3">
          <select class="custom-select" id="custom-select" required aria-label="select example">
            <option value="">Type</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <div class="invalid-feedback">Example invalid select feedback</div>
        </div>  

        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="phone" class="form-control" id="phone" placeholder="Required Phone" required>
          <div class="invalid-feedback">
            Please enter phone.
          </div>
        </div>

        <div class="mb-3"> 
          <label for="date" class="form-label">Date Of Birth</label>
          <input type="date" id="date" class="from-control col-md-12" placeholder="Required Date Of Birth" required> 
          <div class="invalid-feedback">
            Please enter date of birth.
          </div>
        </div>  

        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="address" class="form-control" id="address" placeholder="Required Address" required>
          <div class="invalid-feedback">
            Please enter address.
          </div>
        </div>     

        <div class="mb-3">
          <label for="profile" class="form-label">Profile</label>
          <input class="form-control form-control"  id="profile" type="file" />
          <img src="" alt="" style="width:100%">
        </div>
          
        <div class="form-group col text-center">
          <button type="submit" class="btn btn-primary mx-sm-3">
              Create
          </button>
          <button type="button" class="btn btn-outline-success">
              Cancel
          </button>
      </div>
         
      </form>
    </div>
  </div>
</div>
@endsection