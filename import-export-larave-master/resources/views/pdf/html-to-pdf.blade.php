{{-- <div class="container">
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form">
    See Modal with Form
  </button>  
</div> --}}

<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('html.to.pdf')}}" method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Name</label>
            <input type="text" class="form-control" id="" name="name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="password1">Role No.</label>
            <input type="text" class="form-control" id="" name="role_number" placeholder="Enter Role Numer">
          </div>
          <div class="form-group">
            <label for="password1">Collage Name</label>
            <input type="text" class="form-control" id="" name="collage" placeholder="Collage Name">
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>