<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="<?php base_url('assets/css/blog.css') ?>">
<?php require_once "include/headerM.php";
$fun = new fun();
if (isset($_GET["id"])) {
   echo  $title = $_GET["id"];
    $func = $fun->select_count("SELECT * FROM blog WHERE url='$title'");
    while ($data= $func->fetch_assoc()) {
        $title = $data['title'];
        $dsc = $data['dsc'];
        $img = $data['img'];
        $catagory = $data['catagory'];
        $activ = $data['activ'];
?>
        <!-- html css code ta add korte hobe -->
        <div class="container">
            <div class="title">
                <h1 class="blog_title" >
                    <?php echo $title; ?>
                </h1>
            </div>
            <div class="image">
                <img style="width: 100%; max-height: 500px; "  src='<?php base_url("assets/images/blog/$img") ?>' alt="">
            </div>

            <div class="desc">
                <h4 class="blog_desc" ><?php echo $dsc; ?></h4>
            </div>

            <div class="category">
                <p class="blog_cat" >
                    <?php echo $catagory; ?>
                </p>
            </div>
            <hr>
        </div>

        <!-- ai pojonto -->
<?php
    }
}
?>

<section id="blog">
    <div class="container">
        <div class="row1">
            <div class="content-main">
                <?php
                $datat = $fun->show("blog");
                while ($data = $datat->fetch_assoc()) {
                ?>
                    <div class="card-boss">
                        <a href="<?php base_url('blogs/'.$data['url']) ?>" class="blog_link">
                            <div class="card-main">
                                <div class="img-main">
                                    <img src="assets/images/blog/<?php echo $data['img']; ?>" alt="">
                                </div>
                                <div class="blog_text">
                                    <h3><?php echo $data['title']; ?></h3>
                                    <p><?php echo $fun->textShorten($data['dsc'], 200) ?> </p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            
                <?php include 'include/blog_sidebar.php' 
                ?>
        </div>
    </div>

</section>

<?php require_once "include/footer.php"; ?>