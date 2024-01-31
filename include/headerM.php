<link rel="stylesheet" href="assets/css/animation.css">

</head>

<body>

    <?php if (isset($_SESSION['alert'])) { ?>


        <div class="overlay" id="overlay"></div>

        <div class="modal" id="dangerModal">
            <div class="modal-content">
                <h4>Danger Alert</h4>
                <p><?php
                    if ($_SESSION['alert']['type'] == 'danger')
                        echo $_SESSION['alert']['message']; ?></p>

                <button class="btn btn-danger" onclick="closeModal('dangerModal', 'overlay')">Close</button>
            </div>
        </div>

        <div class="modal" id="successModal">
            <div class="modal-content">
                <h4>Success Alert</h4>
                <p><?php
                    if ($_SESSION['alert']['type'] == 'success') echo $_SESSION['alert']['message'];
                    ?></p>
                <button class="btn btn-success" onclick="closeModal('successModal', 'overlay')">Close</button>
            </div>
        </div>


    <?php
    }

    ?>





    <header class="active_nav">
        <section class="top-bar">
            <div class="container" style='display:flex;justify-content: space-between;'>

                <div style='display:flex;gap:30px;align-items:center' id='first'>
                    <a href="" style="align-items: center; display:flex">
                        <img src="<?php base_url('assets/icons/phone_icons.png')?>" alt="phone">
                        <h3 class="first-h3">01980533510</h3>
                    </a>
                    <a href="mailto:createofbrand@gmail.com" style="align-items: center; display:flex">
                        <img src="<?php base_url('assets/icons/top-mail.png')?>" alt="Mail">
                        <h3>createofbrand@gmail.com</h3>
                    </a>
                </div>


                <!--login information-->
                <div style='display:flex;gap:30px;align-items:center'>
                    <?php
                    if (!isset($_COOKIE[md5('name')])) {
                    ?>
                        <a href="loginSign?log=login" style="align-items: center; display:flex" name="login" class="userInfLog">
                            <img src="<?php base_url('assets/icons/login.png')?>" alt="phone">
                            <h3 class="first-h3">Login</h3>
                        </a>
                        <a href="<?php base_url('loginSign?log=signup')?>" name="signup" class="userInfLog" style="align-items: center; display:flex"> <img src="<?php base_url('assets/icons/create-account.png') ?>" alt="phone">
                            <h3 class="first-h3">Create Account</h3>
                        </a>
                    <?php
                    } else {
                    ?>
                        <a href="<?php base_url('loginSign?log=logout')?> " name="logout" class="userInfLog">Logout</a>
                    <?php
                    }

                    ?>

                </div>

                <!-- End login information-->

            </div>
        </section>

        <nav>
            <div class="container">
                <div class="logo"><a href="home"><img style="width:70px;height:70px;padding-bottom:20px" src="<?php base_url('assets/images/logo-01.svg')?>"></a>
                </div>
                <ul class="main_menu">
                    <li><a href="<?php base_url('home')?>">Home</a></li>
                    <li><a href="<?php base_url('service')?>">Our Services</a></li>
                    <li><a class="dorp_down_a" href='<?php base_url('our-team')?>'>Our Team</a>
                    </li>
                    <li><a href="<?php base_url('about-us')?>">About</a></li>
                    <li><a href="<?php base_url('contact-us')?>">Contact</a></li>
                    <li><a href="<?php base_url('our-work')?>">Our Project</a></li>
                    <!-- <li><a href="our-work" class="dorp_down_a">Our Project <img src="assets/icons/mingcute_down-line.png"></a>
                        <div class="drop_menu">
                            <ul class="drop-down">
                                <li><a href="our-work">Our Work </a></li>
                                <li><a href="">Web Design</a></li>
                                <li><a href="">SEO</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <li><a href="<?php base_url('blog')?>">Blog</a></li>
                    <?php if (isset($_COOKIE[md5('name')])) {
                        $result = $function->show_col('user', $_COOKIE[md5('name')]);
                        $data = $result->fetch_assoc();
                    ?>
                        <li><a href="user_profile" style="padding: 0;"><img src="assets/images/user/<?php echo $data['img'] ?>" alt="" srcset="" width="50px" height="50px" style="border-radius: 25px;"></a></li>
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