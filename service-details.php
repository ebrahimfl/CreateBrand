<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
$service_id = $_GET['id']; 
require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/service-details.css">
<?php require_once "include/headerM.php";
$conn = new fun();
$service_row = $conn->show_col("service",$service_id);
if($service_data = $service_row->fetch_assoc()){

?>

<div id="service-details">
    <h1>Our Service</h1>
    <div class="container">
        <div class="slider an" style="margin-bottom: 40px;" data-an='fade'>
            <div class="img">
                <img src="assets/images/slider/slider-3-01.png" alt="">
            </div>
            <div class="img">
                <img src="assets/images/slider/slider-1.png" alt="">
            </div>
            <div class="img">
                <img src="assets/images/slider/slider-2.png" alt="">
            </div>
        </div>
        <div class="content">
            <div class="heading">
                <h2 style=''><?php echo $service_data['ser_name'] ?></h2>
            </div>
            <div class="description">
                <p>
                    <?php echo $service_data['ser_dec'] ?>
                </p>
            </div>
        </div>
        <div class="review">
            <h2>Clients Are Always Satisfied With Us</h2>
            <div class="row">
                <div class="card">
                    <div class="img">
                        <img src="assets/images/portrait-white-man-isolated_53876-40306.avif" alt="">
                    </div>
                    <div class="review-star-icons">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-0.png" alt="">
                    </div>
                    <h3>Super customer service!</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, adipisci alias? Rem harum a architecto animi tempora ducimus eos officiis incidunt fugiat quidem atque ipsum, unde, inventore nihil porro eius.</p>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="assets/images/portrait-white-man-isolated_53876-40306.avif" alt="">
                    </div>
                    <div class="review-star-icons">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-0.png" alt="">
                    </div>
                    <h3>Super customer service!</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, adipisci alias? Rem harum a architecto animi tempora ducimus eos officiis incidunt fugiat quidem atque ipsum, unde, inventore nihil porro eius.</p>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="assets/images/portrait-white-man-isolated_53876-40306.avif" alt="">
                    </div>
                    <div class="review-star-icons">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-1.png" alt="">
                        <img src="assets/icons/star-review-0.png" alt="">
                    </div>
                    <h3>Super customer service!</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, adipisci alias? Rem harum a architecto animi tempora ducimus eos officiis incidunt fugiat quidem atque ipsum, unde, inventore nihil porro eius.</p>
                </div>
            </div>

        </div>
        <div class="our-team" margin-top='30px'>
            <h2 style="margin-top:80px" class="an fade-right" data-an="fade-right">Our Team</h2>
            <div class="rows">
                <div class="card an fade-left" data-team="Websaite Development" data-an="fade-left">
                    <img src="assets/images/team/521188847.png" alt="" class="card-img">
                    <div class="text">
                        <h3>wewewe</h3>
                        <p>Websaite Development</p>
                        <a href="#"><img src="assets/icons/view-icons.png">View</a>
                    </div>
                </div>
                <div class="card an fade-left" data-team="Digital Marketing" data-an="fade-left">
                    <img src="assets/images/team/1813586188.png" alt="" class="card-img">
                    <div class="text">
                        <h3>Rahim</h3>
                        <p>Digital Marketing</p>
                        <a href="#"><img src="assets/icons/view-icons.png">View</a>
                    </div>
                </div>
                <div class="card an fade-left" data-team="Websaite Development" data-an="fade-left">
                    <img src="assets/images/team/594399166.jpg" alt="" class="card-img">
                    <div class="text">
                        <h3>Ebrahim</h3>
                        <p>Websaite Development</p>
                        <a href="#"><img src="assets/icons/view-icons.png">View</a>
                    </div>
                </div>
                <div class="card an fade-left" data-team="Full Stack Developer" data-an="fade-left">
                    <img src="assets/images/team/1346314550.jpg" alt="" class="card-img">
                    <div class="text">
                        <h3>Redwan Hussain Shawon</h3>
                        <p>Full Stack Developer</p>
                        <a href="#"><img src="assets/icons/view-icons.png">View</a>
                    </div>
                </div>
                <div class="card an fade-left" data-team="SEO" data-an="fade-left">
                    <img src="assets/images/team/e.jpg" alt="" class="card-img">
                    <div class="text">
                        <h3>Ebrahim</h3>
                        <p>SEO</p>
                        <a href="#"><img src="assets/icons/view-icons.png">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-work">
            <h2 style='margin-top:80px' class='an' data-an='fade-up'>Enjoy Our Amazing Projects</h2>
            <div class="work_rows">
                <div class="card an" data-work="Websaite Design" data-an='zoom-in'>
                    <img src="assets/images/1-1.png" alt="" class="card_img">
                    <div class="hover_effect">
                        <h4>Website Design</h4>
                        <a class="img" href='#' target="_blank">
                            <img src="assets/icons/right-arrow.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="card an" data-work="Websaite Design" data-an='zoom-in'>
                    <img src="assets/images/1.jpg" alt="" class="card_img">
                    <div class="hover_effect">
                        <h4>Website Design</h4>
                        <a class="img" href='#' target="_blank">
                            <img src="assets/icons/right-arrow.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="card an" data-work="Websaite Design" data-an='zoom-in'>
                    <img src="assets/images/card-img.png" alt="" class="card_img">
                    <div class="hover_effect">
                        <h4>Website Design</h4>
                        <a class="img" href='#' target="_blank">
                            <img src="assets/icons/right-arrow.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="card an" data-work="Websaite Design" data-an='zoom-in'>
                    <img src="assets/images/2-1.png" alt="" class="card_img">
                    <div class="hover_effect">
                        <h4>Website Design</h4>
                        <a class="img" href='#' target="_blank">
                            <img src="assets/icons/right-arrow.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <h2>You Can Start Your Project</h2>
        <a href="contact-us.php" class='btn_normal'>Contact</a>
    </div>
</div>

<?php include_once 'include/footer.php'; }
} ?>