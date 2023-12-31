<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/about.css">
<?php require_once "include/headerM.php"; ?>

<section id="about">
    <!-- <h1>About us</h1> -->
    <div class="container">
        <div class="slider">
            <div class="card">
                <img src="assets/images/1.jpg" alt="" class="card_img">
                <h4>Redwan Hussain Shawon</h4>
                <p>Full-Stack Developer</p>
                <img src="assets/images/logo-01.svg" style="width: 70px;height:80px;margin-top:10px" alt="" class='logo'>
            </div>
            
        
            <div class="img">
                <img src="assets/images/slider/about-slider-1.svg" alt="" style='height:100%'>
            </div>
            <div class="img">
                <img src="assets/images/slider/about-slider-2.svg" alt="">
            </div>
            <div class="img">
                <img src="assets/images/slider/about-slider-3.svg" alt="">
            </div>
        </div>
        <div class="row">
            <div style='width:50%' class='text'>
                <h2>ক্রিয়েট অফ ব্রান্ড</h2>
                <p>ক্রিয়েট অফ ব্রান্ড  শুধুমাত্র একটা নাম নয়, এটা সত্তিকারের একটা ব্রান্ড। আমাদের আছে একটা প্রফেশনাল টিম। বিভিন্ন জায়গা থেকে বিভিন্ন কাজের উপর অভিজ্ঞ ও প্রোফেশনাল মেম্বার। আমারা সবাই মিলে আমাদের বিভিন্ন জ্ঞান গুলোকে একত্রে করে প্রভাব ফেলছি  ধীরে ধীরে  এই অনলাইনের জগৎ এ। এই আশাতেই টিম তৈরি করেছি আমরা যেন এই অনলাইন জগতের নতুন ভাবে মানুষের সেবা দিতে পারি। আমাদের কাছে আসলে আপনি আশা করি, সব ধরনের সেবা আমারা দিতে পারব। আপনার যদি প্রয়োজন হয় ইথিকেল হ্যাকার থেকে শুরু করে যে কোন রকমের ওয়েব সাইটের,  যে কোন রকম বাগ ফিক্স, ডিজাইন অথবা ডেভলাপমেন্ট। অথবা যদি SEO, ডিজিটাল মার্কেটিং এবং অন্য যে কোন রকম সেবা। আপনি আমাদের ক্রিয়েট অফ ব্রান্ড টিমার সাথে যোগাযোগ করুন আমরা খুবই সল্প খরচে অল্প সময়ের মধ্যে আপনার সমস্যার সমাধান দিব ইনশাআল্লাহ। আমারা কখনই আমাদের কাজ দ্বারা আপনাদের অসন্তুষ্ট করব না, আপনাদের সন্তষ্টি আমাদের গর্ব ।</p>

              
                <div style='margin-top: 25px;'>
                    <a href="contact-us.php" class='btn_normal'>Contact Us</a>
                </div>
            </div>
            <div class='img'>
                <img src="assets/images/about-img.png" alt="">
            </div>
        </div>
        <div style='margin-top:80px'>
        <div class="services" id='scroll'>
        <?php 
            include_once("assets/php/function.php");
            $fun = new fun();
            $datat = $fun->show("service");
            

            while ($data= $datat->fetch_assoc()) {
                 $id = $data['id'];
                 $ser_name = $data['ser_name'];
                 $s_price = $data['s_price'];
                 $ser_dec = $data['ser_dec'];
                 $ser_img = $data['ser_img'];
                 $date = $data['date'];           
            
        ?>
            <div class="card">                
                <div class="card_img">
                    <img src="assets/icons/<?php echo $ser_img;?>" alt="">
                </div>
                <h3><?php echo $ser_name;?></h3>
                <p>Create of Brand Team</p>
            </div>         
            
            <?php } ?>
     
        </div>
        <?php require_once "include/count_w.php"; ?>
    </div>
</section>


<?php require_once "include/footer.php"; ?>