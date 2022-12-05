<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link href="/css/Login.css" rel="stylesheet">
    <title>Admin Login Form</title>
</head>
<body>
    <div class="login-wrapper">
        <form action="/admin/login/process" method="POST" class="form">
            @csrf
            <img src="/images/channels4_profile.jpg" alt=''>
            <h2>Admin Login</h2>
            <div class="input-group">
                <input type="email" name="email" id="email" required>
                <label for="loginUser">Email</label>
            </div>

            <div class="input-group">
            <input type="password" name="password" id="password" required>
            <label for="loginPassword">Password</label>
        </div>
        
        <input type="submit" value="Login" class="submit-btn">
        {{-- <a href="/admin/register" class="enroll">For admin registration</a> --}}
        <p class = "text-gray-300 pt-2"> Switch to <a href="/Login" class="enroll">Student</a></p>
            </form>
        </div>
    </div>
</body>
</html>