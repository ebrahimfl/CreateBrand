<?php require_once "include/header.php"; ?>

<?php require_once "include/headerM.php";
$function = new fun();

?>
<section id="our-team">
   <div class="container">
   <div class="select-menu">
        <div class="select-btn">
            <span class="sBtn-text" data-team="All">All</span>
            <img src="assets/icons/mingcute_down-line.png" alt="">
        </div>
        <ul class="options">
            <li class="option">
                <i class="bx bxl-github" style="color: #171515;"></i>
                <span class="option-text" data-team="Web Designer">Websaite Design & Developer</span>
            </li>
            <li class="option">
                <i class="bx bxl-instagram-alt" style="color: #E1306C;"></i>
                <span class="option-text"data-team="SEO">SEO</span>
            </li>
            <li class="option">
                <i class="bx bxl-linkedin-square" style="color: #0E76A8;"></i>
                <span class="option-text"data-team="Digital Marketing">Digital Marketing</span>
            </li>
            <li class="option">
                <i class="bx bxl-facebook-circle" style="color: #4267B2;"></i>
                <span class="option-text">Facebook</span>
            </li>
            <li class="option">
                <i class="bx bxl-twitter" style="color: #1DA1F2;"></i>
                <span class="option-text">Twitter</span>
            </li>
        </ul>
    </div>

    
    <div class="header-menu an" data-an='fade-right'>
        <ul>
            <li class='active' data-team="All">All</li>
            <li data-team="Web Designer">Websaite Design & Developer</li>           
            <li data-team="SEO">SEO</li>
            <li data-team="Digital Marketing">Digital Marketing</li>
            <li data-team="Website any Bug fixing">Website any Bug fixing</li>
            <li data-team="B2B Lead Colocation">B2B Lead Colocation</li>
            <li data-team="Wordpress Theme Customization">Wordpress Theme Customization</li>
        </ul>
    </div>
    <?php include_once("include/team.php");?>    
   </div>
    </section>
    <style>#our-team {
    padding: 0px 0px 9px;
    }</style>
    <?php include_once("include/service_slider.php"); ?>


<?php require_once "include/footer.php"; ?>