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
            <div class="top_bar_ad">
                <h3><a href="admin.php" >Dashbord</a></h3>
                <h3><a href="admin.php" >
                    <?php
                    if (isset($_GET['val'])) {
                        $vall = $_GET['val'];
                        echo $vall;
                    }else {
                        echo "Dashbord";
                    }
                    ?>
                </a></h3>
                <div class="tog">
                    
                    <div class="t"></div>
                    <div class="t"></div>
                    <div class="t"></div>
                    
                    
                </div>

            </div>

            <div class="sec">
            <div class="das_manu_bar" >
                <a href="?val=Dashbord">Dashbord</a>
                <a href="?val=Blog">Blog</a>
                <a href="?val=Dashbord">Dashbord</a>
                <a href="?val=Dashbord">Dashbord</a>
                <a href="?val=Dashbord">Dashbord</a>
                <a href="?val=Dashbord">Dashbord</a>
                

            </div>
            <div class="das_main_bar"  style= "height: 600px; overflow-y: scroll;">
                <?php
                $val= isset($_GET['val']);
                if ($val=="Dashbord") {
                    include_once("cb_admin/inc/dasbord.php");
                }
                
                ?>
            </div>
            </div>

        </div>
    </div>
   </section>


<?php require_once "include/footer.php"; ?>