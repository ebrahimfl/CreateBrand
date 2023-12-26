<?php require_once "include/header.php"; ?>
<?php require_once "include/headerM.php"; ?>
<?php
if (!isset($_COOKIE[md5("name")])) {	
    header('location:loginSign.php?log=login');
}
if (isset($_COOKIE[md5("name")])) {	
	$idU= $_COOKIE[md5("name")];
}


$fun = new fun();
			$udata = $fun->show_col('user',$idU);			
			$check = $udata->num_rows;
			while ($data = $udata->fetch_array()) {
				if ($check===1) {
					$name = $data['name'];
					$email  = $data['email'];
					$nambar = $data['nambar'];
					$img = $data['img'];
					$img_c = $data['img_c'];
					$coutry = $data['coutry'];				
				}
			}
			
if (isset($_GET["edit"])) {
?>
<link rel="stylesheet" href="assets/css/profile.css">
<div class="container">
	<a href="user_profile.php">No Change</a>
</div>

<!-- edit er code start -->

<?php 	
}else {
?>
	<link rel="stylesheet" href="assets/css/profile.css">
	<section class="container">
		<!-- ============== profile header ============= -->
		<div class="profile-header">
			<div class="profile-header-img">
				<img src="assets/images/user/<?php echo $img_c; ?>" alt="">
			</div>			
		</div>
		<!-- -=================== profile header end ============== -->
		<!-- ============================= main profile section =============== -->
		<div class="main-profile">
			<div class="main-profile-item">
				<div class="profile-img">
					<img src="assets/images/user/<?php echo $img; ?>" alt="">
				<!-- <div class="profile-img-edit">
					<img src="assets/icons/white.png" alt="" id="change-profile">
					<input type="file" class="profile-input" id="profile-file">
				</div> -->
				</div>
				<div>
					<h4 class="profile-name"><?php echo $name; ?></h4>
				</div>
			</div>
			<div class="profile-reedit">
				<img src="assets/icons/edit.png" alt="">
				<a href="?edit" style="color: white;"><h4>Edit</h4></a>
			</div>
		</div>
			<div class="profile-details">
				<ul class="profile-details-list">
					<li><a href="#">About</a></li>
					<li><a href="#">Project</a></li>
					<li><a href="#">Post</a></li>
					<li><a href="#">Post</a></li>
					<li><a href="#">Post</a></li>
				</ul>
			</div>
	</section>
	<!-- <script>
		const changeCover = document.querySelector(".cng-cover")
		const upload = document.getElementById("upload")
		const changeProfileBtn = document.getElementById("change-profile")
		const changeProfile = document.getElementById("profile-file")
		changeCover.addEventListener("click",function(){
			upload.click()
		})
		changeProfileBtn.addEventListener("click",function(){
			changeProfile.click()
		})
	</script> -->
<?php 
}
require_once "include/footer.php"; 
?>


