<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/blog.css">
<?php require_once "include/headerM.php";
$fun = new fun();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $func = $fun->show_col("blog", $id);
    while ($data = $func->fetch_assoc()) {
        $title = $data['title'];
        $dsc = $data['dsc'];
        $img = $data['img'];
        $catagory = $data['catagory'];
        $activ = $data['activ'];
?>
        <!-- html css code ta add korte hobe -->
        <div class="container">
            <div class="title">
                <h1>
                    <?php echo $title; ?>
                </h1>
            </div>
            <div class="image">
                <img src="assets/images/blog/<?php echo $data['img']; ?>" alt="">
            </div>

            <div class="desc">
                <h4><?php echo $dsc; ?></h4>
            </div>

            <div class="category">
                <p>
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
                        <a href="?id=<?php echo $data['id']; ?>" class="blog_link">
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
            <!-- <div class="blog-sidebar">
                <?php // include 'include/blog_sidebar.php' 
                ?>
            </div> -->

        </div>
    </div>

</section>

<?php require_once "include/footer.php"; ?>