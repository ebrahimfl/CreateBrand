</head>




<body>
    <header>

        
            <section class="top-bar">
                <div class="container">
                    
                        <a href="" style="align-items: center; display:flex">
                        <img src="assets/icons/phone_icons.png" alt="phone">
                        <h3 class="first-h3">01980533510</h3>
                        </a>
                        <a href="" style="align-items: center; display:flex">
                            <img src="assets/icons/top-mail.png" alt="Mail">
                            <h3>createbrand.team@gmail.com</h3>
                        </a>

                    
                

                <!--login information-->
                
                    <?php
                        if (!isset($_COOKIE[md5('name')])) {
                    ?>
                            <a href="loginSign.php?log=login" name="login" class="userInfLog">Login</a>
                        <a href="loginSign.php?log=signup" name="signup" class="userInfLog">Create Account</a>
                    <?php
                        }else{
                    ?>
                            <a href="loginSign.php?log=logout" name="logout" class="userInfLog">Logout</a>
                    <?php
                        }
                    
                    ?>
                    
                
                
                <!-- End login information-->
                
                </div>
            </section>
        
        <nav>
            <div class="container">
                <div class="logo">
                    <h2><a href="index.php">Create Brand</a></h2>
                </div>
                <ul class="main_menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="dorp_down_a"  href="service.php">Our Services <img src="assets/icons/mingcute_down-line.png"></a>
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
                    <li><a href="our-work.php" class="dorp_down_a">Our Project <img src="assets/icons/mingcute_down-line.png"></a>
                        <div class="drop_menu">
                            <ul class="drop-down">
                                <li><a href="our-work.php">Our Work </a></li>
                                <li><a href="">Web Design</a></li>
                                <li><a href="">SEO</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li><a href="blog.php">Blog</a></li>

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

