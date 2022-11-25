<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="/css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Grade And Section</title>
    
    @include("admin.partials.topnav")
</head>
<body>
    
   @include("admin.partials.sidenav")

   {{-- Start Modal --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="container">
          <h5 class="modal-title" id="exampleModalLabel">List of Enrolled Students</h5><br>
        
    <form action="{{ url('admin/gradeandsection/filterdata/') }}" method="post">
    {{@csrf_field()}}
    <div class="row">
        <div class="col-12">
        <div class="form-group">

            <label>Student ID</label>
            <input type="text" name ="studentID" id="studentID" class="form-control"  placeholder="">

            {{-- <select name="studentID" id="searchID" class="form-control">
            <option selected disabled>Student ID</option> --}}
            {{-- @foreach ( $students as $gandsec )
                <option value="{{ $gandsec->studentID }}"> {{ $gandsec->studentID }}</option>
            @endforeach --}}
            {{-- </select> --}}
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name ="firstName" id="firstName" class="form-control"  placeholder="First Name" readonly>
          </div>
        </div>
        <div class="col-4">   
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name ="middleName" id="middleName" class="form-control"  placeholder="Middle Name" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name ="lastName" id="lastName" class="form-control"  placeholder="Last Name" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Gender</label>
                <input type="text" name ="gender" id="gender" class="form-control"  placeholder="Gender" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Date Of Birth</label>
                <input type="text" name ="dateOfBirth" id="dateOfBirth" class="form-control"  placeholder="Date Of Birth" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Address</label>
                <input type="text" name ="address" id="address" class="form-control"  placeholder="Address" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Track and Strand</label>
                <input type="text" name ="strandID" id="address" class="form-control"  placeholder="Address" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>School Last Attended</label>
                <input type="text" name ="schoolLastAttended" id="schoolLastAttended" class="form-control"  placeholder="School Last Attended" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Email</label>
                <input type="text" name ="email" id="email" class="form-control"  placeholder="Email" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Password</label>
                <input type="text" name ="password" id="password" class="form-control"  placeholder="Password" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Section</label>
                <input type="text" name ="section" id="section" class="form-control"  placeholder="Section" readonly>
              </div>
            </div>  
        <div class="col-4">   
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name ="subject" id="subject" class="form-control"  placeholder="Subject" readonly>
              </div>
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
</div>
           
            {{-- End of Modal --}}

            <div class="container">
                <h1>Student List</h1>
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
                + Add Student
              </button>
              <br><br>
              
        <table class="table table-striped" id="datatable">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Student ID</th>
        <th scope="col">First Name</th> 
        <th scope="col">Middle Name</th> 
        <th scope="col">Last Name</th> 
        <th scope="col">Gender</th> 
        <th scope="col">Date of Birth</th> 
        <th scope="col">Address</th> 
        <th scope="col">Track and Strand</th> 
        <th scope="col">School Last Attended</th> 
        <th scope="col">Email</th> 
        <th scope="col">Password</th> 
        <th scope="col">Section</th> 
        <th scope="col">Subject</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $class)
        <tr> 

            <td>{{ $class->id }}</td>
            <td>{{ $class->studentID }}</td>
            <td>{{ $class->firstName }}</td>
            <td>{{ $class->middleName }}</td>
            <td>{{ $class->lastName }}</td>
            <td>{{ $class->gender }}</td>
            <td>{{ $class->dateOfBirth }}</td>
            <td>{{ $class->address }}</td>
            <td>{{ $class->strandID }}</td>
            <td>{{ $class->schoolLastAttended }}</td>
            <td>{{ $class->email }}</td>
            <td>{{ $class->password }}</td>
            <td>{{ $class->section }}</td>
            <td>{{ $class->subject }}</td>
      </tr>
      @endforeach        
    </div>
</div>
</body>
<script src="/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      
    $('#datatable').DataTable();
    
    $.ajax({
            type:'get',
            url:'{!!URL::to('/admin/gradeandsection/filterdatas/')!!}',
            success:function(response){ 
              console.log(response)
                                }})
  });



</script>
</body>
</html>