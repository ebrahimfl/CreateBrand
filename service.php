<?php require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/service.css">
<?php require_once "include/headerM.php"; ?>

<div class="container">
    <section id='service'>
        <h2 class="sec-titel">Our Services</h1>
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
                    <a href="service-details.php?id=<?php echo $id ?>">
                        <div class="card_img">
                            <img src="assets/icons/website.png" alt="<?php echo $ser_name ?>">
                        </div>
                        <div class="card-text">
                            <h3><?php echo $ser_name ?></h4>
                            <p><?php echo $ser_dec ?></p>
                            <p class="price" style='margin-top:5px'><b style='color:#FD3434'>Price: </b> <?php echo $s_price ?></p>
                        </div>
                        </a>
                </div>
                <?php } ?>
            </div>
    </section>
</div>


<?php require_once "include/footer.php"; ?>