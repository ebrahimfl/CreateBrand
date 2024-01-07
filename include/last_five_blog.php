

<div class='container'>
            <section id="blog">
                <h2 style='margin-top:80px;margin-bottom:30px' class='an' data-an='fade-down'>Most Popular Blog</h2>
                <div class="rows">
                    <div class="content">
                        <?php
                        $datat = $fun->showLimit("blog", 5);
                        while ($data = $datat->fetch_assoc()) {
                        ?>
                            <a href="blog.php?id=<?php echo $data['id']; ?>" class="blog_link an" data-an='fade'>
                                <div class="card">
                                    <div class="img">
                                        <img src="assets/images/blog/<?php echo $data['img']; ?>" alt="">
                                    </div>
                                    <div class="blog_text">
                                        <h3><?php echo $data['title']; ?></h3>
                                        <p><?php echo $fun->textShorten($data['dsc'], 100); ?> </p>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>