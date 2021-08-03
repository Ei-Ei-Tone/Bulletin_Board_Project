@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="mb-5">User List</h1>
  <div class="row">
    <div class="col-md-10">
        <form action="/user/search" class="form-inline my-2 my-lg-0" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control mr-sm-2" name="name" type="text" placeholder="Name" style="width: 150px" value="" />
            <input class="form-control mr-sm-2" name="email" type="text" placeholder="Email"style="width: 150px" value="" />
            <input class="form-control mr-sm-2" name="fromDate" type="date" placeholder="Created From" style="width: 150px" value="" />
            <input class="form-control mr-sm-2" name="toDate" type="date" placeholder="Created to" style="width: 150px" value="" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <i class="fas fa-search mr-2"></i>Search
            </button>
        </form>
    </div>
    <div class="col-md-2">
        <a href="/user/create" class="btn btn-info btn-lg btn-block">
          <i class="fas fa-plus"></i> Add
        </a>
    </div>

  </div>

  <div class="row mt-4">
    <table class="table table-bordered table-hover" id="datatable">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Created Use</th>
          <th scope="col">Phone</th>
          <th scope="col">Birth Date</th>
          <th scope="col">Address</th>
          <th scope="col">Created Date</th>
          <th scope="col">Updated Date</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr data-href="/user/showProfile/{{$user->id}}">
          <th scope="row">{{ $user->name }}</th>
          <td>{{ $user->email }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->dob }}</td>
          <td>{{ $user->address }}</td>
          <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
          <td>{{ date('d-m-Y', strtotime($user->updated_at)) }}</td> 
          <td class="text-center"><a href="#" class="btn btn-danger btn-lg delete" data-target="#ModalDelete{{$user->id}}" data-toggle="modal"><i class="fa fa-trash"></i> {{ __('Delete') }}</a></td>
        </tr>   
        @endforeach

      </tbody>
    </table>
  </div>
</div>
@endsection
