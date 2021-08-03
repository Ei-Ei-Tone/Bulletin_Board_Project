@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-4">
      <h1 class="mb-5">Upload CSV File</h1>

      <form action="{{route('import')}}" method="POST" class="form-group" enctype="multipart/form-data">
        @csrf
        <label>Import File Form:</label>
        <input type="file" value="" class="form-control @error ('file') is-invalid @enderror" name="file">
        @error('file')
          <div class="alert alert-danger mt-2">
            {{$message}}
          </div>  
        @enderror
        <div class="col text-center">
          <input type="submit" class="btn btn-primary mt-3" value="Import File">
        </div>
      </form>
    </div> 
	</div>
</div>
@endsection