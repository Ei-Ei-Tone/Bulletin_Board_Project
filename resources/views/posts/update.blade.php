@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1 class="mb-5">Update Post</h1>
    		
    		<form action="/updateConfirmPost">
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" required/>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="description" required></textarea>
    		    </div>

                <div class="form-group">
    		        <label for="status" class="mr-5">Status</label>
    		        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" >
    		    </div>

    		    <div class="form-group col text-center">
    		        <button type="submit" class="btn btn-primary mr-3">
    		            Confirm
    		        </button>
    		        <button type="button" class="btn btn-outline-success">
    		            Clear
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
@endsection
