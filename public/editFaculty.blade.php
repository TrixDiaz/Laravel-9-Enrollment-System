<div id="editFaculty" class="modal">
    <form class="modal-content animate" action="/admin/faculty/" method="post" id="editForm">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="container">
        <h1>New Faculty</h1>
        <hr> 
        <label for="firstName"><b>First Name</b></label><br>
        <input type="text" placeholder="First Name" id="firstName" name="firstName" required><br>

        <label for="lastName"><b>Last Name</b></label><br>
        <input type="text" placeholder="Last Name" id="lastName" name="lastName"  required><br>

        <label for="middleName"><b>Middle Name</b></label><br>
        <input type="text" placeholder="Middle Name" id="middleName"name="middleName" required><br>

        <label for="gender"><b>Gender</b></label><br>
        <select name="gender" id="gender" class="gender" >
          <option selected disabled>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select><br>
        
        <label for="username"><b>Username</b></label><br>
        <input type="text" placeholder="Username" id="username"name="username" required><br>
        
        <label for="password"><b>Password</b></label><br>
        <input type="password" placeholder="Password" id="password"name="password" required><br>
        
        <label for="advisory"><b>Advisory</b></label><br>
        <select name="advisory" id ="advisory"class="advisory">
          <option selected disabled>Advisory</option>
          <option value="1"></option>
        </select><br>
      </div>
  
      <div class="container-footer" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('editFaculty').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" class="add">Update</button>
      </div>
      </div>
    </form>
    
