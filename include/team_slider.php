
<link rel="stylesheet" href="assets/css/service-details.css">

<div class="container">
    <div class="our-team" margin-top='30px'>
            <h2 style="margin-top:80px" class="an fade-right" data-an="fade-right">Our Team</h2>
            <div class="rows">
                <?php $function = new fun(); $row =  $function->show('admin');
                    while($data = $row->fetch_assoc()){ 
                        $id= $data['id'];     ?>
                    <div class="card " data-team="<?php echo $data['ad_catagory'] ?>">
                    <img src="assets/images/team/<?php echo $data['img'] ?>" alt="" class="card-img">
                    <div class="text">
                        <h3><?php echo $data['ad_name'] ?></h3>
                        <p><?php echo $data['ad_catagory'] ?></p>
                        <a href="service-details.php?vew=team&&id=<?php echo $id;?>"><img src='assets/icons/view-icons.png'>View</a>
                    </div>
                    </div>
                <?php }  ?>           
                
            </div>
    </div>
</div>