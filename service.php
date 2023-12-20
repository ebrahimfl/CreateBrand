<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/service.css">
<?php require_once "include/headerM.php"; ?>

<main>
        

        <!-- ============ section 2 start here ========== -->
        <section>
            <!-- ======= section titel =========== -->
            <div class="container">
                <h1 class="sec-titel">Achieve your business goals <span class="primary">with web <br> development solutions  </span></h1>
                <p class="sec-titel-p">Our battle-tested developers specialize in a wide range of web development <br> services. Here are some of the solutions that we can deliver for you.</p>
            </div>
            <!-- =========== section card ========= -->
            <div class="main-card container">
                <!-- ========= card 1 ======== -->

                <?php 
                    include_once("./assets/php/function.php");
                    $show = new fun();
                    $ser = $show->show("service");
                    while ($conn= mysqli_fetch_assoc($ser)) {
                        $id = $conn['id'];
                        $ser_name = $conn['ser_name'];
                        $s_price = $conn['s_price'];
                        $ser_dec = $conn['ser_dec'];
                        $ser_img = $conn['ser_img'];
                        $date = $conn['date'];
                        
                                      
                ?>
                <article class="main-article">
                    <div class="article-img">
                        <img src="assets/images/service/<?php echo $ser_img?>" alt="<?php echo $ser_name?>">
                    </div>
                    <div class="article-text">
                        <h4><?php echo $ser_name?></h4>
                        <p class="price"><b>Price: <?php echo $ser_img?></b></p>
                        <p><?php echo $ser_dec?></p>                        
                    </div>
                </article>
               <?php } ?>
            </div>
        </section>
        <!-- ====================== section 3 start here ================= -->
        <section>
            <div class="container">
                <h1 class="sec-titel"><span class="primary">Which technologies will bring maximum value</span> to your business?</h1>
                <p class="sec-titel-p">Solve customer problems by choosing cutting-edge technologies for your tech stack. <br> Take your business to the next level with the right solutions tailored to your own requirements</p>
            </div>
            <div class="main-card container">
                <!-- ======= card 1 ============ -->
                <article class="main-article animate">
                    <div class="article-img">
                        <img src="assets/images/service/frontend.png" alt="">
                    </div>
                    <div class="article-text">
                        <h4>Frontend Development</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis ut repellat aut asperiores autem deleniti nulla labore est incidunt distinctio, aspernatur dolore repellendus amet quia maxime voluptate adipisci dolor molestias.</p>
                    </div>
                </article>
                <!-- ============= card 2 ========= -->
                <article class="main-article animate2">
                    <div class="article-img">
                        <img src="assets/images/service/backend.png" alt="">
                    </div>
                    <div class="article-text">
                        <h4>Backend Development</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis ut repellat aut asperiores autem deleniti nulla labore est incidunt distinctio, aspernatur dolore repellendus amet quia maxime voluptate adipisci dolor molestias.</p>
                    </div>
                </article>
                <!-- ========== card 3 =========== -->
                <article class="main-article animate3">
                    <div class="article-img">
                        <img src="assets/images/service/lowcoad.webp" alt="">
                    </div>
                    <div class="article-text">
                        <h4>Low-Code Development</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis ut repellat aut asperiores autem deleniti nulla labore est incidunt distinctio, aspernatur dolore repellendus amet quia maxime voluptate adipisci dolor molestias.</p>
                    </div>
                </article>
                <!-- ================= card 4 ============== -->
                <article class="main-article animate4">
                    <div class="article-img">
                        <img src="assets/images/service/website.png" alt="">
                    </div>
                    <div class="article-text">
                        <h4>Websites</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis ut repellat aut asperiores autem deleniti nulla labore est incidunt distinctio, aspernatur dolore repellendus amet quia maxime voluptate adipisci dolor molestias.</p>
                    </div>
                </article>
            </div>
        </section>
        <!-- ================ section 4 start here =============== -->
        <section>
            <div class="container">
                <div class="support-section">
                    <!-- ============= card 1 ================ -->
                    <div class="sec4-text">
                        <h1>Steps To Build The Right Web Solution</h1>
                        <div class="solution">
                            <h5>Planning</h5>
                            <p>We spend some time mapping out a comprehensive plan taking into account your business objectives. Our web application development experts evaluate your business needs and available technologies thoroughly to help you pick the most</p>
                        </div>
                        <div class="solution">
                            <h5>Development & QA Process</h5>
                            <p>Our team of professional designers and developers getting started busy with designing and coding. This is the most time-consuming and crucial stage of all and we make sure every piece of the design layout and code is flawless. Our meticulous QA</p>
                        </div>
                    </div>
                    <!-- ===================== card 2 ============= -->
                    <div class="sec4-right-side">
                        <div class="right-side-titel  support">
                            <h4 class="">Support</h4>
                            <p>We believe in establishing trust, long term relationship and that's why we provide ongoing support, maintenance and further</p>
                        </div>
                        <div class="right-side-titel all testing">
                            <h4 class="">Testing</h4>
                            <p>We perform QA testing to make sure faultless performance from the website and ensures that the website meets all the Google standards.</p>
                        </div>
                        <div class="right-side-titel all launce">
                            <h4 class="">Launce</h4>
                            <p>We optimize the website with speed optimization, security check, image optimization, on page seo etc and After making sure your</p>
                        </div>
                        <div class="right-side-titel all design">
                            <h4 class="">Design</h4>
                            <p>We develop an user friendly responsive layout with the content generally provided by the client and convert your vision into design and development</p>
                        </div>
                        <div class="right-img tl" data-tabs="support">
                            <img src="assets/images/service/support.png" alt="">
                        </div>
                        <div class="right-img tr " data-tabs="launch">
                            <img src="assets/images/service/launce.png" alt="">
                        </div>
                        <div class="right-img bl" data-tabs="design">
                            <img src="assets/images/service/desing.png" alt="">
                        </div>
                        <div class="right-img br" data-tabs="testing">
                            <img src="assets/images/service/testing.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>
  



<?php require_once "include/footer.php"; ?>