<link rel="stylesheet" href="assets/css/our-team.css">

    
    <section  id="our-team">
    <div class="row an"  data-an='fade-up'>
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
</section>