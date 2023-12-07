<?php      
    require_once "include/header.php"; ?>
    <link rel="stylesheet" href="assets/css/blog.css">
<?php require_once "include/headerM.php"; ?>



    <?php 
    $idn = isset($_GET['blogid']);
    if ($idn) {
        
     ?>
     
     <!-- see detels code -->
     <div class="container">
        see details
     </div>
        
        
    
    <?php
     }else {
    
    ?>




<section id="blog-m">
    <div class="container">
        <div class="blog-m">

        <?php 
            $sql= "SELECT * FROM blog";
            $qurye = mysqli_query($conn,$sql);
            $lenth = mysqli_num_rows($qurye);            
                if ($lenth>0) {
                    while ($data = mysqli_fetch_array($qurye)){                     
                        $title = $data['title'];
                        $dsc = $data['dsc'];
                        $mata = $data['mata'];
                        $img = $data['img'];
                        $catagory = $data['catagory'];
                        $id = $data['id'];
            
        ?>           
        
            <div class="sengel-blog">
                <a href="?blogid=<?php echo $id; ?>">
                    <img src="?blog-img/<?php echo $img; ?>" alt="" class="blog-img">
                </a>
                <a href="?blogid=<?php echo $id; ?>">
                    <h1 class="title"><?php echo $title; ?></h1>
                </a>
                <a href="?blogid=<?php echo $id; ?>">
                    <p class="meta-d"><?php echo $mata; ?></p>
                </a>
                <div class="btn"><a href="?blogid=<?php echo $id; ?>" >See More</a></div>
            </div>           
                      
            <?php }  } ?>

        </div>
    </div>
</section>






<?php
}
require_once "include/footer.php"; ?>