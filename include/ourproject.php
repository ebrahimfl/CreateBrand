<link rel="stylesheet" href="assets/css/our-work.css">
<div class="row an" data-an='fade'>
    <?php 
    $ser = $function->show("user_project");
        while ($data = mysqli_fetch_assoc($ser)) {
         $img = $data['img'];
         $url = $data['url'];
    ?>
            <div class="card" data-work="Websaite Design" >
                <img src="<?php base_url($url.$img) ?>" alt="" class="card_img">
                <div class="hover_effect">
                    <h4><?php echo $data['title'] ?></h4>
                    <a class="img" href='<?php echo $data["url"]; ?>' target="_blank">
                        <img src="assets/icons/right-arrow.png" alt="">
                    </a>
                </div>
            </div> 
            <?php } ?>         
        </div>