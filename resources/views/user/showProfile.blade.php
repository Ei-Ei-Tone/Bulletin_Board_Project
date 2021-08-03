@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row gutters-sm justify-content-center">
      <div class="col-md-8">
        <h1 class="mb-5">User Profile</h1>
        <div class="card mb-3">
          <div class="card-body">
            @if(session('updated'))
            <p class="alert alert-success">{{ session('updated') }}</p>
            @endif
            <div class="row pb-lg-5">
              <img src="{{asset('/images/'.$user->profile)}}" alt="Admin" class="rounded-circle" width="150">
            </div>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Name</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                {{$user->name}}
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Email Addess</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                {{$user->email}}
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Type</h6>
              </label>
              <div class="col-sm-9 text-secondary">
               {{$user->type}}
              </div>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                {{$user->phone}}
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Date Of Birth</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                {{$user->dob}}
              </label>
            </div>
            <hr>
            <div class="row">
              <label class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </label>
              <label class="col-sm-9 text-secondary">
                {{$user->address}}
              </label>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <a class="btn btn-info " target="__blank" href="/user/showUpdateProfile/{{$user->id}}">Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>      
</div>
@endsection