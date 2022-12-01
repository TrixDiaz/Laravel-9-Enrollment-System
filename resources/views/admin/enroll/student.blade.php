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
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="container">
            <form action="{{ url('/admin/enroll/') }}" method="post">
              {{@csrf_field()}}
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="studentID">Student ID</label>
                    <input type="text" name ="studentID" class="form-control"  placeholder="Student ID">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name ="firstName" class="form-control"  placeholder="First Name">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name ="lastName" class="form-control"  placeholder="Last Name">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name ="middleName"class="form-control"  placeholder="Middle Name">                
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" id="gender" class="form-control">
                      <option selected disabled>Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select> 
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name ="dateOfBirth"class="form-control"  placeholder="Date Of Birth">                
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Address</label>
                    <textarea type="text" name ="address" class="form-control"  placeholder="Address"></textarea>                
                  </div>
                </div>
                {{-- <div class="col-6">
                  <div class="form-group">
                    <label>Section</label>
                    <select name="section"  class="form-control" >
                    <option value =""selected disabled>Section</option>
                    @foreach ( $gradeandsections as $stud )
                    <option value="{{ $stud->sectionName }} - {{ $stud->sectionID }}"> {{ $stud->sectionName }} - {{ $stud->sectionID }}</option>
                    @endforeach
                  </select>
                  </div>
                </div> --}}
              <div class="col-6">
                <div class="form-group">
                  <label>Track</label>
                  <select name="track" class="form-control">
                    <option selected disabled>Track</option>
                    @foreach($trackandstrand as $stud)
                    <option value="{{ $stud->track }}">{{ $stud->track }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
                  
                <div class="col-6">
                  <div class="form-group">
                    <label>Strand</label>
                    <select name="strandID" class="form-control" >
                    <option value =""selected disabled>Strand</option>
                    @foreach ( $trackandstrand as $stud )
                    <option value="{{ $stud->strandID }}">{{ $stud->strandID}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                
                <div class="col-6">
                  <div class="form-group">
                    <label>Section </label>
                    <select name="sectionID" class="form-control" >
                    <option value =""selected disabled>Section</option>
                    @foreach ( $gradeandsections as $stud )
                    <option value="{{ $stud->sectionID }}">{{ $stud->sectionID }}</option>
                      @endforeach
                  </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>School Last Attended</b></label>
                    <input type="text" placeholder="School Last Attended" name="schoolLastAttended" class="form-control" required>
                  </div>
                </div>
                {{-- <div class="col-6">
                  <div class="form-group">
                    <label>School Last Attended Address</label>
                    <textarea type="text" placeholder="School Last Attended Address" class="form-control" name="schoolLastAttendedAddress"  required></textarea>
                  </div>
                </div> --}}
                <div class="col-6">
                  <div class="form-group">
                    <label>Student Email</b></label>
                    <input type="text" placeholder="Student Email" name="email" class="form-control" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Student Password</b></label>
                    <input type="password" placeholder="Student Password" name="password" class="form-control" required>
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
</div>

{{-- End add Modal --}}


{{-- Start Regular Modal --}}
{{-- <div class="modal fade bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container">
        <form action="{{ url('/admin/enroll/') }}" method="post">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Student ID</label>
                  <select name="studentID" id ="studentID" class="form-control">
                  <option selected disabled>Student ID</option>     
                  @foreach ($students as $student )
                  <option value="{{ $student->studentID }}">{{ $student->studentID }}</option>
                  @endforeach   
              </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Enroll To</label>
                <select name="enrollTo"  class="form-control" >
                <option value =""selected disabled>Enroll To</option>
                @foreach ( $faculties as $stud )
                <option value="{{ $stud->firstName }} {{ $stud->lastName }} {{ $stud->advisory }}">Teacher: {{ $stud->firstName }} {{ $stud->lastName }} - {{ $stud->advisory }}</option>
                @endforeach
              </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Student Type</label>
                <select name="studentType" class="form-control">
                  <option selected disabled>Student Type</option>
                  <option value="New">New</option>
                  <option value="Regular">Regular</option>
                </select>
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
</div> --}}

{{-- End Regular Modal --}}

{{-- Start View Modal --}}


            {{-- End View Modal --}}

{{-- Start Edit Modal --}}
<div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container">
        <form action="{{ url('/admin/enroll/') }}" method="post">
          {{ csrf_field() }}
        {{ method_field('PUT') }}
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="studentID">Student ID</label>
                <input type="text" name ="studentID" id = "studentID" class="form-control"  placeholder="Student ID" readonly>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name ="firstName" id = "firstName" class="form-control"  placeholder="First Name">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name ="lastName" id = "lastName" class="form-control"  placeholder="Last Name">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name ="middleName" id = "middleName" class="form-control"  placeholder="Middle Name">                
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Gender</label>
                <select name="gender" id="gender" class="form-control">
                  <option selected disabled>Gender</option>
                  <option value="Male" id="Male">Male</option>
                  <option value="Female" id="Female">Female</option>
                </select> 
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name ="dateOfBirth" id="dateOfBirth" class="form-control"  placeholder="Date Of Birth" readonly>                
              </div>
            </div>           
            <div class="col-6">
              <div class="form-group">
                <label>Address</label>
                <textarea type="text" name ="address" id = "address" class="form-control"  placeholder="Address"></textarea>                
              </div>
            </div>
            {{-- <div class="col-6">
              <div class="form-group">
                <label>Section</label>
                <select name="section" id = "section"class="form-control" >
                <option value ="" selected disabled>Section</option>
                @foreach ( $gradeandsections as $stud )
                <option value="{{ $stud->sectionName }} - {{ $stud->sectionID }}">{{ $stud->sectionName }} - {{ $stud->sectionID }}</option>
                  @endforeach
              </select>
              </div>
            </div> --}}
            <div class="col-6">
              <div class="form-group">
                <label>Track and Strand</label>
                <select name="strandID" id="strandID" class="form-control" >
                <option value =""selected disabled>Track and Strand</option>
                @foreach ( $trackandstrand as $stud )
                <option value="{{ $stud->track }} - {{ $stud->strandID }}">{{ $stud->track }} - {{ $stud->strandID }}</option>
                  @endforeach
              </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Section </label>
                <select name="sectionID" id="sectionID" class="form-control" >
                <option value =""selected disabled>Section</option>
                @foreach ( $gradeandsections as $stud )
                <option value="{{ $stud->sectionID }}">{{ $stud->sectionID }}</option>
                  @endforeach
              </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>School Last Attended</b></label>
                <input type="text" id = "schoolLastAttended" placeholder="School Last Attended" name="schoolLastAttended" class="form-control" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Student Email</b></label>
                <input type="text" id = "email" placeholder="Student Email" name="email" class="form-control" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Student Password</b></label>
                <input type="password" id = "password" placeholder="Student Password" name="password" class="form-control" required>
                </div>                
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
</div>
</div>
  {{-- End Edit Modal --}}
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

    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      + Enroll a Student
     </button>
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">New</a>
       {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal1">Regular</a> --}}
     </div>
   
   <br><br>

      <table class="table table-responsive table-striped " id="datatable">
        <thead>
          <tr>
            <th scope="col">Student ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Address</th>
            <th scope="col">Track</th>
            <th scope="col">Strand</th>
            <th scope="col">Section</th>
            <th scope="col">School Last Attended</th>
            <th scope="col">Student Email</th>
            <th scope="col">Student Password</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
            <tr>
              <td>{{ $student->studentID}}</td> 
              <td>{{ $student->firstName }}</td>
              <td>{{ $student->lastName }}</td> 
              <td>{{ $student->middleName}} </td>
              <td>{{ $student->gender}} </td>
              <td>{{ $student->dateOfBirth}} </td>
              <td>{{ $student->address}} </td>
              <td>{{ $student->track}} </td>
              {{-- <td>{{ $student->section}} </td> --}}
              <td>{{ $student->strandID}} </td>
              <td>{{ $student->sectionID}} </td>
              <td>{{ $student->schoolLastAttended}} </td>
              <td>{{ $student->email}} </td>
              <td>{{ $student->password}} </td>
              <td>
                {{-- <a href="#" class="btn btn-primary view"> View</a><br> --}}
                <a href="#" class="btn btn-success edit"> Edit</a>
                
              
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

$('#studentID').val(data[0]);
$('#firstName').val(data[1]);
$('#lastName').val(data[2]);
$('#middleName').val(data[3]);
$('#gender').val(data[4]);
$('#dateOfBirth').val(data[5]);
$('#address').val(data[6]);
$('#strandID').val(data[7]);
$('#sectionID').val(data[8]);
$('#schoolLastAttended').val(data[9]);
$('#email').val(data[10]);
$('#password').val(data[11]);
// $('#section').val(data[7]);

// $('#schoolLastAttendedAddress').val(data[10]);



$('#editForm').attr('action', '/admin/enroll/'+data[0]);
$('#editModal').modal('show');

// //Start View Record
// table.on('click','.view', function(){

//   $tr = $(this).closest('tr');
//   if($($tr).hasClass('child')) {
//       $tr = $tr.prev('.parent');
//   }

//   var data = table.row($tr).data();
//   console.log(data);

// $('#studentID').val(data[1]);
// $('#firstName').val(data[2]);
// $('#middleName').val(data[3]);
// $('#lastName').val(data[4]);
// $('#gender').val(data[5]);
// $('#dateOfBirth').val(data[6]);
// $('#address').val(data[7]);
// $('#strandID').val(data[8]);
// $('#schoolLastAttended').val(data[9]);
// $('#schoolLastAttendedAddress').val(data[10]);
// $('#email').val(data[11]);
// $('#password').val(data[12]);


// $('#editForm').attr('action', '/admin/enroll/'+data[0]);
// $('#editModal').modal('show');
// })

});
//End Edit Record
});
</script>
</body>
</html>
</script>
