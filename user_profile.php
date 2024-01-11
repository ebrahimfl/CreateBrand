<?php require_once "include/header.php";


?>
<?php require_once "include/headerM.php"; ?>
<?php
if (!isset($_COOKIE[md5("name")])) {
	header('location:loginSign.php?log=login');
}
if (isset($_COOKIE[md5("name")])) {
	$idU = $_COOKIE[md5("name")];
}
include_once("./cb_admin/php/fun/fun.php");

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
		<form action="./cb_admin/php/core.php?id=<?php echo $idU; ?>" method="post" enctype="multipart/form-data">
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
				<input id="profilename" name="new_name" placeholder="Enter Your Name" type="text">
			</div>
			<div class="update-btnn">
				<a href="?update_profile_name">Update Now</a>
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
			</ul>
		</div>
	</section>
	<!-- monuwar section start from here  -->
	<?php




	$main_fun = $fun->show_col('user', $idU);

	while ($fetch_data_user = $main_fun->fetch_assoc()) {
		$user_eamil = $fetch_data_user['email'];
		$user_name = $fetch_data_user['name'];
		$user_nambar = $fetch_data_user['nambar'];
		$user_coutry = $fetch_data_user['coutry'];
		$user_cover_image = $fetch_data_user['img_c'];
		$user_profile_image = $fetch_data_user['img'];
	}



	?>
	<style>
		hr {
			margin: 20px;
			width: 40px;
		}

		.about {
			padding: 30px 20px;
			background: #ddd;
			border-radius: 10px;
			margin: 20px 0;
			width: 100%;
			box-shadow: 0 0 5px;
			border-radius: 5px;
			padding: 2rem 2.5rem;
			transition: all 0.4s ease;
		}

		.about:hover {
			box-shadow: 0 0 7px purple;
		}

		.about .content-about .email-field .field-text img,
		.number-field .field-text img,
		.country-field .field-text img {
			margin-right: 10px;
			max-width: 40px;
			max-height: 40px;


		}

		.about .content-about .email-field input,
		.number-field input,
		.country-field input {
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

		.about .content-about .email-field label,
		.number-field label,
		.country-field label {
			font-size: 1.1rem;
			display: block;
			margin-top: 1rem;
			margin-bottom: 0.8rem;
			color: var(--Secondary);
			font-weight: 600;
		}

		.about .content-about .email-field p,
		.number-field p,
		.country-field p {
			font-size: 1.1rem;
			display: block;
			margin-top: 1rem;
			margin-bottom: 0.8rem;
			color: var(--Secondary);
			font-weight: 600;
		}

		.about .content-about input:hover {
			border: 1px solid var(--primary);
			box-shadow: 0 0 12px #595151;
		}

		.about-btn {
			margin: 20px 0;
			display: flex;
		}

		.about-btn .save-right {
			padding: 10px 15px;
			background: var(--Secondary);
			font-weight: 600;
			color: #ffff;
			border-radius: 5px;
			transition: 0.5s;
			display: flex;
			width: 100px;
			height: 100%;
			margin-right: 10px !important;
		}

		.about-btn .save-right img {
			max-width: 25px;
			max-height: 25px;
		}

		.about-btn .save-right input[type=submit] {
			width: 100%;
			outline: none;
			border: 1px solid var(--Secondary);
			font-size: 16px;
			border-radius: 0.2rem;
			cursor: pointer;
			transition: 0.5s;
			background: var(--Secondary);
			padding: 0;
			margin: 0;

		}

		.about-btn .save-right:hover,
		.about-btn .save-right input[type=submit]:hover {
			border: none;
			background: #534949;
			color: #fff;
		}


		.about-btn .cancel-cross {
			padding: 10px 15px;
			background: var(--primary);
			font-weight: 600;
			color: #ffff;
			border-radius: 5px;
			transition: 0.5s;
			display: flex;
			width: 120px;
			height: 100%;

		}

		.about-btn .cancel-cross img {
			max-width: 25px;
			max-height: 25px;
		}

		.about-btn .cancel-cross a {
			color: #fff;
			padding: 2px 0px 0px 5px;
		}

		.about-btn .cancel-cross:hover {
			padding: 11px 16px;
			background: #534949;
			color: #fff;
		}


		.content-about .add-number-main,
		.add-email-main,
		.add-country-main {
			margin: 40px 0 !important;
		}

		.content-about .add-number-main,
		.add-email-main,
		.add-country-main {
			padding: 10px 15px;
			font-weight: 600;
			color: #ffff;
			border-radius: 5px;
			transition: 0.5s;
			display: flex;
			width: 200px;
			border: 1px solid #fff;
		}

		.content-about .add-number-main:hover,
		.add-email-main:hover,
		.add-country-main:hover {
			padding: 11px 16px;
			color: #fff;
		}

		.content-about .add-number-main a,
		.add-email-main a,
		.add-country-main a {
			text-decoration: none;
			padding-top: 4px;
			padding-left: 10px;
			color: #000;
		}

		.content-about .add-number-main img,
		.add-email-main img,
		.add-country-main img {
			max-width: 25px;
			max-height: 25px;
		}

		.field-text {
			display: flex;
			align-items: center;
		}
	</style>


	<section class="profile-details-btn-link container ">

		<div class="about">
			<div class="content-about">
				<form action="./cb_admin/php/core.php?id=<?php echo $idU; ?>" method="post" enctype="multipart/form-data">
					<div class="email-field">
						<!-- if added the email -->
						<?php if ($user_eamil == !null) { ?>

							<div class="field-text">
								<img src="assets/images/cross right icon/about-email.png" alt="">
								<p>: <?php echo $user_eamil;  ?></p>
							</div>
							<div class="add-email-main">
								<img src="assets/images/cross right icon/edit.png" alt="">
								<a id="add-email" href="?change_eamil_get"> Change email </a>

							</div>
						<?php
						} else if ($user_eamil == null) { ?>

							<div class="add-email-main">
								<img src="assets/images/cross right icon/add.png" alt="">
								<a href="?add_eamil_get_get"> Add email </a>

							</div>

						<?php }
						if (isset($_GET["add_eamil_get_get"])) { ?>
							<div class="add-email-child">
								<label for="email-change">Add Email Now </label>
								<input type="text" id="email-change" name="add_email_input" placeholder="Enter your eamil address">
								<div class="about-btn">
									<div class="save-right">
										<img src="assets/images/cross right icon/about-right.png" alt="">
										<input type="submit" value="Save" name="save_add_eamil_get">

									</div>
									<div class="cancel-cross">
										<img src="assets/images/cross right icon/about-cross.png" alt="">
										<a href="?change_email_input_cancel">cancel</a>
									</div>

								</div>

							</div>

						<?php }

						if (isset($_GET['change_eamil_get'])) { ?>
							<div class="add-email-child">

								<label for="email-change">Email Change Now </label>
								<input type="text" id="email-change" name="change_email_input" placeholder="Enter your eamil address">


								<div class="about-btn">
									<div class="save-right">
										<img src="assets/images/cross right icon/about-right.png" alt="">
										<input type="submit" value="Save" name="save_change_email_input">

									</div>
									<div class="cancel-cross">
										<img src="assets/images/cross right icon/about-cross.png" alt="">
										<a href="?change_email_input_cancel">cancel</a>
									</div>

								</div>

							</div>
						<?php
						}

						if (isset($_GET['change_email_input_cancel'])) {
							echo " <script>window.open('user_profile.php','_self')</script> ";
						}

						?>


					</div>
					<hr>
					<div class="number-field">
						<?php if ($user_nambar == !null) { ?>

							<div class="field-text">
								<img src="assets/images/cross right icon/about-numberr.png" alt="">
								<p>: <?php echo $user_nambar;  ?></p>
							</div>
							<div class="add-number-main">
								<img src="assets/images/cross right icon/edit.png" alt="">
								<a href="?change_number_get">Change Number </a>
							</div>
						<?php } else if ($user_nambar == null) { ?>
							<div class="add-number-main">
								<img src="assets/images/cross right icon/add.png" alt="">
								<a href="?add_number_get">Add Number </a>
							</div>


						<?php 	}

						if (isset($_GET["change_number_get"])) { ?>
							<div class="add-number-child">
								<label for="email-change">Number Change Now </label>
								<input type="text" id="email-change" maxlength="13" value="880" minlength="11" name="change_number_input">
								<div class="about-btn">
									<div class="save-right">
										<img src="assets/images/cross right icon/about-right.png" alt="">
										<input type="submit" value="Save" name="save_change_number_get">
									</div>
									<div class="cancel-cross">
										<img src="assets/images/cross right icon/about-cross.png" alt="">
										<a href="?change_number_cancel">cancel</a>
									</div>

								</div>
							</div>
						<?php }
						if (isset($_GET['add_number_get'])) { ?>
							<div class="add-number-child">
								<label for="email-change">Number Add Now </label>
								<input type="text" maxlength="13" value="880" minlength="11" name="add_number_input">
								<div class="about-btn">
									<div class="save-right">
										<img src="assets/images/cross right icon/about-right.png" alt="">
										<input type="submit" value="Save" name="add_number_get_save">
									</div>
									<div class="cancel-cross">
										<img src="assets/images/cross right icon/about-cross.png" alt="">
										<a href="?change_number_cancel">cancel</a>
									</div>

								</div>
							</div>
						<?php }

						if (isset($_GET["change_number_cancel"])) {
							echo "<script>window.open('user_profile.php','_self')</script>";
						}

						?>

					</div>
					<hr>
					<div class="country-field">

						<?php if ($user_coutry == !null) { ?>
							<div class="field-text">
								<img src="assets/images/cross right icon/about-home.png" alt="">
								<p>: <?php echo $user_coutry;  ?></p>
							</div>
							<div class="add-country-main">
								<img src="assets/images/cross right icon/edit.png" alt="">
								<a href="?change_address_get">Change Address </a>
							</div>
						<?php } else if ($user_coutry == null) { ?>
							<div class="add-country-main">
								<img src="assets/images/cross right icon/add.png" alt="">
								<a href="?add_adress_get">Add Address </a>
							</div>
						<?php 	}

						if (isset($_GET["change_address_get"])) {
						?>
							<div class="add-country-child">
								<label for="email-change">Country Change Now</label>
								<input type="text" name="change_country_input" placeholder="Inter your country name">
								<div class="about-btn">
									<div class="save-right">
										<img src="assets/images/cross right icon/about-right.png" alt="">
										<input type="submit" value="Save" name="change_country_get">
									</div>
									<div class="cancel-cross">
										<img src="assets/images/cross right icon/about-cross.png" alt="">
										<a href="?change_address_cencel">cancel</a>
									</div>

								</div>
							</div>
						<?php  }
						if (isset($_GET["add_adress_get"])) { ?>
							<div class="add-country-child">
								<label for="email-change">Country Add Now</label>
								<input type="text" name="country_add_input" placeholder="Inter your country name">
								<div class="about-btn">
									<div class="save-right">
										<img src="assets/images/cross right icon/about-right.png" alt="">
										<input type="submit" value="Save" name="save_add_country_get">
									</div>
									<div class="cancel-cross">
										<img src="assets/images/cross right icon/about-cross.png" alt="">
										<a href="?change_address_cencel">cancel</a>
									</div>

								</div>
							</div>
						<?php	}
						if (isset($_GET["change_address_cencel"])) {
							echo "<script>window.open('user_profile.php','_self')</script>";
						}


						?>

					</div>
				</form>
			</div>
		</div>
	</section>

	<script>



	</script>

	<!-- monuwar section end from here  -->


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