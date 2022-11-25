const body = document.querySelector("body"),
        sidebar = body.querySelector(".sidebar"),
        toggle = body.querySelector(".toggle"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");

        toggle.addEventListener("click", () =>{
            sidebar.classList.toggle("close")
        });

        modeSwitch.addEventListener("click", () =>{
            body.classList.toggle("dark")

            if (body.classList.contains("dark")){
                modeText.innerText = "Light Mode"
            }else{
                modeText.innerText = "Dark Mode"
            }
            //student table script
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[0];
                  if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }       
                }
              }

              $(document).ready(function() {
                var table = $('#myTable').DataTable();
        //Start Edit Record
                table.on('click', '.editBtn', function() {
        
                    $tr = $(this).closest('tr');
                    if($($tr).hasClass('child')) {
                        $tr = $tr.prev('.parent');
                    }
        
                    var data = table.row($tr).data();
                    console.log(data);
        
                    $('#firstName').val(data[1]);
                    $('#lastName').val(data[2]);
                    $('#middleName').val(data[3]);
                    $('#gender').val(data[4]);
                    $('#userame').val(data[5]);
                    $('#password').val(data[6]);
                    $('#advisory').val(data[7]);
        
                    $('#editForm').attr('action', '/admin/faculty/'+data[0]);
                    $('#editFaculty').modal('show');
                });
                //End Edit Record
            });


              //
            //Enrolling New Student Script
            var modal = document.getElementById('enrollNew');

            // Get the button that opens the modal
            // var btn = document.getElementById('new')
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
            modal.style.display = "block";
            }

            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }


            
            // When the user clicks on <span> (x), close the modal
            // span.onclick = function() {
            // modal.style.display = "none";
            // }
            // // When the user clicks anywhere outside of the modal, close it
            // window.onclick = function(event) {
            // if (event.target == modal) {
            // modal.style.display = "none";
            // }
            // }

            /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

             //Enrolling Transferee Student

             var modal = document.getElementById('enrollTransferee');

// Get the button that opens the modal


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

//New Faculty Script

var modal = document.getElementById('newFaculty');
var modal = document.getElementById('editFaculty');
// Get the button that opens the modal

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

//Grade and Section
var modal = document.getElementById('newGradeandSection');

// Get the button that opens the modal

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

//Track and Strand Script
var modal = document.getElementById('newTrackandStrand');


  
        });