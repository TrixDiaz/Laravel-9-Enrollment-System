<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- Js --->
        <!--- CSS --->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/password.css" rel="stylesheet">
        <!-- BOX icons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title> Password </title>
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
                    <span class="profession">Senior Highschool</span>
            </div>
            <i class='bx bx-chevrons-right toggle'></i>
        </header>
        <div class="menu-bar"> 
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                    <a href="{{url('/dashboard')}}">
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
                                        <a href="{{url('/Student')}}">
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
        <div>
            
        </div>        
    </nav>
        
        <section class="home">
            <div class="text">Password</div>
            <body>
                <div class="login-wrapper">
                    <form action="" class="form">

                <div class="input-group">
                    <input type="password" name="newpassword" id="newpassword" required>
                    <label for="newpassword">New Password</label>


                </div>

                <div class="input-group">
                    <input type="password" name="confirmpassword" id="confirmpassword" required>
                    <label for="confirmpassword">Confirm Password</label>

                    
                </div>

                <div class="input-group">
                    <input type="password" name="currentpassword" id="currentpassword" required>
                    <label for="currentpassword">Current Password</label>

                    
                </div>

                <input type="submit" value="Login" class="submit-btn">
               
                </form>
            </body>
            </div>

        </section>
    
       
        <script src="/js/script.js"></script>
</body>
</html>