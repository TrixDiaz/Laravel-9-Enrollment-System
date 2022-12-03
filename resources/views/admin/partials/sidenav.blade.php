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
                    {{-- <li class="bottom-content">
                    <a href="{{('/admin/admindashboard')}}">
                        <i class='bx bx-home icon'  ></i>
                        <span class="text nav-text">Admin Dashboard</span>
                    </a>
                    </li> --}}
                    <li class="bottom-content">
                        <a href="{{('/admin/enroll/')}}">
                            <i class='bx bxs-user icon' ></i>
                            <span class="text nav-text">Students</span>
                        </a>
                        </li>
                        <li class="bottom-content">
                            <a href="{{('/admin/faculty/')}}">
                                <i class='bx bxs-group icon'></i>
                                <span class="text nav-text">Faculty</span>
                            </a>
                            </li>
                         
                            <li class="bottom-content">
                                <a href="{{ ('/admin/gradeandsection/') }}">
                                    <i class='bx bxs-widget icon' ></i>
                                    <span class="text nav-text">Grade and Section</span>
                                </a>
                                </li>
                                    <li class="bottom-content">
                                        <a href="{{('/admin/trackandstrand')}}">
                                            <i class='bx bx-user-pin icon'></i>
                                            <span class="text nav-text">Track and Strand</span>
                                        </a>
                                        </li>
                                        <li class="bottom-content">
                                            <a href="{{ ('/admin/departments') }}">
                                                <i class='bx bxs-institution icon' ></i>
                                                <span class="text nav-text">Department</span>
                                            </a>
                                            </li>
                                        <li class="bottom-content">
                                            <a href="{{ ('/admin/subjects') }}">
                                                <i class='bx bxs-book-add icon' ></i>
                                                <span class="text nav-text">Subjects</span>
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