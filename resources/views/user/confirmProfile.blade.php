@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row gutters-sm justify-content-center">
      <div class="col-md-8">
        <h1 class="mb-5">Update User Confirmation</h1>
        <div class="card mb-3">
          <form class="card-body" method="POST" action="#">
            <div class="row pb-lg-5">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
            </div>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Name</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                Aung Aung
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Email Addess</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                aungaung@gmail.com
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Type</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                User
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                97894655
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Date Of Birth</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                12/12/2001
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                Hledan, Yangon
              </label>
            </div>
            <hr>
            <div class="row">
              <div class="form-group col text-center">
                <button type="submit" class="btn btn-primary mx-sm-3">
                    Update
                </button>
                <button type="button" class="btn btn-outline-success">
                    Cancel
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>      
</div>
@endsection