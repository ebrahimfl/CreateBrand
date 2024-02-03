<?php

 $ad_name = $_COOKIE[md5('ad_name')];
$id = $_SESSION[md5("admin_brandOfcreate_id")];
$team_id = $_SESSION[md5("admin_brandOfcreate_ad_id")];

if ( $team_id && $id && $team_id) {

    
    $main_data = $function->select_count("SELECT * FROM admin WHERE ad_id=$team_id");
    
    
        while ($data1 = $main_data->fetch_assoc()) {
           $name =  $data1["ad_name"];
            $acces =  $data1["acces"];
            $username =  $data1["username"];
            $ad_catagory =  $data1["ad_catagory"];
            $exp_about =  $data1["exp_about"];
            $dsc =  $data1["dsc"];
            $location =  $data1["location"];
            $data =  $data1["data"];
            $img =  $data1["img"];            
        }
        ?>


        <?php
        // project code 
        $main_data1 = $function->select_count("SELECT * FROM  admin_project WHERE ad_id=$team_id");
        while ($data1 = $main_data1->fetch_assoc()) {
            $project =  $data1["project"];
            $title =  $data1["title"];
            $des =  $data1["des"];
            $img =  $data1["img"];
            $url =  $data1["url"];
            $date =  $data1["date"];
        }
        ?>
        <!-- project code -->





        <?php
        // skill code
        $main_data2 = $function->select_count("SELECT * FROM  admin_skill WHERE ad_id=$team_id");
        while ($data1 = $main_data2->fetch_assoc()) {
            $skill =  $data1["skill"];
            $url =  $data1["url"];
        ?>
        <!-- skill code -->
        <table>
            <td><?php echo  $skill; ?></td>
        </table>
            

        <?php            
            }

        ?>




<?php   
    }

?>
