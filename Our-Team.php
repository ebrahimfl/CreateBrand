<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/our-team.css">
<?php require_once "include/headerM.php";
$function = new fun();
?>

<section id="our-team">
   <div class="container">
    <div class="header-menu an" data-an='fade-right'>
        <ul>
            <li class='active' data-team="All">All</li>
            <li data-team="Web Designer">Websaite Design</li>
            <li data-team="Web Developer">Websaite Developer</li>
            <li data-team="Full Stack Developer">Full Stack Developer</li>
            <li data-team="SEO">SEO</li>
            <li data-team="Digital Marketing">Digital Marketing</li>
            <li data-team="Website any Bug fixing">Website any Bug fixing</li>
            <li data-team="B2B Lead Colocation">B2B Lead Colocation</li>
            <li data-team="Wordpress Theme Customization">Wordpress Theme Customization</li>
        </ul>
    </div>
    <div class="row an"  data-an='fade-up'>
      <?php $row =  $function->show('ourteam');
        while($data = $row->fetch_assoc()){ ?>
        <div class="card " data-team="<?php echo $data['category'] ?>">
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
</section>

<?php require_once "include/footer.php"; ?>