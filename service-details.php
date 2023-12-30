<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
$service_id = $_GET['id']; 
require_once "include/header.php"; ?>
<link rel="stylesheet" href="assets/css/service-details.css">
<?php require_once "include/headerM.php";
$conn = new fun();
$service_row = $conn->show_col("service",$service_id);
if($service_data = $service_row->fetch_assoc()){

?>
<?php
$action = isset($_GET['vew']);
if (!$action) {
    include_once("include/service-detels.php");
}elseif ($action=="team") {
    include_once("include/team_detels.php");    
}
?>


<?php include_once 'include/footer.php'; }
} ?>