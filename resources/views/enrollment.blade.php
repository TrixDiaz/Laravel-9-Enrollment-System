<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/css/enroll.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="enrollment" method="POST">
            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="firstName"  placeholder="Enter your First Name" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lastName" placeholder="Enter your Last Name" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" name="middleName" placeholder="Enter your Middle Name" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobileNumber"placeholder="Enter Mobile Number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender"required>
                                <option disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <select name="studentOccupation"required>
                                <option disabled selected>Select Occupation</option>
                                <option value="Student">Student</option>
                                <option value="Working">Working</option>
                                <option value="N/A">N/A</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">For School</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Date Of Birth</label>
                            <input type="date" name="dateOfBirth"required>
                        </div>

                        <div class="input-field">
                            <label>AGE</label>
                            <input type="number" name="age" placeholder="Enter Your Age" required>
                        </div>

                        <div class="input-field">
                            <label>Place Of Birth</label>
                            <input type="text" name="placeOfBirth" placeholder="Enter Your Placed Of Birth" required>
                        </div>

                        <div class="input-field">
                            <label>Your Email</label>
                            <input type="Email" name="email"placeholder="Enter your Email" required>
                        </div>

                        <div class="input-field">
                            <label>Your Track</label>
                            <select name="track"required>
                                <option disabled selected>Select Track</option>
                                <option value="ABM">ABM-Accountancy, Business, and Management</option>
                                <option value="STEM">STEM-Science, Technology, Engineering and Mathematics.</option>
                                <option value="GAS">GAS-General Academic Strand</option>
                                <option value="HUMSS">HUMSS-Humanities and Social Sciences</option>
                                <option value="TVL">TVL-Technical-Vocational-Livelihood Strand</option>
                            
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Your Grades</label>
                            <select name="grade"required>
                                <option disabled selected>Select Year Grades</option>
                                <option value="Grade 11">GRADE 11</option>
                                <option value="Grade 12">GRADE 12</option>
                                
                            </select>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Permanent Address</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>House No./Street</label>
                            <input type="text" name="houseNumber"placeholder="Your House No." required>
                        </div>

                        <div class="input-field">
                            <label>Street Name</label>
                            <input type="text" name="streetName"placeholder="Enter Street Name" required>
                        </div>

                        <div class="input-field">
                            <label>Baranggay</label>
                            <input type="text" name="baranggay"placeholder="Enter your Baranggay" required>
                        </div>

                        <div class="input-field">
                            <label>Municipality/City</label>
                            <input type="text" name="city"placeholder="Enter your Municipality" required>
                        </div>

                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" name="province"placeholder="Enter Province" required>
                        </div>

                        <div class="input-field">
                            <label>Zip Code</label>
                            <input type="text" name="zipCode"placeholder="Enter Zip Code" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" name="motherName"placeholder="Enter Mother Name" required>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <select name="motherOccupation"required>
                                <option disabled selected>Select Occupation</option>
                                <option value="Working">Working</option>
                                <option value="Housewife">Housewife</option>
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="text" name="motherContactNumber"placeholder="Enter Contact Number" required>
                        </div>

                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="fatherName"placeholder="Enter Fathers Name" required>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <select name="fatherOccupation"required>
                                <option disabled selected>Select Occupation</option>
                                <option value="Working">Working</option>
                                <option value="Housewife">Housewife</option>
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="text" name="fatherContactNumber"placeholder="Enter Contact Number" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button type="submit" class="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="/js/enroll.js"></script>-->
</body>
</html>
