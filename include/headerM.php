<link rel="stylesheet" href="assets/css/animation.css">
</head>




<body>
    <header>


        <section class="top-bar">
            <div class="container" style='display:flex;justify-content: space-between;'>

                <div style='display:flex;gap:30px;align-items:center' id='first'>
                    <a href="" style="align-items: center; display:flex">
                        <img src="assets/icons/phone_icons.png" alt="phone">
                        <h3 class="first-h3">01980533510</h3>
                    </a>
                    <a href="mailto:createofbrand@gmail.com" style="align-items: center; display:flex">
                        <img src="assets/icons/top-mail.png" alt="Mail">
                        <h3>createofbrand@gmail.com</h3>
                    </a>
                </div>


                <!--login information-->
                <div style='display:flex;gap:30px;align-items:center'>
                    <?php
                    if (!isset($_COOKIE[md5('name')])) {
                    ?>
                        <a href="loginSign.php?log=login" style="align-items: center; display:flex" name="login" class="userInfLog">
                            <img src="assets/icons/login.png" alt="phone">
                            <h3 class="first-h3">Login</h3>
                        </a>
                        <a href="loginSign.php?log=signup" name="signup" class="userInfLog" style="align-items: center; display:flex"> <img src="assets/icons/create-account.png" alt="phone">
                            <h3 class="first-h3">Create Account</h3>
                        </a>
                    <?php
                    } else {
                    ?>
                        <a href="loginSign.php?log=logout" name="logout" class="userInfLog">Logout</a>
                    <?php
                    }

                    ?>

                </div>

                <!-- End login information-->

            </div>
        </section>

        <nav>
            <div class="container">
                <div class="logo"><a href="index.php"><img style="width:70px;height:70px;padding-bottom:20px" src="assets/images/logo-01.svg" ></a>
                </div>
                <ul class="main_menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="dorp_down_a" href="service.php">Our Services <img src="assets/icons/mingcute_down-line.png"></a>
                        <div class="drop_menu">
                            <ul class="drop-down">
                                <li><a href="">Web Development </a></li>
                                <li><a href="">Web Design</a></li>
                                <li><a href="">SEO</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="dorp_down_a" href='our-team.php'>Our Team</a>
                    </li>
                    <li><a href="about-us.php">About</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                    <li><a href="our-work.php">Our Project</a></li>
                    <!-- <li><a href="our-work.php" class="dorp_down_a">Our Project <img src="assets/icons/mingcute_down-line.png"></a>
                        <div class="drop_menu">
                            <ul class="drop-down">
                                <li><a href="our-work.php">Our Work </a></li>
                                <li><a href="">Web Design</a></li>
                                <li><a href="">SEO</a></li>
                            </ul>
                        </div>
                    </li> -->

                    <li><a href="blog.php">Blog</a></li>
                    <?php if (isset($_COOKIE[md5('name')])) {  ?>
                        <li><a href="" style="padding: 0;"><img src="assets/images/e.jpg" alt="" srcset="" width="50px" height="50px" style="border-radius: 25px;"></a></li>
                    <?php } ?>
                </ul>
                <div class="menu-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </nav>
    </header>
    <main>