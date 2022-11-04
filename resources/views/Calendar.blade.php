<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- Js --->
        <!--- CSS --->
        <link href="/css/style.css" rel="stylesheet">
        <!-- BOX icons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/72ceecc077.js" crossorigin="anonymous"></script>
        <!-- Calendar -->
        <link href="/css/calendar.css" rel="stylesheet">

        <title> Academic Calendar </title>
        <body>
        </body>
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
                                    <a href="#">
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
                                                <a href="{{('/studentpro')}}">
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
                </nav>
        </body>
                

                <section class="home">
                    <div class="text">Calendar</div>
                </section>
                
                <body>
                <div class="calendar disable-selection" id="calendar">
                    <div class="left-side">
                        <div class="current-day text-center">
                            <h1 class="calendar-left-side-day"></h1>
                            <div class="calendar-left-side-day-of-week"></div>
                        </div>
                        <div class="current-day-events">
                            <div>Current Events:</div>
                            <ul class="current-day-events-list"></ul>
                        </div>
                        <div class="add-event-day">
                            <input type="text" class="add-event-day-field" placeholder="Create an Event">
                        
                            <span class="fa fa-solid fa-circle-plus cursor-pointer add-event-day-field-btn"></span>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="text-right calendar-change-year">
                            <div class="calendar-change-year-slider">
                                <span class="fa fa-caret-left cursor-pointer calendar-change-year-slider-prev"></span>
                                <span class="calendar-current-year"></span>
                                <span class="fa fa-caret-right cursor-pointer calendar-change-year-slider-next"></span>
                            </div>
                        </div>
                        <div class="calendar-month-list">
                            <ul class="calendar-month"></ul>
                        </div>
                        <div class="calendar-week-list">
                            <ul class="calendar-week"></ul>
                        </div>
                        <div class="calendar-day-list">
                            <ul class="calendar-days"></ul>
                        </div>
                    </div>
                </div>

                
                <script src="/js/script.js"></script>
                <script src="/js/calendar.js"></script>

       
        </html>