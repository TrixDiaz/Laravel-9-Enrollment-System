<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title> AMLAC Senior High School Enrollment</title>
        <!----======== CSS ======== -->
        <link href="/css/home.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/72ceecc077.js" crossorigin="anonymous"></script>

    </head>

    <body>

    
        <section class="sub-header">
            <nav>
                <a href="/homepage"><img src="/images/channels4_profile.jpg"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-solid fa-circle-xmark" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="{{('/homepage')}}">Home</a> </li>
                        <li><a href="{{('/course')}}">Course</a> </li>
                        <li><a href="{{('/about')}}">About</a> </li>
                        <li><a href="">Contact</a> </li>
                        <li><a href="{{('/Login')}}">Login</a> </li>
                    </ul>

                </div>
                <i class="fa fa-solid fa-bars-progress" onclick="showMenu()"></i>
            </nav>
            <h1>Contact Us</h1>
        </section>
<!------ Course --------->
<section class="section-contact">
    <div class="container">
        <form>
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input 
                    type="text" name="firstname" id="firstname" required class="form-element"placeholder="Diosd.." />
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" required class="form-element" placeholder="Feli.." />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required class="form-element" placeholder="diosd..@example.com" />
            </div>

            <div class="form-group full">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-element" placeholder="Input Message Here!!"></textarea>
            </div>
            <div class="submit-group">
                <input type="submit" value="SEND MESSAGE" />
            </div>
        </form>
    </div>
</section>

<!----------FOOTER------------->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="{{('/course')}}">Course</a></li>
                    <li><a href="{{('/about')}}">About</a></li>
                    <li><a href="{{('/contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>

                </ul>
            </div>
            <div class="footer-col">
                <h4>Address</h4>
                <ul>
                <p style="color:#bbbbbb";>Paseo del Carmen St. Amlac Ville Subdivision, Payatas B. Quezon City </p>
                        
                    </p>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-----JavaScript for Toggle Menu--->
        <script>
            var navLinks = document.getElementById("navLinks");

            function showMenu(){
                navLinks.style.right = "0";
            }

            function hideMenu(){
                navLinks.style.right = "-200px";
            }


        </script>
    </body>
</html>