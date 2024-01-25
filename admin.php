
<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="cb_admin/css/adminM.css">
<?php require_once "include/headerM.php"; ?>
<?php
if (!isset($_COOKIE[md5("ad_name")])) {
    header("location: index.php");
}elseif (!$_SESSION[md5("admin_brandOfcreate_ad_id")]) {
    header("location: index.php");
}
?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    header("location:cb_admin/inc/blogup.php?id=$id");
}

?>

<!-- blog upload sestem add -->



<section>
    <div class="container">
    <?php
if (isset($_GET["add"])) {
    $che = $_GET["add"];
    if ($che=="ok") {
       echo "Blog Upload Succse";
       
    }
}

?>

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
                <div class="tog1" >
                    <div class="tog" >
                        <a href="javascript:void(0);"  onclick="myFunction('item_m')">
                            <div class="t"></div>
                            <div class="t"></div>
                            <div class="t"></div>
                        </a>
                        <div id="item_m" style="display: none;">
                            <a href="?val=AdminProfil">Admin</a>
                            
                        </div>
                        
                    </div>                 
                </div>

            </div>
            

            <div class="sec">
            <div class="das_manu_bar" >
                <a href="?val=Dashbord">Dashbord</a>
                <a href="javascript:void(0);"  onclick="myFunction('blog_ad')">Blog >>
                    <div id="blog_ad" style="display: none;">
                        <a href="?val=AllBlog" style="font-size: 15px;">Blog All</a>
                        <a href="?val=AddBlog" style="font-size: 15px;">Add Blog</a>                                                
                    </div>
                </a>
                <a href="javascript:void(0);" onclick="myFunction('service')" >Service >>
                    <div id="service" style="display: none;">
                        <a href="?val=Service" style="font-size: 15px;">Service</a>
                                               
                    </div>
                </a>
                <a href="javascript:void(0);"  onclick="myFunction('team')">Our Team >>
                    <div id="team" style="display: none;">                      
                        <a href="?val=team_add" style="font-size: 15px;">Our Team</a>
                                                
                    </div>
                </a>
                <a href="?val=Dashbord">Dashbord</a>
                <a href="?val=Dashbord">Dashbord</a>
                <a href="?val=Dashbord">Dashbord</a>
                 
                

            </div>
            <div class="das_main_bar"  style= "height: 600px; overflow-y: scroll;">
                <?php
                
                if (isset($_GET["action"])) {
                    $action = $_GET['action'];
                    if ($action=="blogup") {
                        include_once("cb_admin/inc/blogup.php");
                        
                    }
                }else{
                    if (isset($_GET['val'])) {
                        $val= $_GET['val'];
                        if ($val=="Dashbord") {
                            include_once("cb_admin/inc/dasbord.php");
                        }elseif ($val=="AllBlog") {
                            include_once("cb_admin/inc/allBlog.php");
                        }elseif ($val=="AddBlog") {
                            include_once("cb_admin/inc/AddBlog.php");
                        }elseif ($val=="Service") {
                            include_once("cb_admin/inc/Service.php");
                        }else if($val=='team_add'){
                            include_once("cb_admin/inc/our-team-add.php");
                        }
                        
                        
                    }
                }
                
                
                ?>
            </div>
            </div>

        </div>
    </div>
   </section>

   <script>
function myFunction(y) {
  var x = document.getElementById(y);
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


<?php require_once "include/footer.php"; ?>