<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/blog.css">
<?php require_once "include/headerM.php"; ?>

<section id="blog">
    <div class="container">
        <div class="row">
            <div class="content">
                <a href="blog_details.php" class="blog_link">
                    <div class="card">
                        <div class="img">
                            <img src="assets/images/blog/blog-img.png" alt="">
                        </div>
                        <div class="blog_text">
                            <h3>পানিসম্পদ প্রতিমন্ত্রীর স্ত্রী লায়লা শামীমের মৃত্যুতে প্রধানমন্ত্রীর শোক</h3>
                            <p>পানিসম্পদ প্রতিমন্ত্রী জাহিদ ফারুকের স্ত্রী লায়লা শামীম আরার মৃত্যুতে গভীর শোক ও দুঃখ প্রকাশ করেছেন প্রধানমন্ত্রী শেখ হাসিনা। আজ বৃহস্পতিবার (২১ ডিসেম্বর) </p>
                        </div>
                    </div>
                </a>
                <a href="blog_details.php" class="blog_link">
                    <div class="card">
                        <div class="img">
                            <img src="assets/images/blog/blog-img.png" alt="">
                        </div>
                        <div class="blog_text">
                            <h3>New Blog</h3>
                            <p>Blog Description</p>
                        </div>
                    </div>
                </a>
                <a href="blog_details.php" class="blog_link">
                    <div class="card">
                        <div class="img">
                            <img src="assets/images/blog/blog-img.png" alt="">
                        </div>
                        <div class="blog_text">
                            <h3>New Blog</h3>
                            <p>Blog Description</p>
                        </div>
                    </div>
                </a>
                <div class="pagination_buttons">
                    <a href="blog.php?">
                        <div class="n_p_btn"><img src="assets/icons/pgRight.png" alt=""></div>
                    </a>
                    <a href="blog.php?page=" class=''></a>
                    <a href="blog.php">

                        <div class='n_p_btn'><img src="assets/icons/pgLeft.png" alt=""></div>
                    </a>
                </div>
            </div>

            <?php include 'include/blog_sidebar.php' ?>
        </div>
    </div>
    </div>
    </div>
</section>

<?php require_once "include/footer.php"; ?>