<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/our-work.css">
<?php require_once "include/headerM.php"; ?>

<section id="our-work">
    <div class="container">
    <div class="select-menu">
        <div class="select-btn">
            <span class="sBtn-text" data-team="All">All</span>
            <img src="assets/icons/mingcute_down-line.png" alt="">
        </div>
        <ul class="options">
            <li class="option">
                <i class="bx bxl-github" style="color: #171515;"></i>
                <span class="option-text" data-work="Websaite Design">Websaite Design</span>
            </li>
            <li class="option">
                <i class="bx bxl-instagram-alt" style="color: #E1306C;"></i>
                <span class="option-text" data-work="Web Development">Websaite Development</span>
            </li>
            <li class="option">
                <i class="bx bxl-linkedin-square" style="color: #0E76A8;"></i>
                <span class="option-text"data-work="Full Stack Development">Full Stack Development</span>
            </li>
            <li class="option">
                <i class="bx bxl-facebook-circle" style="color: #4267B2;"></i>
                <span class="option-text" data-work="SEO">SEO</span>
            </li>
        </ul>
    </div>
        <div class="header-menu an" data-an='fade-left'>
            <ul>
                <li class='active' data-work="All">All</li>
                <li data-work="Websaite Design">Websaite Design</li>
                <li data-work="Web Development">Websaite Development</li>
                <li data-work="Full Stack Development">Full Stack Development</li>
                <li data-work="SEO">SEO</li>
            </ul>
        </div>
        <?php require_once "include/ourproject.php"; ?>
</section>

<?php require_once "include/footer.php"; ?>