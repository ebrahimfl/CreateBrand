<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/our-team.css">
<?php require_once "include/headerM.php";
$function = new fun();
?>

<section id="our-team">
   <div class="container">
    <div class="header-menu">
        <ul>
            <li class='active' data-work="All">All</li>
            <li data-work="Web Designer">Websaite Design</li>
            <li data-work="Web Developer">Websaite Development</li>
            <li data-work="Full Stack Developer">Full Stack Developer</li>
            <li data-work="SEO">SEO</li>
            <li data-work="Digital Marketing">Digital Marketing</li>
            <li data-work="Website any Bug fixing">Website any Bug fixing</li>
            <li data-work="B2B Lead Colocation">B2B Lead Colocation</li>
            <li data-work="Wordpress Theme Customization">Wordpress Theme Customization</li>
        </ul>
    </div>
    <div class="row">
      <?php $row =  $function->show('ourteam');
        while($data = $row->fetch_assoc()){ ?>
        <div class="card" data-work="<?php echo $data['category'] ?>">
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