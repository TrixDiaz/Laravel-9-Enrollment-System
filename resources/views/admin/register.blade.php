<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link href="/css/Login.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="login-wrapper">
        <form action="/admin/store" method="POST" class="form">
       @csrf
            <img src="/images/channels4_profile.jpg" alt=''>
            <h2>Admin Register</h2>
            
            <div class="input-group">
                <input type="text" name="name" id="name" required>
                <label for="loginUser">Name</label>
            </div>

            <div class="input-group">
                <input type="email" name="email" id="email" required>
                <label for="loginUser">Email</label>
            </div>

            <div class="input-group">
            <input type="password" name="password" id="password" required>
            <label for="loginPassword">Password</label>
        </div>

        <div class="input-group">
            <input type="password" name="password_confirmation" id="password" required>
            <label for="password_confirmation">Password</label>
        </div>

        
        <input type="submit" class="submit-btn">
        <a href="/admin/Login" class="enroll">Already have an account.</a>
        </form>
            </form>
        </div>
    </div>
</body>
</html>