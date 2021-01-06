<?php include"conn.php"; ?>
<?php include"server.php"; ?>

<!DOCTYPE html>

<html>

<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="css/registerpage.css">
  <link rel="stylesheet" type="text/css" href="css/stylehome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="jquery-3.5.1.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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

        <button class="nav-li-button-sign-in"><a class="nav-a" id="sign-in-nav" href="register.php">Sign In</a></button>
        <li class="nav-li"><a class="nav-a" href="#">Support</a></li>
        <li class="nav-li"><a class="nav-a" href="register.php">Pricing</a></li>


    </ul>


</nav>
<div data-aos="zoom-in-up" data-aos-duration="2000">

<form action="register.php" method="POST" class="register-form">

  	<?php include('errors.php'); ?>
    <span class="form-head" align="center">Sign Up</span>

    <label class="form-label">Username</label>
        <input class="form-input" type="text" placeholder="Enter Your Name..." name="username">

    <label class="form-label">E-mail</label>
        <input class="form-input" type="email" placeholder="Enter Your E-mail..." name="email">

    <label class="form-label">Password</label>
        <input class="form-input" type="password" placeholder="Enter Password..." name="password_1">
		
	<label class="form-label">Confirm-Password</label>
        <input class="form-input" type="password" placeholder="Enter Password..." name="password_2">

    <label class="form-label">PhoneNumber</label>
    <input  class="form-input" type="tel"  placeholder="Enter phone number" name="phone">

    <label class="form-label">Address</label>
        <input class="form-input" type="text" placeholder="enter Your Address..." name="address">

    <label class="form-label">National ID</label>
        <input class="form-input" type="number" placeholder="Enter Your National ID" name="nationalID">

    <label class="form-label">Gender</label>
        <select class="form-select" name="gender">
            <option>male</option>
            <option>female</option>
        </select>

    <label class="form-label">Age</label>
        <input class="form-input" type="number" placeholder="Enter Your Age ..." name="age">

    <input class="submit-btn" type="submit" name="submit" value="Sign Up">
    <p class="already_have_account_p"><a href="login.php" class="already_have_account_a">Already have an Account ?</a></p>
</form>
</div>
</div>
<script>
    AOS.init();
</script>
</body>
</html>