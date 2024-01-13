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
            $ad_catagory = $data['ad_catagory'];
            $ad_catagory = $data['ad_catagory'];
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
                <div class="skill_keywords">
                    <button>Real Estate Venture Capital</button>
                    <button>Market Segmentaion </button>
                    <button>Market Sizing </button>
                    <button>Business Research </button>
                    <button>Financial Modeling </button>
                    <button>Market Segmentaion </button>
                    <button>Market Segmentaion </button>
                    <button>Financial Modeling </button>
                    <button>Market Sizing </button>
                    <button>Real Estate Venture Capital</button>
                </div>
                <div class="warrper">
                    <div class='warrper_2'>
                        <h4>Project Highlights</h4>
                        <div class='warrper_row'>
                            <div>
                                <h5>Partner</h5>
                                <p>Strategia Partners</p>
                            </div>
                            <div>
                                <h5>Partner</h5>
                                <p>Strategia Partners</p>
                            </div>
                            <div>
                                <h5>Partner</h5>
                                <p>Strategia Partners</p>
                            </div>
                        </div>
                    </div>

                </div>
            <div class="work_experience">
                <h3>Work Experience</h3>
                <div class="work_content">
                    <div>
                        <h4>Partner</h4>
                    </div>
                    <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae ullam molestias laudantium ab quasi fugiat harum. Sit debitis optio illo. Doloremque, facere! Quam recusandae modi nihil quaerat, dolore obcaecati unde aliquid tempora incidunt odit sunt excepturi dignissimos ea aut, minima alias iste atque placeat! Tempore cum voluptatum nemo perspiciatis sint corporis officiis quia optio nostrum. Vel veritatis enim vero odio repudiandae vitae quaerat, voluptate nulla quam fuga saepe harum placeat. Qui aut velit eos corrupti facilis illum nobis adipisci delectus incidunt praesentium. Enim, atque! Nulla vero facere doloremque. Necessitatibus nobis at quis id a, molestiae quasi eveniet beatae explicabo culpa rem totam illum blanditiis dolores illo itaque repudiandae perspiciatis ipsum facilis minus molestias? Nobis voluptas eius ipsum. Explicabo cupiditate eos nobis optio suscipit non fuga dolores dignissimos minima at commodi eius, corrupti aut deserunt necessitatibus rerum delectus saepe tempora dicta velit iure quidem recusandae ut? Corporis, culpa ut praesentium similique eveniet illum et ad quibusdam voluptate molestias sapiente numquam quos non quidem dolore obcaecati, consectetur ipsa blanditiis quo sequi vero ratione assumenda rerum tempora. Amet, minus et. Quibusdam deleniti ipsam possimus debitis, tenetur quas fugiat, quia non suscipit sed nulla dolores obcaecati veritatis? Tempora molestias id vero iste magnam.</p>
                </div>
            </div>
                
            </div>
        </div>
    </div>
</div>

<?php include_once("include/team_slider.php"); ?>