<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/all.css" rel="stylesheet">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/all.min.css" rel="stylesheetu7y6">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/brands.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/brands.min.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/fontawesome.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/fontawesome.min.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/regular.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/regular.min.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/solid.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/solid.min.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/svg-with-js.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/svg-with-js.min.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/v5-font-face.min.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/v5-font-face.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/v4-shims.min.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/v4-shims.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/v4-font-face.min.css">
    <link href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/v4-font-face.css">
    <link href="style.css" rel="stylesheet">
    <title>register form</title>
</head>
<body>
    <div class="container" id="signup" style="display: none;">
        <h1 class="ft">Register</h1>
        <form method="post" action="register.php">
            <div class="input">
                <i class="fa fa-user"></i>
                <input id="fname" placeholder="first name" type="text" name="fname">
                <label for="fname">first name</label>
            </div>
            <div class="input">
                <i class="fa fa-user"></i>
                <input id="lname" placeholder="last name" type="text" name="lname">
                <label for="lname">last name</label>
            </div>
            <div class="input">
                <i class="fa fa-envelope"></i>
                <input id="email" placeholder="email" type="text" name="email">
                <label for="email">email</label>
            </div>
            <div class="input">
                <i class="fa fa-key"></i>
                <input id="pass" placeholder="password" type="password" name="pass" required>
                <label for="pass">password</label>
            </div>
            <input type="submit" class="btn" value="SIGN UP" name="signup">
        </form>
        <p class="or">
            ------------or-----------
        </p>
        <div class="icons">
            <i class="fa fa-circle"></i>
            <i class="fa fa-message"></i>
        </div>
        <div class="links">
            <p>already have account ?</p>
            <button id="signinbutton">SIGN IN</button>
        </div>
    </div>
    <div class="container" id="signin">
        <h1 class="ft">SIGN IN</h1>
        <form method="post" action="register.php">
            <div class="input">
                <i class="fa fa-envelope"></i>
                <input id="email" placeholder="email" type="text" name="email">
                <label for="email">email</label>
            </div>
            <div class="input">
                <i class="fa fa-key"></i>
                <input id="pass" placeholder="password" type="password" name="pass" required>
                <label for="pass">password</label>
            </div>
            <p class="recover">
                <a href="#">recover password</a>
            </p>
            <input type="submit" class="btn" value="SIGN IN" name="signin">
        </form>
        <p class="or">
            ------------or-----------
        </p>
        <div class="icons">
            <i class="fa fa-circle"></i>
            <i class="fa fa-message"></i>
        </div>
        <div class="links">
            <p>dont have account yet?</p>
            <button id="signupbutton">SIGN UP</button>
        </div>
    </div>
    <script src="java.js"></script>
</body>
</html>