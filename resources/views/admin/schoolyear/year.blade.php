<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="/css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Track and Strand</title>
    
    @include("admin.partials.topnav")
</head>
<body>
    
   @include("admin.partials.sidenav")
   
    {{-- Start Add Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Track and Strand</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="{{ url('/admin/schoolyear') }}" method="post">
      {{@csrf_field()}}
      <div class="modal-body">
              
          <div class="form-group">
              <label>School Year</label>
              <input type="text" name ="schoolYear" class="form-control"  placeholder="School Year">
            </div>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  
  {{-- End add Modal --}}

  {{-- Start Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Track and Strand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form action="/admin/schoolyear" method="post" id="editForm">

      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="modal-body">
          
          <div class="form-group">
              <label>School Year</label>
              <input type="text" name ="schoolYear" id ="schoolYear"class="form-control"  placeholder="Track">
            </div>

              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update changes</button>
      </div>
  </form>
    </div>
  </div>
</div>
  
{{-- End Edit Modal --}}

<div class="container">
  <h1>School Year List</h1>
  @if(count($errors) > 0)

  <div class = "alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  
  @if(\Session::has('success'))
  <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      + New School Year
    </button>

    <br><br>
    <table class="table table-striped" id="datatable">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">School Year</th>
          <th scope="col">Operation</th>   
        </tr>
      </thead>
      <tbody>
          @foreach ($schoolyears as $schoolyear )
              <tr>
              <th>{{ $schoolyear->id}}</th> 
              <td>{{ $schoolyear->schoolYear }} </td>
              <td>
                  <a href="#" class="btn btn-success edit"> EDIT</a>

              </td>
              </tr>
          @endforeach
      </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
  
  <script src="/js/script.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {

var table = $('#datatable').DataTable();
//Start Edit Record
table.on('click', '.edit', function() {

  $tr = $(this).closest('tr');
  if($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
  }

  var data = table.row($tr).data();
  console.log(data);

  $('#schoolYear').val(data[1]);

  $('#editForm').attr('action', '/admin/schoolyear'+data[0]);
  $('#editModal').modal('show');
});
//End Edit Record
});
</script>
</body>
</html>
  </script>