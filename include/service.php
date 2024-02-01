<link rel="stylesheet" href="<?php base_url('assets/css/service.css')?>">
<?php 
?>
    <section id='service'>
     <div class="container">
        <h2 class="sec-titel">Our Services</h2>
            <div class="service">
                <?php
                include_once("./assets/php/function.php");
                $show = new fun();
                $ser = $show->show("service");
                while ($conn = mysqli_fetch_assoc($ser)) {
                    $id = $conn['id'];
                    $ser_name = $conn['ser_name'];
                    $s_price = $conn['s_price'];
                    $ser_dec = $conn['ser_dec'];
                    $ser_img = $conn['ser_img'];
                    $date = $conn['date'];
                ?>
                <div class="card">
                    <a href="services/<?php echo str_replace(' ','-',$ser_name) ?>">
                        <div class="card_img">
                            <img src="<?php base_url('assets/icons/website.png')?>" alt="<?php echo $ser_name ?>">
                        </div>
                        <div class="card-text">
                            <h3> <?php echo $ser_name ?></h4>
                            <p><?php echo $show->textShorten($ser_dec,90)  ?></p>
                        </div>
                        </a>
                </div>
                <?php } ?>
            </div>
            </div>
    </section>
