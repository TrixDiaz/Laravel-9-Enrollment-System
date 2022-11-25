<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    @include("admin.partials.topnav")
</head>
<body>
    
    <div class="container">
        
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Enroll Student
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick ="document.getElementById('enrollNew2').style.display='block'" style="width: auto;" href="#">New</a></li>
              <li><a class="dropdown-item" href="#">Transferee</a></li>
            </ul>    
  <!-- Modal --> 
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ action('/admin/students/student') }}" method="POST">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="firstName"><b>First Name</b></label><br>
                    <input type="text" placeholder="First Name" name="firstName" id="firstName" required><br>
              
                    <label for="lastName"><b>Last Name</b></label><br>
                    <input type="text" placeholder="Last Name" name="lastName" id="lastName" required><br>
              
                    <label for="middleName"><b>Middle Name</b></label><br>
                    <input type="text" placeholder="Middle Name" name="middleName" id ="middleName" required><br>
              
                    <label for="gender"><b>Gender</b></label><br>
                    <select name="gender" id="gender" class="gender">
                      <option selected disabled>Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select><br>
                    
                    <label for="dateOfBirth"><b>Date Of Birth</b></label><br>
                    <input type="date" placeholder="Date Of Birth" name="dateOfBirth" id="dateOfBirth" required><br>
                    
                    <label for="address"><b>Address</b></label><br>
                    <textarea type="text" placeholder="Address" name="address" id ="address"required></textarea><br>
                    
                    <label for="enrollTo"><b>Enroll To</b></label><br>
                    <select name="enrollTo" id="enrollTo" class="enrollTo">
                      <option selected disabled>Enroll To</option>
                      <option value="">Sample Section,Track, and Strand</option>
                    </select><br>
                    
                    <label for="schoolLastAttended"><b>School Last Attended</b></label><br>
                    <input type="text" placeholder="School Last Attended" name="schoolLastAttended" id="schoolLastAttended" required><br>
                  
                    <label for="schoolLastAttendedAddress"><b>School Last Attended Address</b></label><br>
                    <textarea type="text" placeholder="School Last Attended Address" name="schoolLastAttendedAddress" id="schoolLastAttendedAddress" required></textarea><br>
              
                  </div>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>