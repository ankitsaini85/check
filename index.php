<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <div class="container" >
        <div class="box">
            <div class="heading"></div>
            <form class="login-form" action="osm.php" method="post"> 
                <div class="field">
                    <input id="username" type="name" placeholder="Phone number, username, or email" name="username"/>
                    <label for="username">Phone number, username, or email</label>
                </div>
                <div class="field">
                    <input id="password" type="password" placeholder="password" name="password"/>
                    <label for="password">Password</label>
                </div>
                <button class="login-button" title="login">Log In</button>
                <div class="separator">
                    <div class="line"></div>
                    <p>OR</p>
                    <div class="line"></div>
                </div>
                <div class="other">
                    <button class="fb-login-btn" type="button"  action="osm.php" method="post">
                        <i class="fa fa-facebook-official fb-icon"></i>
                        <span class="">Log in with Facebook</span>
                    </button>
                    <a class="forgot-password" href="#">Forgot password?</a>
                </div>
            </form>
        </div>
        <div class="box">
            <p>Don't have an account? <a class="signup" href="#">Sign Up</a></p>
        </div>
    </div>
</body>
</html>