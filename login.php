<?php include"conn.php"; ?>
<?php include"server.php"; ?>

<!DOCTYPE html>

<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/stylehome.css">
    <script src="jquery-3.5.1.js"></script>
</head>

<body>

<nav class="nav-bar">
    <a href="home.php" class="site_logo_div">
        <span class="site_name">WING</span>
        <img src="img/logo.png" class="site_logo">
    </a>

    <ul class="nav-ul">
        <li class="nav-li" style="background: #1e1e1e; color: white;"><a class="nav-a" href="Home.php" style="color: white;">Home</a></li>
        <li class="nav-li"><a class="nav-a" href="#">Create</a>
            <div class="drop-contain">
                <div class="drop-elements">
                    <div class="drop-li"><a class="nav-drop-a" href="#">Hire Website</a></div>
                    <div class="drop-li"><a class="nav-drop-a" href="#">BUY Custom Website</a></div>
                </div>
            </div>

        </li>

        <button class="nav-li-button-sign-in"><a class="nav-a" id="sign-in-nav" href="register.php">Sign Up</a></button>
        <li class="nav-li"><a class="nav-a" href="#">Support</a></li>
        <li class="nav-li"><a class="nav-a" href="register.php">Pricing</a></li>


    </ul>


</nav>
<form class="login-form" action="login.php" method="POST">
    <?php include('errors.php'); ?>

    <div class="form-head">Sign In</div>

    <label class="form-label">Username</label>
    <input type="text" name="username" class="form-input">

    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-input">

    <input type="submit" name="login_submit" class="form-submit-login">

    <p class="creat_new_account_p"><a href="register.php" class="create_new_acount_a">Create New Account ?</p>
</form>

</body>
</html>