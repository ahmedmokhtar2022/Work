<!DOCTYPE html>

<html>
<head>

    <link rel="stylesheet" type="text/css" href="css/stylehome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="jquery-3.5.1.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/155b759069.js" crossorigin="anonymous"></script>

</head>
<body>
<nav class="nav-bar">
    <a href="home.php" class="site_logo_div">
       <span class="site_name">WING</span>
        <img src="img/logo.png" class="site_logo">
    </a>

    <ul class="nav-ul">
        <li class="nav-li" style="background: #1e1e1e; color: white;"><a class="nav-a" href="#" style="color: white;">Home</a></li>
        <li class="nav-li"><a class="nav-a" href="#">Create</a>
            <div class="drop-contain">
                <div class="drop-elements">
                    <div class="drop-li"><a class="nav-drop-a" href="#">Hire Website</a></div>
                    <div class="drop-li"><a class="nav-drop-a" href="#">BUY Custom Website</a></div>
                </div>
            </div>

        </li>

        <button class="nav-li-button-sign-in"><a class="nav-a" id="sign-in-nav" href="login.php">Sign In</a></button>
        <li class="nav-li"><a class="nav-a" href="#">Support</a></li>
        <li class="nav-li"><a class="nav-a" href="register.php">Pricing</a></li>


    </ul>


</nav>
<!------------------------------------------HEADER---------------------------------------------------->
<div data-aos="zoom-out" data-aos-duration="2000">

<div class="home-page-head" id="fade_header_scroll">
    <h1 class="header-text1">Now We Make it Easy for You</h1>
    <h2 class="header-text2">Create or Hire A website on a finger snaps</h2>
    <button class="get_started_btn"><a href="register.php" class="get_started_a">Get Started</a></button>
</div>

</div>
<div class="home-background-image1" ></div>



<!----------------------------------------- CARDS View------------------------------------------------->
<div class="home-background-image2">

<div data-aos="fade-up" data-aos-duration="2000">

<center>
    <div class="cards-section-home" id="men_section_home">
        <a href="#" class="links">
            <div class="card">
                <div class="card-image"><img class="card-image" src="img/pre.jpg"></div>
                <div class="card-text">
                    <h2>pre-Build</h2>
                </div>
                <div class="card-stats">
                    <div class="stat">View</div>

                </div>
            </div>
        </a>
        <a href="#" class="links">

            <div class="card">
                <div class="card-image"><img class="card-image" src="img/gear.png"></div>
                <div class="card-text">
                    <h2>Custom Build</h2>
                </div>
                <div class="card-stats">
                    <div class="stat">View</div>

                </div>
            </div>
        </a>

    </div>
</center>
</div>
</div>

<div class="section-2">
<!------------------------------------------------------------------Decribing----------------------------->
<div class="description_div">

        <h1 class="description">Fast, secure and always online.</h1>
        <h2 class="description">Protect your data and your customers.</h2>
        <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <img src="img/2.jpg" class="img_description1">
        </div>
</div>

<div class="description_div2">

    <h1 class="description2">Grow online.</h1>
    <h2 class="description2">Increase Your Customers & level Up in the Market.</h2>
    <div data-aos="fade-right" data-aos-duration="2000">
    <img src="img/food.jpg" class="img_description2">
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------->
</div>

<!-----------------------------------------------F O O T E R---------------------------------------------------------->

<div class="footer">

   <div class="footer-left-section">
       <div class="footer-left-section-div"><h3 class="footer-left-section-h3">W I N G</h3> <img src="img/logo.png" class="footer-site-logo"></div>
       <p class="footer-left-section-p">Our Company is A leading for simplicity for making sites that facilities the technology
       marketing and trading ,also enhance customers reachness on a single piece of smart phone or laptops.
           Now you can design and create your own site on your own</p>
   </div>

    <div class="footer-middle-section">
        <h3 class="footer-middle-section-h3">Contact</h3>
        <p class="footer-middle-section-p">
           <div class="footer-middel-row-one"> <span class="footer-email-span"> <i class="far fa-envelope"> </i> E-mail:</span> <span class="footer-email-word-span">WingCompany.org@gmail.com</span></div>
           <div class="footer-middel-row-two"> <span class="footer-email-span"> <i class="fas fa-phone-alt"></i> Phone:</span> <span class="footer-email-word-span">010-9700-5710</span></div>

        </p>

    </div>

    <div class="footer-right-section">
        <h3 class="footer-right-section">Services</h3>

        <div class="footer-right-section">
             <div class="footer-right-section-div"><a class="footer-right-a" href="#">Plans</a></div>
             <div class="footer-right-section-div"><a class="footer-right-a" href="#">Facilities</a></div>
             <div class="footer-right-section-div"><a class="footer-right-a" href="#">Host & Domain</a></div>
             <div class="footer-right-section-div"><a class="footer-right-a" href="#">Custom Creation</a></div>
        </div>
    </div>

</div>

<script>
    AOS.init();
</script>
</body>
</html>