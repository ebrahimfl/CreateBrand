<link rel="stylesheet" href="assets/css/team_details.css">


<?php
$id = $_GET["id"];
if (!$id) {
    header("location: ../our-team.php");   
}
 $function = new fun(); 
 $row =  $function->show_col("admin",$id);
 $check = mysqli_num_rows($row);
 

 if ($check === 1) {
        while ($data = $row->fetch_assoc()) {
            $ad_id = $data['ad_id'];
            $img = $data['img'];
            $ad_name = $data['ad_name'];
            $ad_catagory = $data['ad_catagory'];
            $location = $data['location'];            
            $dsc = $data['dsc'];            
            $verifiy = $data['verifiy'];            
            $exp_about = $data['exp_about'];            
            $datea=date_create($data['data']);
            $join_date = date_format($datea,"d M Y");
            
        }    
    }  
    

?>
<div id="team_details">
    <div class="container">
        <div class="row">
            <div class="image">
                <img src="assets/images/team/<?php echo $img ?>" alt="">
            </div>
            <div class="text">
                <h2><?php echo $ad_name ?></h2>
                <h4 class='expert'><?php echo $ad_catagory ?></h4>
                <div class="warrper warrper_1">
                    <div>
                        <h5>Location</h5>
                        <h4><?php echo $location ?></h4>
                    </div>
                    <div>
                        <h5>Create of Brand Join Date</h5>
                        <h4><?php echo $join_date ?></h4>
                    </div>
                </div>
                <p><?php echo $dsc ?> </p>


                <!-- skill -->
                <div class="skill_keywords">
                    <h4 style="display: block; width:100%">Skill</h4> 
                    <?php 
                    $skill = $function->skill("admin_skill", $ad_id);
                        
                            while ($skilla=$skill->fetch_assoc()) {
                                // skill show
                                $skillShow = $skilla['skill'];
                    ?>
                        <button><?php echo $skillShow; ?></button>
                    <?php
                            }
                        
                    ?>
                    
                </div>




                <!-- project -->                
            <section id="blog">                
                <div class="rows">
                <h4>Project</h4>
                    <div class="content"> 
                                                
                        <?php 
                                $project = $function->skill("admin_project", $ad_id);
                            
                                while ($skilla=$project->fetch_assoc()) {
                                    // skill show
                                    $pro_id = $skilla['id'];
                                    $pro_project = $skilla['project'];
                                    $pro_title = $skilla['title'];
                                    $pro_des = $skilla['des'];
                                    $pro_img = $skilla['img'];
                            ?>
                                <a href="" class="blog_link an" data-an='fade'>
                                    <div class="card1">
                                        <div class="img">
                                            <img src="assets/images/project/<?php echo $pro_img  ?>" alt="">
                                        </div>
                                        <div class="blog_text">
                                            <h3><?php echo substr($pro_title,0,15)."..." ?></h3>
                                            <p><?php echo substr($pro_des,0,50)."..." ?></p>
                                            
                                        </div>
                                    </div>
                                </a>  
                            <?php
                                }
                            
                            ?>                      
                                                  
                    </div>
                </div>
            </section>
        
      
            <div class="work_experience">
                <h3>Work Experience</h3>
                <div class="veryfy">
                    <p class="name_company">Creat of Brand</p>
                    <?php
                        if ($verifiy == 1) {
                            $v_img ="verifiy.png";
                        }else {
                            $v_img ="verifiy_not.png";
                        }
                    ?>
                    <img src="assets/icons/<?php echo $v_img ?>" class="verigiy" alt="" srcset="">
                </div>

            </div>

            <div class="work_experience">
                <div class="work_content">
                    <div>
                        <h3>About</h3>
                    </div>
                    <p class='description'><?php echo $exp_about  ?></p>
                </div>
            </div>

            
                
            </div>
        </div>
    </div>
</div>

<?php include_once("include/team_slider.php"); ?>

