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


        <!-- monuwar style start   -->
        <!-- html css code ta add korte hobe -->
        <style>
            hr {
                margin: 20px;
            }

            .container .image img {
                width: 100%;
                height: 400px;
                padding-bottom: 20px;
            }

            .container .title {
                padding: 60px 0;
            }

            .container .title h1 {
                color: #636060;
            }

            .container .desc h4 {
                color: #786e6e;
                font-weight: 600;
                line-height: 25px;
                word-spacing: 2px;
            }

            .container .category {
                padding: 30px 0;
            }

            .container .category p {
                font-weight: 600;
                line-height: 25px;
                word-spacing: 2px;
            }

            @media (max-width:991px) {
                .container .image img {
                    width: 100%;
                    height: 300px;
                }

                .container .title {
                    padding: 30px 0;
                }

                .container .title h1 {
                    color: #636060;
                    margin: 0 !important;
                }

                .container .desc h4 {
                    color: #786e6e;
                    font-weight: 600;
                    line-height: 25px;
                    word-spacing: 2px;
                    font-size: 24px;
                }

                .container .category {
                    padding: 15px 0;
                }

                .container .category p {
                    font-weight: 600;
                    line-height: 22px;
                    word-spacing: 2px;
                    font-size: 24px;
                }
            }

            @media (max-width: 450px) {
                .container .image img {
                    width: 100%;
                    height: 250px;
                }

                .container .title {
                    padding: 15px 0;
                }

                .container .title h1 {
                    color: #636060;
                    margin: 0 !important;
                }

                .container .desc h4 {
                    color: #786e6e;
                    font-weight: 600;
                    line-height: 15px;
                    word-spacing: 2px;
                    font-size: 18px;
                }

                .container .category {
                    padding: 10px 0;
                }

                .container .category p {
                    font-weight: 600;
                    line-height: 15px;
                    word-spacing: 2px;
                    font-size: 18px;
                }
            }
        </style>
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
        <!-- monuwar style end   -->
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
                                <p><?php echo $fun->textShorten($data['dsc'],200) ?> </p>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <?php include 'include/blog_sidebar.php' ?>
        </div>
    </div>
    </div>
    </div>
</section>

<?php require_once "include/footer.php"; ?>