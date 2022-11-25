<div id="enrollTransferee" class="modal">
    <form class="modal-content animate" action="" method="post">
      <div class="container">
        <h1>For Regular Student</h1>
        <hr>    
        <label for="firstName"><b>First Name</b></label><br>
        <input type="text" placeholder="First Name" name="firstName" required><br>

        <label for="lastName"><b>Last Name</b></label><br>
        <input type="text" placeholder="Last Name" name="lastName" required><br>

        <label for="middleName"><b>Middle Name</b></label><br>
        <input type="text" placeholder="Middle Name" name="middleName" required><br>

        <label for="gender"><b>Gender</b></label><br>
        <select name="gender" id="gender" class="gender">
          <option selected disabled>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select><br>
        
        <label for="studentType"><b>Student Type</b></label><br>
        <input type="text" placeholder="Student Type" name="studentType" required><br>
        
        <label for="track"><b>Track</b></label><br>
        <input type="text" placeholder="Track" name="track" required><br>
        
        <label for="strand"><b>Strand</b></label><br>
        <input type="text" placeholder="Strand" name="strand" required><br>
      </div>
  
      <div class="container-footer" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('enrollTransferee').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" class="add">Add</button>
      </div>
      </div>
    </form>