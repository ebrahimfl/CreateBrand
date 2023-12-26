<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/index.css">
<?php require_once "include/headerM.php"; 
include_once("assets/php/function.php");
$conn = new fun();

?>
<section id="home">
    <!-- <h1>About us</h1> -->
    <div class="container">
        <div class="slider" style="margin-bottom: 40px;">
           <div class="text">
           <h1>Hire the Top 3% of Freelance Talent</h1>
           <p>Toptal is an exclusive network of the top freelance software developers, designers, finance experts, product managers, and project managers in the world. Top companies hire Toptal freelancers for their most important projects.</p>
           <a href="#" class='btn_normal'>Hire Top Talent</a>
           </div>
            <?php $row =  $conn->show('ourteam');
                while($team_data = $row->fetch_assoc()){
            ?>
            <div class="card">
                <img src="assets/images/team/<?php echo $team_data['image'] ?>" alt="" class="card_img">
                <h4><?php echo $team_data['name'] ?></h4>
                <p><?php echo $team_data['category'] ?></p>
                <img src="assets/images/logo.png" alt="" class='logo'>
            </div>
            <?php } ?>
            <div class="img">
                <img src="https://img.freepik.com/free-photo/modern-equipped-computer-lab_23-2149241233.jpg?w=1380&t=st=1703316366~exp=1703316966~hmac=7cd217b984b53661f8dc682562ef6d7d524adefc23f82add5d586312b64f1ddc" alt="">
            </div>
            <div class="img">
                <img src="https://img.freepik.com/free-photo/web-design-technology-browsing-programming-concept_53876-163260.jpg?w=996&t=st=1703316394~exp=1703316994~hmac=d6e6427555bbbecd0acf035d6ee2b0822c215176fcb5a5d0956bf3d0e2c18ee1" alt="">
            </div>
            <div class="img">
                <img src="https://img.freepik.com/free-photo/modern-equipped-computer-lab_23-2149241201.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="img">
                <img src="https://img.freepik.com/free-photo/modern-equipped-computer-lab_23-2149241202.jpg?w=1380&t=st=1703316451~exp=1703317051~hmac=c29bc6aa144862589146b46f6b5eb3e4065be354f785dd178087dffc48115f90" alt="">
            </div>
        </div>
        <div class="row">
            <div style='width:50%' class='text'>
                <h2>The Web Design & Development Agency</h2>
                <p>We are a Web Design and Development agency with the full package of a website building including Graphic Design, Facebook Marketing, SEO We are an experienced and talented team of passionate developers who lives and breathe in web design and development.</p>

                <p>We have many clients around the world like United States, Australia, United Kingdom, Canada, France, Germany, and many more</p>
                <div style='margin-top: 25px;'>
                    <a href="contact-us.php" class='btn_normal'>Contact Us</a>
                </div>
            </div>
            <div class='img'>
                <img src="assets/images/about-img.png" alt="">
            </div>
        </div>
        <div>
      <div style='margin-top:80px'>
      <h2>Our Service</h2>
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
        </div>
    </div>
  <div class="our-team">
    <h2 style='margin-top:80px'>Our Team</h2>
  <div class="rows">
      <?php $row =  $conn->show('ourteam');
        while($data = $row->fetch_assoc()){ ?>
        <div class="card" data-team="<?php echo $data['category'] ?>">
         <img src="assets/images/team/<?php echo $data['image'] ?>" alt="" class="card-img">
         <div class="text">
            <h3><?php echo $data['name'] ?></h3>
            <p><?php echo $data['category'] ?></p>
            <a href="#"><img src='assets/icons/view-icons.png'>View</a>
         </div>
        </div>
        <?php } ?>
    </div>
  </div>


  <div class="our-work">
    <h2 style='margin-top:80px'>Enjoy Our Amazing Projects</h2>
    <div class="work_rows">
            <div class="card" data-work="Websaite Design">
                <img src="assets/images/1-1.png" alt="" class="card_img">
                <div class="hover_effect">
                    <h4>Website Design</h4>
                    <a class="img" href='#' target="_blank">
                        <img src="assets/icons/right-arrow.png" alt="">
                    </a>
                </div>
            </div>
            <div class="card" data-work="Websaite Design">
                <img src="assets/images/1.jpg" alt="" class="card_img">
                <div class="hover_effect">
                    <h4>Website Design</h4>
                    <a class="img" href='#' target="_blank">
                        <img src="assets/icons/right-arrow.png" alt="">
                    </a>
                </div>
            </div>
            <div class="card" >
                <img src="assets/images/card-img.png" alt="" class="card_img">
                <div class="hover_effect">
                    <h4>Website Design</h4>
                    <a class="img" href='#' target="_blank">
                        <img src="assets/icons/right-arrow.png" alt="">
                    </a>
                </div>
            </div>
            <div class="card" data-work="Full Stack Development">
                <img src="assets/images/2-1.png" alt="" class="card_img" >
                <div class="hover_effect">
                    <h4>Website Design</h4>
                    <a class="img" href='#' target="_blank">
                        <img src="assets/icons/right-arrow.png" alt="">
                    </a>
                </div>
            </div>
  </div>
  </div>
  <section id="blog">
  <h2 style='margin-top:80px;margin-bottom:30px'>Most Popular Blog</h2>
        <div class="rows">
            <div class="content">
                <?php
                $datat = $fun->showLimit("blog",5);
                while ($data = $datat->fetch_assoc()) {
                ?>
                    <a href="?id=<?php echo $data['id']; ?>" class="blog_link">
                        <div class="card">
                            <div class="img">
                                <img src="assets/images/blog/<?php echo $data['img']; ?>" alt="">
                            </div>
                            <div class="blog_text">
                                <h3><?php echo $data['title']; ?></h3>
                                <p><?php echo $data['dsc']; ?> </p>
                            </div>
                        </div>
                    </a>
                <?php } ?>
        </div>
        </div>
</section>
<div class="counter_wrapper">
            <div class="card">
                <h4 data-counter-value='2'>0<span>+</span></h4>
                <h5>YEARS IN BUSINESS</h5>
            </div>
            <div class="card">
                <h4 data-counter-value='100'>0<span>+</span></h4>
                <h5>FINISHED PROJECTS</h5>
            </div>
            <div class="card">
                <h4 data-counter-value='700'>0<span>+</span></h4>
                <h5>CLIENTS</h5>
            </div>
            <div class="card">
                <h4 data-counter-value='800'>0<span>+</span></h4>
                <h5>REVIEWS</h5>
            </div>
        </div>

    </div>

</section>

<?php require_once "include/footer.php"; ?>