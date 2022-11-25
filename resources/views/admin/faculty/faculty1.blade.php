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

    <title>Faculty List</title>
    
    @include("admin.partials.topnav")
</head>
<body>
    
   @include("admin.partials.sidenav")
    {{-- Start Add Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Faculty</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="{{ url('/admin/faculty/') }}" method="post">
        {{@csrf_field()}}
        <div class="modal-body">
                
          <div class="form-group">
            <label>Faculty ID</label>
            <input type="text" name ="facultyID" class="form-control"  placeholder="Faculty ID">
          </div>

            <div class="form-group">
                <label>First Name</label>
                <input type="text" name ="firstName" class="form-control"  placeholder="First Name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name ="lastName" class="form-control"  placeholder="Last Name">
              </div>
              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name ="middleName"class="form-control"  placeholder="Middle Name">
              </div>
              <div class="form-group">
              <label for="gender"><b>Gender</b></label><br>
              <select name="gender" id="gender" class="form-control">
                <option selected disabled>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select><br>
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" name ="username" class="form-control"  placeholder="Username">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name ="password" class="form-control"  placeholder="Password">
              </div>

              <div class="form-group">
                <label for="department">Department</label><br>
              <select name="department" id="department" class="form-control">
              <option value ="" selected disabled>Department</option>
              @foreach($departments as $fac)
              <option value="{{ $fac->departmentName }}">{{ $fac->departmentName }}</option>
                @endforeach
            </select><br>
              </div>

              {{-- <div class="form-group">
                <label for="section">Section</label><br>
              <select name="section" id="section" class="form-control">
              <option value ="" selected disabled>Section</option>
              @foreach($gradeandsection as $fac)
              <option value="{{ $fac->gradeLevel  }} {{ $fac->sectionName }} {{ $fac->sectionID }}">{{ $fac->gradeLevel }}-{{ $fac->sectionName }}-{{ $fac->sectionID }}</option>
                @endforeach
            </select><br>
              </div> --}}

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
          <h5 class="modal-title" id="exampleModalLabel">Edit Faculty</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <form action="/admin/faculty/" method="post" id="editForm">
  
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-body">
            
          {{-- <div class="form-group">
            <label>Faculty ID</label>
            <input type="text" name ="facultyID" id="facultyID" class="form-control"  placeholder="Faculty ID">
          </div> --}}

                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name ="firstName" id="firstName"class="form-control"  placeholder="First Name">
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name ="lastName" id ="lastName"class="form-control"  placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label>Middle Name</label>
                  <input type="text" name ="middleName" id="middleName"class="form-control"  placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="gender"><b>Gender</b></label><br>
                <select name="gender" id="gender" class="gender">
                <option selected disabled>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select><br>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name ="username" id="username"class="form-control"  placeholder="Mobile">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name ="password" id="password"class="form-control"  placeholder="Mobile">
                </div>

                <div class="form-group">
                  <label for="department">Department</label><br>
                <select name="department" id="department" class="form-control">
                <option selected disabled>Department</option>
                <option value="{{ $fac->departmentName }}">{{ $fac->departmentName }}</option>
              </select><br>
                </div>

                {{-- <div class="form-group">
                  <label for="section">Section</label><br>
                <select name="section" id="section" class="form-control">
                <option selected disabled>Section</option>
                <option value="{{ $fac->gradeLevel  }} {{ $fac->sectionID }}">{{ $fac->gradeLevel }} {{ $fac->section }}</option>   
              </select><br>
                </div> --}}
                
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
    <h1>Faculty List</h1>
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
        + New Faculty
      </button>

      <br><br>
<table class="table table-striped" id="datatable">
  <thead>
    <tr>
      <th scope="col">Faculty ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Department</th>
      {{-- <th scope="col">Section</th> --}}
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($faculties as $faculty)
      <tr>
        <td>{{ $faculty->facultyID}}</td> 
        <td>{{ $faculty->firstName }} </td>
        <td>{{ $faculty->lastName}} </td>
        <td>{{ $faculty->middleName}} </td>
        <td>{{ $faculty->gender}} </td>
        <td>{{ $faculty->username}} </td>
        <td>{{ $faculty->password}} </td>
        <td>{{ $faculty->department}} </td>
        {{-- <td>{{ $faculty->section}} </td>    --}}
        <td>
          <a href="/admin/faculty/show" class="btn btn-primary view"> VIEW </a>
          <a href="#" class="btn btn-success edit"> EDIT</a>
        
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

 
    $('#firstName').val(data[1]);
    $('#lastName').val(data[2]);
    $('#middleName').val(data[3]);
    $('#gender').val(data[4]);
    $('#username').val(data[5]);
    $('#password').val(data[6]);
    $('#department').val(data[7]);
    // $('#section').val(data[8]);

    $('#editForm').attr('action', '/admin/faculty/'+data[0]);
    $('#editModal').modal('show');
});
//End Edit Record
});
</script>
</body>
</html>
    </script>