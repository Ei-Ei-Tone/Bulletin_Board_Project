@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h1 class="mb-5">Update User</h1>
      <div class="card">
        <form class="card-body" action="/confirmProfile">
          <div class="row pb-lg-5">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Name</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <input type="text" class="form-control" value="Aung Aung" required>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Email Address</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <input type="email" class="form-control" value="aungaung@gmail.com" required>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Type</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <select class="custom-select form-control" id="custom-select" required aria-label="select example" required>
                <option value="">Choose Type</option>
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
              <input type="text" class="form-control" value="97894655">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Date Of Birth</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <input type="date" class="form-control" value="12/12/2001">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3">
              <h6 class="mb-0">Address</h6>
            </label>
            <div class="col-sm-9 text-secondary">
              <textarea type="text" class="form-control" value="Hledan, Yangon" required>Hledan, Yangon</textarea>
            </div>
          </div>
          <div class="row mb-5">
            <label class="col-sm-3">
              <h6 class="mb-0">Profile</h6>
            </label>
            <label class="col-sm-9 text-secondary">
              <input type="file" class="form-control" value="" required>
            </label>
          </div>
          <div class="row mb-5">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-9 text-secondary">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
            </div>
          </div>
          <div class="row">
            <div class="form-group col text-center">
              <button type="submit" class="btn btn-primary mx-sm-3">
                  Confirm
              </button>
              <button type="button" class="btn btn-outline-success">
                  Clear
              </button>
            </div>
          </div>
          <div class="col text-center">
            <a href="/changePassword">Change password</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection