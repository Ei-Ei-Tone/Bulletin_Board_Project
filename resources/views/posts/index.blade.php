@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <form action="#" class="form-inline my-2 my-lg-0" method="GET">
            @csrf
            <input class="form-control mr-sm-2" name="search_data" type="search" placeholder="Search" aria-label="Search" style="width: 400px" value="" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <i class="fas fa-search mr-2"></i>Search
            </button>
        </form>
    </div>
    <div class="col-md-2">
        <a href="/posts/create" class="btn btn-info btn-lg btn-block"> <i class="fas fa-plus"></i> Add</a>
    </div>
    <div class="col-md-2">
        <a href="/posts/create" type="button" class="btn btn-info btn-lg btn-block">
            <i class="fas fa-upload"></i> Upload
        </a>
    </div>
    <div class="col-md-2">
        <a href="/posts/uploadFile" class="btn btn-info btn-lg btn-block">
            <i class="fas fa-download"></i> Download
        </a>
    </div>
  </div>
  <div class="row mt-4">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Post Title</th>
          <th scope="col">Post Description</th>
          <th scope="col">Post Use</th>
          <th scope="col">Post Date</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Title 1</th>
          <td>Description 1</td>
          <td>User 1</td>
          <td>5/10/2019</td>
          <td class="text-center"><a href="/updatePost" class="btn btn-primary btn-lg" ><i class="fa fa-edit"></i> Edit</a></td>
          <td class="text-center"><a href="#" class="btn btn-danger btn-lg" ><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
        <tr>
          <th scope="row">Title 2</th>
          <td>Description 1</td>
          <td>User 1</td>
          <td>5/10/2019</td>
          <td class="text-center"><a href="/updatePost" class="btn btn-primary btn-lg" ><i class="fa fa-edit"></i> Edit</a></td>
          <td class="text-center"><a href="#" class="btn btn-danger btn-lg" ><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
        <tr>
          <th scope="row">Title 3</th>
          <td>Description 1</td>
          <td>User 1</td>
          <td>5/10/2019</td>
          <td class="text-center"><a href="/updatePost" class="btn btn-primary btn-lg" ><i class="fa fa-edit"></i> Edit</a></td>
          <td class="text-center"><a href="#" class="btn btn-danger btn-lg" ><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection