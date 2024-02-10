<div id="service-details">
    <h1>Our Service</h1>
    <div class="container">
        <div class="slider an" style="margin-bottom: 40px;" data-an='fade'>
            <div class="img">
                <img src="<?php base_url('assets/images/slider/web-design-01.svg') ?>" alt="">
            </div>
            <div class="img">
                <img src="<?php base_url('assets/images/slider/web-design-02.svg')?>" alt="">
            </div>
            <div class="img">
                <img src="<?php base_url('assets/images/slider/bug-fix.svg')?>" alt="">
            </div>
            <div class="img">
                <img src="<?php base_url('assets/images/slider/dashboard-1.svg')?>" alt="">
            </div>
            <div class="img">
                <img src="<?php base_url('assets/images/slider/dashboard-2.svg')?>" alt="">
            </div>
        </div>
       
        <div class="content">
            <div class="heading">
                <h2 style=''><?php echo $service_data['ser_name'] ?></h2>
            </div>
            <div class="description">
                <p>
                    <?php echo $service_data['ser_dec'] ?>
                </p>
            </div>
        </div> 
        <div class="container">
            <style>h3.btn {width: fit-content; padding: 5px 13px; margin: auto; background: #0e64db;border-radius: 5px; margin-top: 10px; color: white;}</style>
            <a href="<?php base_url('all-service/pricing')?>"><h3 class="btn">Order Now</h3></a>
        </div>       
    </div>
</div>

    <?php include_once("include/revew.php"); ?>
        <?php include_once("include/service_slider.php"); ?>
    <!-- team -->
        <?php include_once("include/team_slider.php"); ?>
    <!-- ebd -->
    <?php include_once("include/work_slider.php"); ?>

        




