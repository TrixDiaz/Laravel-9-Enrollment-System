<div id="enrollRegular" class="modal">
    <form class="modal-content animate" action="" method="post">
      <div class="container">
        <h1>For Regular Student</h1>
        <hr>    
        <label for="firstName"><b>First Name</b></label>
        <input type="text" placeholder="First Name" name="firstName" required>

        <label for="lastName"><b>Last Name</b></label>
        <input type="text" placeholder="Last Name" name="lastName" required>

        <label for="middleName"><b>Middle Name</b></label>
        <input type="text" placeholder="Middle Name" name="middleName" required>

        <label for="gender"><b>Gender</b></label><br>
        <select name="gender" id="gender" class="gender">
          <option selected disabled>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select><br>
        
        <label for="studentType"><b>Student Type</b></label>
        <input type="text" placeholder="Student Type" name="studentType" required>
        
        <label for="track"><b>Track</b></label>
        <input type="text" placeholder="Track" name="track" required>
        
        <label for="strand"><b>Strand</b></label>
        <input type="text" placeholder="Strand" name="strand" required>
      </div>
  
      <div class="container-footer" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('enrollRegular').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" class="add">Add</button>
      </div>
      </div>
    </form>
    <script>
 var modal = document.getElementById('enrollRegular');

// Get the button that opens the modal
var btn = document.getElementById("regular");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
      </script>