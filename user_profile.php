<?php require_once "include/header.php"; ?>
<?php require_once "include/headerM.php"; ?>
<?php
if (!isset($_COOKIE[md5("name")])) {
    header('location:loginSign.php?log=login');
}
?>


<link rel="stylesheet" href="assets/css/profile.css">

<section class="container">
		<!-- ============== profile header ============= -->
		<div class="profile-header">
			<div class="profile-header-img">
				<img src="assets/images/Screenshot_1.png" alt="">
			</div>
			<div class="pro-edit-item">
				<div>
					<img src="assets/icons/white.png	" alt="">
				</div>
				<div>
					<label class="cng-cover">Edit Cover Photo</label>
					<input type="file" class="profile-input" id="upload">
				</div>
			</div>
		</div>
		<!-- -=================== profile header end ============== -->
		<!-- ============================= main profile section =============== -->
		<div class="main-profile">
			<div class="main-profile-item">
				<div class="profile-img">
					<img src="assets/images/e.jpg" alt="">
				<div class="profile-img-edit">
					<img src="assets/icons/white.png" alt="" id="change-profile">
					<input type="file" class="profile-input" id="profile-file">
				</div>
				</div>
				<div>
					<h4 class="profile-name">Marley udoy</h4>
				</div>
			</div>
			<div class="profile-reedit">
				<img src="assets/icons/edit.png" alt="">
				<h4>Edit</h4>
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
    






	<script>
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
	</script>
<?php require_once "include/footer.php"; ?>


