
<div id="enrollNew" class="modal">
  <form class="modal-content animate" action="{{ ("/admin/students/store") }}" method="post">
    {{ csrf_field() }}
    <div class="container">
      <h1>Enroll New Student</h1>
      <hr>
      
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

    <div class="container-footer" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('enrollNew').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="add">Add</button>
    </div>
    </div>
  </div>
  </form>


