<link rel="stylesheet" href="assets/css/about.css">
<section id="about">

    <div class="container">
    <!-- <h2 style="margin-top: 30px;" class="sec-titel">Our Services</h2> -->

        <div class="services" id='scroll'>
        
            <?php 
                include_once("assets/php/function.php");
                $fun = new fun();
                $datat = $fun->show("service");
                

                while ($data= $datat->fetch_assoc()) {
                    $id = $data['id'];
                    $ser_name = $data['ser_name'];
                    $s_price = $data['s_price'];
                    $ser_dec = $data['ser_dec'];
                    $ser_img = $data['ser_img'];
                    $date = $data['date'];           
                
            ?>
                    <div class="card">        
                    <a href="service-details.php?id=<?php echo $id ?>">        
                        <div class="card_img">
                            <img src="assets/icons/<?php echo $ser_img;?>" alt="">
                        </div>
                        <h3><?php echo $ser_name;?></h3>
                        <p><?php echo $fun->textShorten($ser_dec,90); ?></p>
                    </a>
                    </div>         
                    
            <?php } ?>     
        </div>
    </div>

</section>