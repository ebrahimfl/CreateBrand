<?php      
    require_once "include/header.php"; ?>
    <link rel="stylesheet" href="assets/css/blog.css">
<?php require_once "include/headerM.php"; ?>


<!-- style add korte hobe singel blog -->
    <?php 
    $idn = isset($_GET['blogid']);
    if ($idn) {
        
        $id = $_GET['blogid'];
        
        $sql= "SELECT * FROM blog WHERE id='$id'";
            $qurye = mysqli_query($conn,$sql);
            if ($qurye) {            
            $data = mysqli_fetch_array($qurye);                                      
            $title = $data['title'];
            $dsc = $data['dsc'];
            $mata = $data['mata'];
            $img = $data['img'];
            $catagory = $data['catagory'];
            $id = $data['id'];  
                     
            }
    
     ?>
            <!-- see detels code -->
            <section>
                <div class="container">
                    <div class="blog_d">
                        <h1><?php echo $title; ?></h1>
                        <img src="assets/images/<?php echo $img;?>" alt="<?php echo $title; ?>">
                        <p>  <?php echo $dsc; ?> </p>
                    </div>            
                </div>
            </section>
        <?php
        }
        //******* all blog * ******
        else {
            
        
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
                    <img src="assets/images/<?php echo $img; ?>" alt="" class="blog-img">
                </a>
                <a href="?blogid=<?php echo $id; ?>">
                    <h1 class="title"><?php echo $title; ?></h1>
                </a>
                <a href="?blogid=<?php echo $id; ?>">
                    <p class="meta-d"><?php echo $mata; ?></p>
                </a>
                <div class="btn"><a href="?blogid=<?php echo $id; ?>" >See More</a></div>
            </div>           
                      
            <?php   } ?>

            

        </div>
    </div>
</section>





<?php
}}
require_once "include/footer.php"; ?>