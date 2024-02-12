<link rel="stylesheet" href="<?php base_url('assets/css/our-team.css') ?>">
    <section  id="our-team">
    <div class="row an"  data-an='fade-up'>
      <?php $function = new fun(); $row =  $function->show('admin');
        while($data = $row->fetch_assoc()){ 
            $username= $data['username'];     ?>
        <div class="card " data-team="<?php echo $data['ad_catagory'] ?>">
         <img src="<?php base_url('assets/images/team/'.$data['img']) ?>" alt="" class="card-img">
         <div class="text">
            <h3><?php echo $data['ad_name'] ?></h3>
            <p><?php echo $data['ad_catagory'] ?></p>
            <a href="<?php base_url('team/'.$username) ?>"><img src="<?php base_url('assets/icons/view-icons.png')?>">View</a>
         </div>
        </div>
        <?php }  ?>
    </div>
   </div>
</section>