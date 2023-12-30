<?php require_once "include/header.php"; ?>
<?php require_once "include/headerM.php"; ?>
<?php
if (!isset($_COOKIE[md5("name")])) {
	header('location:loginSign.php?log=login');
}
if (isset($_COOKIE[md5("name")])) {
	$idU = $_COOKIE[md5("name")];
}


$fun = new fun();
$udata = $fun->show_col('user', $idU);
$check = $udata->num_rows;
while ($data = $udata->fetch_array()) {
	if ($check === 1) {
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
	<!-- monuwar designing start from here  -->

	<style>
		#mainprofile {
			border-radius: 50%;
			width: 200px;
			height: 100%;
			max-height: 200px;
			max-width: 200px;
		}

		hr {
			margin: 20px;
			width: 100px;
		}

		#for-margin {
			margin: 50px 0;
		}

		.container form {
			width: 100%;
			box-shadow: 0 0 10px;
			border-radius: 1rem;
			padding: 2rem 2.5rem;
			transition: all 0.4s ease;
		}

		.container form img {
			width: 100%;
			height: 300px;
		}

		.container form label {
			font-size: 1.1rem;
			display: block;
			margin-top: 1rem;
			margin-bottom: 0.8rem;
			color: rgb(81, 77, 77);
			font-weight: 600;
		}

		.container form input {
			width: 100%;
			padding: 0.6rem;
			margin-top: 5px;
			outline: none;
			border: 1px solid rgb(188, 185, 185);
			font-size: 20px;
			border-radius: 0.2rem;
			cursor: pointer;
			transition: 0.5s;
		}

		.container form input:hover {
			border: 1px solid var(--primary);
			box-shadow: 0 0 12px #ddd;
		}


		.container form input::placeholder {
			color: lightgrey;
			font-size: 16px;
		}

		.container form:hover {
			box-shadow: 0 0 12px purple;
		}

		.update-btnn {
			padding: 20px 10px;
		}

		.no-change {
			padding: 40px 10px 10px 10px;
		}

		.update-btnn a {
			padding: 10px 15px;
			margin: 20px 5px;
			background: var(--primary);
			font-weight: 600;
			color: #fff;
			border-radius: 5px;
			transition: 0.5s;
		}

		.no-change a {
			padding: 10px 15px;
			margin: 20px 5px;
			background: var(--Secondary);
			font-weight: 600;
			color: #ffff;
			border-radius: 5px;
			transition: 0.5s;
		}

		.update-btnn a:hover,
		.no-change a:hover {
			padding: 11px 16px;
			margin: 20px 5px;
			background: #534949;
			color: #fff;
		}
	</style>
	<div class="container">

		<form action="" id="for-margin">
			<div class="view-profile-head">
				<label for="profile-banner">Profile Banner </label>
				<img src="./assets/images/1.jpg" id="profile-banner" alt="">
				<label for="change-profile-banner">Change Profile Banner </label>
				<input id="change-profile-banner" type="file">
			</div>
			<hr>
			<div class="view-main-profile">
				<label for="mainprofile">Main Profile </label>
				<img src="./assets/images/e.jpg" id="mainprofile" alt="">
				<label for="change-mainprofile">Change Main Profile </label>
				<input id="change-mainprofile" type="file">
			</div>
			<hr>
			<div class="view-profile-name">
				<label for="profilename">Profile Name </label>
				<input id="profilename" placeholder="Enter Your Name" type="text">
			</div>
			<div class="update-btnn">
				<a href="#">Update Now</a>
			</div>
			<div class="no-change">
				<a href="user_profile.php">No Change</a>
			</div>

		</form>
	</div>
	<!-- monuwar designing end from here -->
	<!-- edit er code start -->

<?php
} else {
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
				<a href="?edit" style="color: white;">
					<h4>Edit</h4>
				</a>
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