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
        <form action="{{ url('/admin/classlist/') }}" method="post">
        {{@csrf_field()}}
        <div class="modal-body">

           <div class="form-group">
            <label for="sectionID">Section ID</label><br>
          <select name="sectionID" id="sectionID" class="advisory">
          <option value="" selected disabled>Section ID</option>
         
        </select><br>
          </div> 

          <div class="form-group">
            <label>Section ID</label>
            <input type="text" name ="sectionID" class="form-control"  placeholder="Section ID">
          </div>
          <div class="form-group">
            <label>Section Name</label>
            <input type="text" name ="sectionName" class="form-control"  placeholder="Section Name">
          </div>
                
            <div class="form-group">
                <label>Grade Level</label>
                <input type="text" name ="gradeLevel" class="form-control"  placeholder="Grade Level">
              </div>
              
               <div class="form-group">
            <label for="faculty">Faculty Assigned</label><br>
          <select name="faculty" id="faculty" class="form-control">
          <option selected disabled>Faculty Assigned</option>
          
        </select><br>
          </div>

          <div class="form-group">
            <label for="subject">Subject Assigned</label><br>
          <select name="subject" id="subject" class="form-control">
          <option selected disabled>Subject Assigned</option>
         
        </select><br>
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

