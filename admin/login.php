<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My css -->
    <link rel="stylesheet" href="css/login.css">

    <!-- W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Font awesome 5 -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!--Get your code at fontawesome.com-->

    <!-- Icon page -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <title>art</title>
</head>

<body>
    <div class="login-box">
        <div class="w3-display-container" style="height: 30px;">
            <div class="w3-display-topleft" style="color: white; left:30px;">Sign In</div>
            <div class="w3-display-topright" style="color: white; right:30px;">Sign Up</div>
        </div>
        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
        <label for="reg-log"></label>
        <div class="card-3d-wrap">
            <div class="card-3d-wrapper">
                <!-- login -->
                <div class="signin-form">
                    <h2>Sign In</h2>
                    <form action="">
                        <div class="user-box">
                            <input type="text" name="" required>
                            <label>Username</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="" required>
                            <label>Password</label>
                        </div>
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <button class="w3-button" style="padding: 0;">Submit</button>
                        </a>
                        <a href="enterEmail.php" style="font-size: 10px; margin-left: 27px;">Forgot your password?</a>
                    </form>
                </div>
                <!-- signin -->
                <div class="signup-form">
                    <h2>Sign Up</h2>
                    <form action="">
                        <div class="user-box">
                            <input type="text" name="" required>
                            <label>Username</label>
                        </div>
                        <div class="user-box">
                            <input type="mail" name="" required>
                            <label>Username</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="" required>
                            <label>Password</label>
                        </div>
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <button class="w3-button" style="padding: 0;">Submit</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>