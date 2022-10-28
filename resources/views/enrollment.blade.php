<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link href="/css/enroll.css" rel="stylesheet">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
</body>
<body>

    <div class="box">
        <header>Enrollment Form</header>
        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your First Name" required>
                        </div>

                        
                 <div class="input-field">
                    <label>Last Name</label>
                          <input type="text" placeholder="Enter your Last Name" required>
                                </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter your Middle Name" required>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Enter your Occupation" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">

                    <div class="fields">
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your Email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter your mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Religion</label>
                            <input type="text" placeholder="Enter your Religion" required>
                        </div>

                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Enter your Province" required>
                        </div>

                        
                 <div class="input-field">
                         <label>Date Of Birth</label>
                     <input type="text" placeholder="Enter your Date Of Birth" required>
                    </div>

                    <div class="input-field">
                        <label>Primary Address</label>
                    <input type="text" placeholder="Enter your Primary Address" required>
                   </div>
                        

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address & School details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Barangay</label>
                            <input type="text" placeholder="Enter Barangay" required>
                        </div>

                        <div class="input-field">
                            <label>Zip Code</label>
                            <input type="text" placeholder="Enter Zipcode" required>
                        </div>

                        <div class="input-field">
                            <label>Grade</label>
                            <select required>
                                <option disabled selected>Select Grade</option>
                                <option>11</option>
                                <option>12</option>
                              
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Strand</label>
                            <select required>
                                <option disabled selected>Select Strand</option>
                                <option>GAS - General Academic Strand</option>
                                <option>HUMSS - Humanities and Social Sciences Strand</option>
                                <option>ABM - Accounting, Business and Management</option>
                                <option>STEM - Science, Technology, Engineering, and Mathematics Strand</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Enter your Address" required>
                        </div>

                        <div class="input-field">
                            <label>Schoo Last Attended</label>
                            <input type="text" placeholder="Enter your School Last Attended" required>
                        </div>
                    </div>
                </div>

                <div class="details family">

                    <div class="fields">
                        <div class="input-field">
                            <label>Name of Parent's</label>
                            <input type="text" placeholder="Enter Parent's Name" required>
                        </div>

                        <div class="input-field">
                            <label>Parent's Occupation</label>
                            <input type="text" placeholder="Enter Parent's Occupation" required>
                        </div>

                        <div class="input-field">
                            <label>Parent's Number</label>
                            <input type="number" placeholder="Enter your Parent's number" required>
                        </div>

                        <div class="input-field">
                            <label>Guardian Name</label>
                            <input type="text" placeholder="Enter Guardian Name" required>
                        </div>

                        <div class="input-field">
                            <label>Guardian Occupation</label>
                            <input type="text" placeholder="Enter Guardian Occupation" required>
                        </div>

                        <div class="input-field">
                            <label>Guardian Number</label>
                            <input type="number" placeholder="Enter your Guardian number" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="/js/enroll.js"></script>
</body>
</html>
