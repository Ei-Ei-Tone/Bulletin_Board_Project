@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-4">
      <h1 class="mb-5">Upload CSV File</h1>
      <form action="" method="POST" class="form-group">
        <label>Import File Form:</label>
        <input type="file" value="" class="form-control" required>
        <div class="col text-center">
          <input type="button" class="btn btn-primary mt-3" value="Import File">
        </div>
      </form>
    </div> 
	</div>
</div>
@endsection