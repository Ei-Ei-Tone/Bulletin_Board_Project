@if(Auth::user()->is_admin == 0) 
<form id="editForm" action="/user/showUpdateProfile/{{$user->id}}" enctype="multipart/form-data">

  {{ csrf_field() }}
  <div class="modal fade" id="ModalEdit{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-titile">user Edit</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body p-5">
          @if(session('updated'))
            <p class="alert alert-success">{{ session('updated') }}</p>
            @endif
            <input type="hidden" name="id" value=""/>
            <div class="row pb-lg-5">
              <img src="{{asset('/images/'.$user->profile)}}" class="rounded-circle" width="150">
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
               {{$user->is_admin}}
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">Cancel </button>
        </div>
      </div>
    </div>
  </div> 
</form>
@else 
<link rel="stylesheet" href="{!!asset('/css/bootstrap.min.css')!!}">
<script src="{!!asset('/js/jquery-3.6.0.min.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.min.js')!!}"></script>
@include('header')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('User Profile') }}</div>
        <div class="card-body">
          @if(session('updated'))
          <p class="alert alert-success">{{ session('updated') }}</p>
          @endif
          <input type="hidden" name="id" value=""/>
          <div class="row pb-lg-5">
            <img src="{{asset('/images/'.$user->profile)}}" class="rounded-circle" width="150">
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
             {{$user->is_admin}}
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
            <div class="col-sm-4">
              <a class="btn btn-outline-info btn-lg" target="__blank" href="/user/showUpdateProfile/{{$user->id}}">Edit</a>
            </div>
            <div class="col-sm-4">
              <a href="{{ URL::previous() }}" class="btn btn-outline-success btn-lg" role="button">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>
@endif

