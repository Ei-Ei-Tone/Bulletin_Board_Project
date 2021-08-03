@foreach ($users as $user)
    

<form id="deleteForm" method="POST" action="/user/delete/{{ $user->id }}" enctype="multipart/form-data">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <div class="modal fade" id="ModalDelete{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-titile">Post Delete</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are You Sure ? ... You want to Delete <b> {{$user->title}} </b>.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">Cancel </button>
          <button type="submit" class="btn btn-outline-danger">Delete</button>
        </div>
      </div>
    </div>
  </div> 
</form>
@endforeach