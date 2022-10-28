<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- Js --->
        <!--- CSS --->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/studentinformation.css" rel="stylesheet">
        <!-- BOX icons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title> Dashboard </title>
    </head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/images/channels4_profile.jpg" alt='logo'>
                
                </span>
                <div class="text header-text">
                    <span class="name"> Amlac</span>
                    <span class="profession">Senior High School</span>
            </div>
            <i class='bx bx-chevrons-right toggle'></i>
        </header>
        <div class="menu-bar"> 
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                    <a href="{{('/dashboard')}}">
                        <i class='bx bx-home icon'  ></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{('/Password')}}">
                            <i class='bx bx-lock icon' ></i>
                            <span class="text nav-text">Password</span>
                        </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{url('/Calendar')}}">
                                <i class='bx bx-calendar icon'></i>
                                <span class="text nav-text">Calendar</span>
                            </a>
                            </li>
                         

                                <li class="nav-link">
                                    <a href="#">
                                        <i class='bx bx-registered icon' ></i>
                                        <span class="text nav-text">Registration</span>
                                    </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="#">
                                            <i class='bx bx-user-pin icon'></i>
                                            <span class="text nav-text">Student Profile</span>
                                        </a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">
                                                <i class='bx bxs-graduation icon' ></i>
                                                <span class="text nav-text">Grades</span>
                                            </a>
                                            </li>
                                            <li class="nav-link">
                                                <a href="#">
                                                    <i class='bx bxs-user-account icon' ></i>
                                                    <span class="text nav-text">Setting</span>
                                                </a>
                                                </li>
                                 
                                                
                                                    <form action='/logout' method="POST">
                                                        @csrf
                                                     <li class="bottom-content">
                                                        <button id = "btn" >
                                                            <i class='bx bx-log-out icon' ></i>
                                                            <span class="text nav-text">Logout</span>
                                                        </button>
                                                            
                                                        </a>
                                                        </li>
                                                    </form>
                                                        
                                                        <li class="mode">
                                                            <div class="moon-sun">
                                                                <i class='bx bx-moon icon moon'> </i>
                                                                <i class='bx bx-sun icon sun' > </i>
                                                            </div>
                                                            <span class="mode-text text"> Dark Mode</span>
                                                            <div class="toggle-switch">
                                                                <span class="switch"></span>
                                                            </li>
                </ul>
            </div>
        </div>
        </nav>
        <section class="home">
            <div class="text">Student Profile</div>
        
            <body>
                
                <div class="profile-pic-div">
                  <img src="/images/image.jpg" id="photo">
                  <input type="file" id="file">
                  <label for="file" id="uploadBtn">Choose Photo</label>
                </div>
                
                <script src="app.js"></script>
                
                </body>


                <div class="body1">
                <div class="box">
        <header>Instructions</header>
        <h6>1. Student application must fill out this correctly</h6>
        <h6>2. Print all the necessary information, if an item is not applicable</h6>
        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Program information</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Department</label>
                            <input type="text" placeholder="Example Senior High" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Year Level</label>
                            <select required>
                                <option disabled selected>Select Year Level</option>
                                <option>Grade 11</option>
                                <option>Grade 12</option>
                            </select>
                        </div>

                                <div class="input-field">
                            <label>Strand</label>
                            <select required>
                                <option disabled selected>Select Strand</option>
                                <option>ABM</option>
                                <option>STEM</option>
                                <option>GAS</option>
                                <option>HUMS</option>
                                <option>TVL</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Last School Attended</label>
                            <input type="text" placeholder="Enter your Last School" required>
                        </div>

                        <div class="input-field">
                            <label>Program 2nd choice</label>
                            <select required>
                                <option disabled selected>Program 2nd choice</option>
                                <option>ABM</option>
                                <option>STEM</option>
                                <option>GAS</option>
                                <option>HUMS</option>
                                <option>TVL</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Program 3rd choice</label>
                            <select required>
                                <option disabled selected>Program 3rd Choice</option>
                                <option>ABM</option>
                                <option>STEM</option>
                                <option>GAS</option>
                                <option>HUMS</option>
                                <option>TVL</option>
                            </select>
                        </div>
                        
                        <div class="details personal">
                    <span class="title">Personal information</span>
                    </div>
                </div>

                <div class="details ID">

                    <div class="fields">
                        <div class="input-field">
                            <label>Firstname</label>
                            <input type="text" placeholder="Enter your Firstname" required>
                        </div>

                        

                        <div class="input-field">
                            <label>Lastname</label>
                            <input type="text" placeholder="Enter your Lastname" required>
                        </div>

                        <div class="input-field">
                            <label>Middlename</label>
                            <input type="text" placeholder="Enter your Middlename" required>
                        </div>

                        
                 <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                    <div class="input-field">
                        <label>Age</label>
                    <input type="text" placeholder="Enter your Age" required>
                   </div>

                   <div class="input-field">
                         <label>Place of Birth</label>
                     <input type="text" placeholder="Enter your Place Birth" required>
                    </div>

                    <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter your mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Tel. No.</label>
                            <input type="number" placeholder="Enter your Tel. number" required>
                        </div>
                        
                        <div class="input-field">
                         <label>Country Code</label>
                     <input type="text" placeholder="Enter your country code" required>
                    </div>


                    <div class="details personal">
                    <span class="title">Present Address</span>

                    <div class="details ID">

<div class="fields">
    <div class="input-field">
        <label>Country</label>
        <input type="text" placeholder="Enter your Country" required>
    </div>

    

    <div class="input-field">
        <label>Region</label>
        <input type="text" placeholder="Enter your Region" required>
    </div>

    <div class="input-field">
        <label>Province</label>
        <input type="text" placeholder="Enter your Province" required>
    </div>
                      
    <div class="details ID">

<div class="fields">
    <div class="input-field">
        <label>Municipality</label>
        <input type="text" placeholder="Enter your Municipality" required>
    </div>

    

    <div class="input-field">
        <label>Complete Address</label>
        <input type="text" placeholder="Enter your Complete Address" required>
    </div>

    <div class="input-field">
        <label>Zip Code</label>
        <input type="text" placeholder="Enter your Zip Code" required>
    </div>


    <div class="details personal">
                    <span class="title">Permanent Address <Address></Address></span>

                    <div class="details ID">

<div class="fields">
    <div class="input-field">
        <label>Country</label>
        <input type="text" placeholder="Enter your Country" required>
    </div>

    

    <div class="input-field">
        <label>Region</label>
        <input type="text" placeholder="Enter your Region" required>
    </div>

    <div class="input-field">
        <label>Province</label>
        <input type="text" placeholder="Enter your Province" required>
    </div>
                      
    <div class="details ID">

<div class="fields">
    <div class="input-field">
        <label>Municipality</label>
        <input type="text" placeholder="Enter your Municipality" required>
    </div>

    

    <div class="input-field">
        <label>Complete Address</label>
        <input type="text" placeholder="Enter your Complete Address" required>
    </div>

    <div class="input-field">
        <label>Zip Code</label>
        <input type="text" placeholder="Enter your Zip Code" required>
    </div>



    <div class="details personal">
                    <span class="title">Other Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter Email" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Nationality</label>
                            <select required>
                                <option disabled selected>Select Nationality</option>
                                <option>Filipino</option>
                                <option>Others</option>
                            </select>
                        </div>

                                <div class="input-field">
                            <label>Civil Status</label>
                            <select required>
                                <option disabled selected>Select Civil Status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Widoed</option>
                                
                            </select>
                            
                        </div>

                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>

                       
                </div>
                

        </section>
        <script src="/js/script.js"></script>    
        <script src="/js/studentpro.js"></script>    
</body>
</html>