
<link rel="stylesheet" href="assets/css/service-details.css">

<div class="container">
    <div class="our-team" margin-top='30px'>
            <h2 style="margin-top:80px" class="an fade-right" data-an="fade-right">Our Team</h2>
            <div class="rows">
                <?php $function = new fun(); $row =  $function->show('ourteam');
                    while($data = $row->fetch_assoc()){ 
                        $id= $data['id'];     ?>
                    <div class="card " data-team="<?php echo $data['category'] ?>">
                    <img src="assets/images/team/<?php echo $data['image'] ?>" alt="" class="card-img">
                    <div class="text">
                        <h3><?php echo $data['name'] ?></h3>
                        <p><?php echo $data['category'] ?></p>
                        <a href="service-details.php?vew=team&&id=<?php echo $id;?>"><img src='assets/icons/view-icons.png'>View</a>
                    </div>
                    </div>
                <?php }  ?>           
                
            </div>
    </div>
</div>