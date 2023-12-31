<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/index.css">
<?php require_once "include/headerM.php";
include_once("assets/php/function.php");
$conn = new fun();

?>
<section id="home">
    <!-- <h1>About us</h1> -->
    <div class="container">
        <div class="slider an" style="margin-bottom: 40px;" data-an='fade'>
            <div class="text">
                <h1>Hire the Top 3% of Freelance Talent</h1>
                <p>Toptal is an exclusive network of the top freelance software developers, designers, finance experts, product managers, and project managers in the world. Top companies hire Toptal freelancers for their most important projects.</p>
                <a href="Our-Team.php" class='btn_normal'>Hire Top Talent</a>
            </div>
            <?php $row =  $conn->show('ourteam');
            while ($team_data = $row->fetch_assoc()) {
            ?>
                <div class="card">
                    <img src="assets/images/team/<?php echo $team_data['image'] ?>" alt="" class="card_img">
                    <h4><?php echo $team_data['name'] ?></h4>
                    <p><?php echo $team_data['category'] ?></p>
                    <img src="assets/images/logo.png" alt="" class='logo'>
                </div>
            <?php } ?>
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
        <div class="row">
            <div style='width:50%' class='text an' data-an="fade-right">
                <h2 class='an' data-an='fade-down'>The Web Design & Development Agency</h2>
                <p>We are a Web Design and Development agency with the full package of a website building including Graphic Design, Facebook Marketing, SEO We are an experienced and talented team of passionate developers who lives and breathe in web design and development.</p>

                <p>We have many clients around the world like United States, Australia, United Kingdom, Canada, France, Germany, and many more</p>
                <div style='margin-top: 25px;'>
                    <a href="contact-us.php" class='btn_normal'>Contact Us</a>
                </div>
            </div>
            <div class='img an' data-an="fade-left">
                <img src="assets/images/about-img.png" alt="">
            </div>
        </div>
        <div>
            <div style='margin-top:80px'>

                <h2 class="an" data-an='fade-left'>Our Service</h2>
                <div class="services" id='scroll'>

                    <?php
                    include_once("assets/php/function.php");
                    $fun = new fun();
                    $datat = $fun->show("service");


                    while ($data = $datat->fetch_assoc()) {
                        $id = $data['id'];
                        $ser_name = $data['ser_name'];
                        $s_price = $data['s_price'];
                        $ser_dec = $data['ser_dec'];
                        $ser_img = $data['ser_img'];
                        $date = $data['date'];

                    ?>
                        <div class="card an" data-an='zoom-in'>
                            <div class="card_img">
                                <img src="assets/icons/<?php echo $ser_img; ?>" alt="">
                            </div>
                            <h3><?php echo $ser_name; ?></h3>
                            <p>Create of Brand Team</p>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>


        <div class="our-team">
            <h2 style='margin-top:80px' class="an" data-an='fade-right'>Our Team</h2>
            <?php include_once("include/team.php") ?>
        </div>

        <div class="container">
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
        <div class='container'>
            <section id="blog">
                <h2 style='margin-top:80px;margin-bottom:30px' class='an' data-an='fade-down'>Most Popular Blog</h2>
                <div class="rows">
                    <div class="content">
                        <?php
                        $datat = $fun->showLimit("blog", 5);
                        while ($data = $datat->fetch_assoc()) {
                        ?>
                            <a href="blog.php?id=<?php echo $data['id']; ?>" class="blog_link an" data-an='fade'>
                                <div class="card">
                                    <div class="img">
                                        <img src="assets/images/blog/<?php echo $data['img']; ?>" alt="">
                                    </div>
                                    <div class="blog_text">
                                        <h3><?php echo $data['title']; ?></h3>
                                        <p><?php echo $fun->textShorten($data['dsc'], 100); ?> </p>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <?php require_once "include/count_w.php"; ?>
        </div>
    </div>

</section>

<?php require_once "include/footer.php"; ?>