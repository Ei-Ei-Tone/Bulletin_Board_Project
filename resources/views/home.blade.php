@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="mb-5">Post List For User</h1>
  <div class="row">
    <div class="col-md-6">
        <form action="/posts/search" class="form-inline my-2 my-lg-0" method="POST">
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
        <a href="/posts/importFile" type="button" class="btn btn-info btn-lg btn-block">
            <i class="fas fa-upload"></i> Upload
        </a>
    </div>
    <form action="{{url('/export')}}" class="col-md-2" method="POST">
      @csrf
      <input type="hidden" name="__token" value="{{csrf_token()}}">
        <button class="btn btn-info btn-lg btn-block">
            <i class="fas fa-download"></i> Download
        </button>
    </form>
  </div>

  @if(session('updated'))
  <div class="alert alert-success alert-dismissible mt-3">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ session('updated') }}
  </div>
  @endif

  @if(session('deleted'))
    <div class="alert alert-success alert-dismissible mt-3">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ session('deleted') }}
    </div>
  @endif

  <div class="row mt-4">
    <table class="table table-bordered table-hover" id="datatable">
      <thead>
        <tr>
          <th scope="col">Post Title</th>
          <th scope="col">Post Description</th>
          <th scope="col">Post Use</th>
          <th scope="col">Post Date</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          @if( Auth::user()->name== $post->name) 
            <tr>
              <th scope="row">{{$post->title}}</th>
              <td>{{$post->description}}</td>
              <td>
                {{$post->name}}
              </td> 
              <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
              <td class="text-center"><a href={{"/posts/update/$post->title"}} class="btn btn-primary btn-lg" ><i class="fa fa-edit"></i> Edit</a></td>
              
              <td class="text-center"><a href="#" class="btn btn-danger btn-lg delete" data-target="#ModalDelete{{$post->title}}" data-toggle="modal"><i class="fa fa-trash"></i> {{ __('Delete') }}</a></td>
              @include('posts.delete')
            </tr>    
          @endif 
        @endforeach
      </tbody> 
    </table>
    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
      {{ $posts->links() }}
    </div>
  </div>
</div>
@endsection


