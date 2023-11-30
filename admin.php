<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="cb_admin/css/adminM.css">
<?php require_once "include/headerM.php"; ?>
<?php
if (!isset($_COOKIE[md5("ad_name")])) {
    header("location: index.php");
}
?>


<section>
    <div class="container">
        <div class="dashbrod">
            <div class="das_manu_bar">
                <a href="?val=dashbord">Dashbord</a>
                <a href="?val=dashbord">Dashbord</a>
                <a href="?val=dashbord">Dashbord</a>
                <a href="?val=dashbord">Dashbord</a>

            </div>
            <div class="das_main_bar">
                <?php
                $val= isset($_GET['val']);
                if ($val=="dashbord") {
                    include_once("cb_admin/inc/dasbord.php");
                }
                
                ?>
            </div>

        </div>
    </div>
   </section>


<?php require_once "include/footer.php"; ?>