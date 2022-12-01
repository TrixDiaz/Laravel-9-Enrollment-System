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

    <title>Grade And Section</title>
    
    @include("admin.partials.topnav")
</head>
<body>
    
   @include("admin.partials.sidenav")

    {{-- Start Add Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Grade and Section</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="{{ url('/admin/gradeandsection/') }}" method="post">
        {{@csrf_field()}}
        <div class="modal-body">

          {{-- <div class="form-group">
            <label for="sectionID">Section ID</label><br>
          <select name="sectionID" id="sectionID" class="advisory">
          <option value="" selected disabled>Section ID</option>
          @foreach( $trackandstrand as $gandsecs) --}}
          {{-- <option valie=""> </option> --}}
          {{-- <option value="{{ $gandsecs->track }} {{ $gandsecs->strandID }} ">{{ $gandsecs->track }}-{{ $gandsecs->strandID }}</option>
            @endforeach
        </select><br>
          </div> --}}

          <div class="form-group">
            <label>Section ID</label>
            <input type="text" name ="sectionID" class="form-control"  placeholder="Section ID">
          </div>
          <div class="form-group">
            <label>Section Name</label>
            <input type="text" name ="sectionName" class="form-control"  placeholder="Section Name">
          </div>
                
          <div class="form-group">
            <label>Grade Level </label>
            <select name="gradeLevel" id="cboOptions" class="form-control">
              <option selected disabled>Grade Level</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <div id="div11">
              <div class="row">
                <div class="col-6">
              <label>Start Hour </label>
              <input type="time" id="type" name="startHr" class="form-control">
              </div>
              <div class="col-6">
              <label>End Hour </label>
              <input type="time" id="type" name="endHr" class="form-control">
              </div>
            </div>
            </div>
            <!-- <div id="div12" style="display:none;">
              <label>Grade 12 Shift </label>
              <div class="row">
                <div class="col-6">
              <label>Start Hour </label>
              <input type="time" id="types" name="startHr1" class="form-control">
              </div>
              <div class="col-6">
              <label>End Hour </label>
              <input type="time" id="types" name="endHr1" class="form-control">
              </div>
            </div>
            </div> -->
          </div>

          <div class="form-group">
            <label>Schedule</label>
            <select id="schedule" name="schedule" class="form-control">
              <option selected disabled>Schedule</option>
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
              <option value="Friday">Friday</option>
            </select>
          </div>
   
           
               <div class="form-group">
            <label for="faculty">Faculty Assigned</label><br>
          <select name="faculty" id="faculty" class="form-control">
          <option selected disabled>Faculty Assigned</option>
          @foreach( $faculties as $gandsec)  
          <option value="{{ $gandsec->facultyID }}">{{ $gandsec->facultyID }}</option>
            @endforeach
        </select>
          </div>

          <div class="form-group">
            <label for="subject">Subject Assigned</label><br>
          <select name="subjectID" id="subjectID" class="form-control">
          <option selected disabled>Subject Assigned</option>
          @foreach( $subjects as $gandsec)  
          <option value="{{ $gandsec->subjectID }}">{{ $gandsec->subjectID }}</option>
            @endforeach
          </select>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Grade and Section</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <form action="/admin/gradeandsection/" method="post" id="editForm">
  
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-body">
            
          <div class="form-group">
            <label>Section ID</label>
            @foreach($gradeandsections as $gandsec)
            <input type="text" name ="sectionID"  id = "sectionID" class="form-control" readonly>
            @endforeach
          </div>
          <div class="form-group">
            <label>Section Name</label>
            <input type="text" name ="sectionName" class="form-control"  placeholder="Section Name">
          </div>
                
          <div class="form-group">
            <label>Grade Level </label>
            <select name="gradeLevel" id="cboOptions" onchange="showDiv('div',this)" class="form-control">
              <option selected disabled>Grade Level</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <div id="div11" style="display:none;">
              <label>Grade 11 Shift </label>
              <select id="type" name="timeAm" class="form-control">
                <option selected disabled>Time</option>
                <option value="6:00 AM - 8:00 AM">6:00 AM - 8:00 AM</option>
                <option value="8:00 AM - 10:00 AM">8:00 AM- 10:00 AM </option>
                <option value="10:00 AM - 12:00 NN">10:00 AM - 12:00 NN</option>
              </select>
            </div>
            <div id="div12" style="display:none;">
              <label>Grade 12 Shift </label>
              <select id="types" name="timePm" class="form-control">
                <option selected disabled>Time</option>
                <option value="1:00 PM - 3:00 PM">1:00 PM - 3:00 PM</option>
                <option value="3:00 PM - 5:00 PM">3:00 PM - 5:00 PM </option>
                <option value="5:00 PM - 7:00 PM">5:00 PM - 7:00 PM</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Schedule</label>
            <select id="schedule" name="schedule" class="form-control">
              <option selected disabled>Schedule</option>
              <option value="Mon, Wed">Mon, Wed</option>
              <option value="Tues, Thurs">Tues, Thurs</option>
              <option value="Fri">Fri</option>
            </select>
          </div>
   
           
               <div class="form-group">
            <label for="faculty">Faculty Assigned</label><br>
          <select name="faculty" id="faculty" class="form-control">
          <option selected disabled>Faculty Assigned</option>
          @foreach( $faculties as $gandsec)  
          <option value="{{ $gandsec->facultyID }} - {{ $gandsec->firstName }} {{ $gandsec->lastName }} ">{{ $gandsec->id }} - {{ $gandsec->firstName }} {{ $gandsec->lastName }} </option>
            @endforeach
        </select>
          </div>

          <div class="form-group">
            <label for="subject">Subject Assigned</label><br>
          <select name="subjectID" id="subjectID" class="form-control">
          <option selected disabled>Subject Assigned</option>
          @foreach( $subjects as $gandsec)  
          <option value="{{ $gandsec->subjectID }}">{{ $gandsec->subjectID }}</option>
            @endforeach
          </select>
          </div>

              {{-- <div class="form-group">
                <label>Subject ID</label>
                <input type="text" name ="subjectID" id ="subjectID" class="form-control" value="" placeholder="" readonly>
              </div>
               --}}
                
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
    <h1>Grade And Section List</h1>
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
        + New Grade and Section
      </button>

      <br><br>

      <table class="table table-striped" id="datatable">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Section ID</th>
            <th scope="col">Section Name</th>
            <th scope="col">Grade Level</th>
            <th scope="col">Faculty Assigned</th>
            <th scope="col">Subject Assigned</th>
            <th scope="col">Start Hour</th>
            <th scope="col">End Hour</th>
            <th scope="col">Schedule</th>
            <th scope="col">Operation</th>   
          </tr>
        </thead>
        <tbody>
            @foreach ($gradeandsections as $gradeandsection )
                <tr>
                <td>{{ $gradeandsection->id }}</td>
                <td>{{ $gradeandsection->sectionID}}</td> 
                <td>{{ $gradeandsection->sectionName}}</td> 
                <td>{{ $gradeandsection->gradeLevel }} </td>
                <td>{{ $gradeandsection->faculty }}</td>
                <td>{{ $gradeandsection->subjectID}}</td>
                <td>{{ $gradeandsection->startHr }}</td>
                <td>{{ $gradeandsection->endHr }}</td>
                <td>{{ $gradeandsection->schedule }}</td>
                <td>

                    <a href="/admin/gradeandsection/show/{{ $gradeandsection->sectionID }}" class="btn btn-primary view">CLASS</a>
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
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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

  $('#sectionName').val(data[1]);
  $('#gradeLevel').val(data[2]);
  $('#faculty').val(data[3]);
  $('#subject').val(data[4]);
  $('#startHr').val(data[5]);
  $('#endHr').val(data[6]);
  $('#schedule').val(data[7]);
  
  
  $('#editForm').attr('action', '/admin/gradeandsection/'+data[0]);
  $('#editModal').modal('show');
  $('#viewModal').modal('show');
});
//End Edit Record


});
</script>
</body>
</html>
  </script>