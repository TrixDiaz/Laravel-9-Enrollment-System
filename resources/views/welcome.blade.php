<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- Js --->
        <!--- CSS --->
        <link href="/css/style.css" rel="stylesheet">
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
                            <a href="{{('/Calendar')}}">
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
                                        <a href="{{('/studentpro')}}">
                                            <i class='bx bx-user-pin icon'></i>
                                            <span class="text nav-text">Student Profile</span>
                                        </a>
                                        </li>
                                        {{-- <li class="nav-link">
                                            <a href="">
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
            <div class="text">Dashboard</div>
            

        </section>
        <script src="/js/script.js"></script>    
</body>
</html>