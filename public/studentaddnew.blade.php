

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
  <label>Gender</label>
  <select name="gender" id="gender" class="form-control">
    <option selected disabled>Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
  </div>
  <div class="form-group">
    <label>Date Of Birth</label>
    <input type="date" name ="dateOfBirth" class="form-control"  placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label>Address</label>
    <textarea type="text" name ="address" class="form-control"  placeholder="Address"></textarea>
  </div>
  <div class="form-group">
  <label>Enroll To</label>
  <select name="enrollTo"  class="form-control" >
    <option value =""selected disabled>Enroll To</option>
    @foreach ( $faculties as $stud )
    <option value="{{ $stud->firstName }} {{ $stud->lastName }} {{ $stud->advisory }}">Teacher: {{ $stud->firstName }} {{ $stud->lastName }} - {{ $stud->advisory }}</option>
    @endforeach
  </select>
  </div>
  <div class="form-group">
  <label>School Last Attended</b></label>
  <input type="text" placeholder="School Last Attended" name="schoolLastAttended" class="form-control" required>
  </div>
  <div class="form-group">
<label>School Last Attended Address</label>
<textarea type="text" placeholder="School Last Attended Address" class="form-control" name="schoolLastAttendedAddress"  required></textarea>
  </div>
  <div class="form-group">
    <label>Student Email</b></label>
    <input type="text" placeholder="Student Email" name="email" class="form-control" required>
    </div>
  <div class="form-group">
    <label>Student Password</b></label>
    <input type="password" placeholder="Student Password" name="password" class="form-control" required>
    </div>

  <div class="form-group">
    <label>Student Type</label>
    <select name="studentType" class="form-control">
      <option selected disabled>Student Type</option>
      <option value="New">New</option>
    </select>
    </div>


    <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enroll New Student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="{{ url('/admin/enroll/') }}" method="post">
      {{@csrf_field()}}
      <div class="modal-body">
        <div class="row"> 
          <div class="col-12">
            
          </div>
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