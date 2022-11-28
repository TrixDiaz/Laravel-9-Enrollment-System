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
                    {{-- <li class="nav-link">
                        <a href="{{('/Password')}}">
                            <i class='bx bx-lock icon' ></i>
                            <span class="text nav-text">Password</span>
                        </a>
                        </li> --}}
                        <li class="nav-link">
                            <a href="{{url('/Calendar')}}">
                                <i class='bx bx-calendar icon'></i>
                                <span class="text nav-text">Calendar</span>
                            </a>
                            </li>
                         

                                {{-- <li class="nav-link">
                                    <a href="#">
                                        <i class='bx bx-registered icon' ></i>
                                        <span class="text nav-text">Registration</span>
                                    </a>
                                    </li> --}}
                                    <li class="nav-link">
                                        <a href="#">
                                            <i class='bx bx-user-pin icon'></i>
                                            <span class="text nav-text">Student Profile</span>
                                        </a>
                                        </li>
                                            
                                        {{-- <li class="nav-link">
                                            <a href="#">
                                                <i class='bx bxs-graduation icon' ></i>
                                                <span class="text nav-text">Grades</span>
                                            </a>
                                            </li> --}}
                                            
                                 
                                                
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
                  <input type="file" name="image"id="photo">
                  <label for="file" id="uploadBtn">Choose Photo</label>
                </div>

               
                
                <script src="app.js"></script>
                
                </body>


                <div class="body1">
                <div class="box">
        <header>Instructions</header>
        <h6>1. Student application must fill out this correctly</h6>
        <h6>2. Print all the necessary information, if an item is not applicable</h6>
        <form action="/studentpro" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form first">
                <div class="details personal">

                        <div class="details personal">
                    <span class="title">Personal information</span>
                    </div>
                </div>

                <div class="details ID">

                    <div class="fields">
                        <div class="input-field">
                            <label>Firstname</label>
                            <input type="text" name="firstName"placeholder="Enter your Firstname" required>
                        </div>

                        

                        <div class="input-field">
                            <label>Lastname</label>
                            <input type="text" name="lastName" placeholder="Enter your Lastname" required>
                        </div>

                        <div class="input-field">
                            <label>Middlename</label>
                            <input type="text" name="middleName" placeholder="Enter your Middlename" required>
                        </div>

                        
                 <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dateOfBirth"placeholder="Enter birth date" required>
                        </div>

                    <div class="input-field">
                        <label>Age</label>
                    <input type="text" name="age"placeholder="Enter your Age" required>
                   </div>

                   <div class="input-field">
                         <label>Place of Birth</label>
                     <input type="text" name="placeOfBirth"placeholder="Enter your Place Birth" required>
                    </div>

                    <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobileNumber"placeholder="Enter your mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Tel. No.</label>
                            <input type="number" name="telephoneNumber"placeholder="Enter your Tel. number" required>
                        </div>
                        
                        <div class="input-field">
                         <label>Country Code</label>
                     <input type="text"name="countryCode" placeholder="Enter your country code" required>
                    </div>

    <div class="details personal">
                    <span class="title">Permanent Address <Address></Address></span>

                    <div class="details ID">

<div class="fields">
    <div class="input-field">
        <label>Country</label>
        <input type="text" name="country" placeholder="Enter your Country" required>
    </div>

    

    <div class="input-field">
        <label>Region</label>
        <input type="text" name="region" placeholder="Enter your Region" required>
    </div>

    <div class="input-field">
        <label>Province</label>
        <input type="text" name="province"placeholder="Enter your Province" required>
    </div>
                      
    <div class="details ID">

<div class="fields">
    <div class="input-field">
        <label>Municipality</label>
        <input type="text" name="municipality"placeholder="Enter your Municipality" required>
    </div>

    

    <div class="input-field">
        <label>Complete Address</label>
        <input type="text" name="completeAddress"placeholder="Enter your Complete Address" required>
    </div>

    <div class="input-field">
        <label>Zip Code</label>
        <input type="text" name="zipCode"placeholder="Enter your Zip Code" required>
    </div>



    <div class="details personal">
                    <span class="title">Other Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email"placeholder="Enter Email" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Nationality</label>
                            <select name="nationality"required>
                                <option disabled selected>Select Nationality</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                                <div class="input-field">
                            <label>Civil Status</label>
                            <select name="civilStatus"required>
                                <option disabled selected>Select Civil Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widoed">Widoed</option>
                                
                            </select>
                            
                        </div>

                      
                        <button class="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                        <button class="nextBtn">
                            <a class ="btnText" href="{{url('/Student')}}" class="btnText">EDIT</a>
                            <i class="uil uil-navigator"></i>
                        </button>




                    </div>

                       
                </div>
                

        </section>
        <script src="/js/script.js"></script>    
        <script src="/js/studentpro.js"></script>    
</body>
</html>