@include('navigation-menu')
<div class="container">
  <h1 class="mb-5">Post List</h1>
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
        <tr>
          <th scope="row">{{$post->title}}</th>
          <td>{{$post->description}}</td>
          <td>
            {{$post->status}}
          </td>
          <td>{{ $post->created_at->format('d/m/Y') }}</td>
          <td class="text-center"><a href={{"/posts/update/$post->id"}} class="btn btn-primary btn-lg" ><i class="fa fa-edit"></i> Edit</a></td>
          
          <td class="text-center"><a href="#" class="btn btn-danger btn-lg delete" data-target="#ModalDelete{{$post->id}}" data-toggle="modal"><i class="fa fa-trash"></i> {{ __('Delete') }}</a></td>
          @include('posts.delete')
        </tr>   
        @endforeach

      </tbody>
     
    </table>
    {{$posts->links()}}
  </div>
</div>


