<?php require_once "include/header.php"; ?>

<?php require_once "include/headerM.php";
$function = new fun();

?>
<section id="our-team">
   <div class="container">
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
    </section>
    <?php include_once("include/team.php") ?>


<?php require_once "include/footer.php"; ?>