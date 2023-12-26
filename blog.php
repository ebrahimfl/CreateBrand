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
        <?php echo $title; ?>
        <?php echo $dsc; ?>
        <?php echo $img; ?>
        <?php echo $catagory; ?>
        <!-- ai pojonto -->

<?php
    }
}
?>

<section id="blog">
    <div class="container">
        <div class="row">

            <div class="content">
                <?php
                $datat = $fun->show("blog");
                while ($data = $datat->fetch_assoc()) {
                ?>
                    <a href="?id=<?php echo $data['id']; ?>" class="blog_link">
                        <div class="card">
                            <div class="img">
                                <img src="assets/images/blog/<?php echo $data['img']; ?>" alt="">
                            </div>
                            <div class="blog_text">
                                <h3><?php echo $data['title']; ?></h3>
                                <p><?php echo $data['dsc']; ?> </p>
                            </div>
                        </div>
                    </a>
                <?php } ?>

                <!-- <div class="pagination_buttons">
                    <a href="blog.php?">
                        <div class="n_p_btn"><img src="assets/icons/pgRight.png" alt=""></div>
                    </a>
                    <a href="blog.php?page=" class=''></a>
                    <a href="blog.php">

                        <div class='n_p_btn'><img src="assets/icons/pgLeft.png" alt=""></div>
                    </a>
                </div> -->
            </div>

            <?php include 'include/blog_sidebar.php' ?>
        </div>
    </div>
    </div>
    </div>
</section>

<?php require_once "include/footer.php"; ?>