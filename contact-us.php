<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/contact.css">
<?php require_once "include/headerM.php";
$fun = new fun(); ?>
<!-- ^Contact Section Start-->
<section id="contact">
<h1>Contact Us</h1>
    <div class="container">
        <div class="row">
            <form action="include/contact-submit.php" method="post">
                <div class="form-group-setion">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" placeholder="enter your name" id="name" name="name">
                        <small><?php  $fun->error_message_function('name') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="order">Your Email</label>
                        <input type="text" placeholder="enter your email" id="email" name="email">
                        <small><?php  $fun->error_message_function('email') ?></small>
                    </div>
                </div>
                <div class="form-group-setion">
                    <div class="form-group">
                        <label for="how_much">Phone</label>
                        <input type="text" placeholder="enter your phone number" id="phone"  name="phone">
                        <small><?php  $fun->error_message_function('phone') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="how_much">Your Subject</label>
                        <select name="subject" id="subject">
                        <option value="">Select a Subject</option>
                         <option value="Client">Client </option>
                            <option value="Team Member">Team Member</option>
                        </select>
                        <small><?php  $fun->error_message_function('subject') ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Your Message</label>
                    <textarea id="message" placeholder="enter your address" name="message" style="height:140px;"></textarea>
                </div>
                <div style='display:inline-block'>
                    <input type="submit"  id="contactBtn" class='btn_normal' value="Submit" name='contact-submit'>
                </div>
            </form>
            <div class="contact_details">
                <h3>Let's Keep in Touch</h3>
                <p>Have and Question in your Mind, don't Hesitate to Ask.</p>
                <h2>Create of Brand</h2>
                <div class="contact_social">
                    <a href="mailto:createbrand.team@gmail.com"><span><img src="assets/icons/top-mail.png" alt=""></span>createbrand.team@gmail.com</a>
                    <a href="tel:0132322232"><span><img src="assets/icons/phone_icons.png" alt=""></span>01322322323</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ^Contact Section End-->
<?php require_once "include/footer.php"; ?>