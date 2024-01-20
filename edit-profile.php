<?php if(!isset($_COOKIE[md5('name')])){
	header('Location:index.php');
}
 include_once('include/header.php') ?>
<link rel="stylesheet" href="assets/css/profile.css">
<?php include_once('include/headerM.php') ?>
<?php include_once('include/profile-include.php');

?>


<div class="content">
	<h3>Update Your Profile</h3>

	<div class="row">
	<form action="useer_profile/php/core.php" method="post">
			<div class='form-control'>
				<label for="profile_name">Name</label>
				<input type="text" name="name" placeholder="enter your name" id="profile_name" required value='<?php echo $data['name'] ?>'>
			</div>
			<div class='form-control'>
				<label for="profile_name">Username</label>
				<input class="form-control" type="text" placeholder="username" name="username" required value='<?php echo $data['username'] ?>'>
			</div>
		
			<div class='form-control'>
				<label for="profile_name">Nid Card or Birthday Certificate Number </label>
				<input class="form-control" type="text" placeholder="nid or brith" name="nid_brith" required value='<?php echo $data['nid_brith'] ?>'>
			</div>	<div class='form-control'>
				<label for="profile_name">birthday </label>
				<input class="form-control" type="text" placeholder="birthday" name="birthday" required value='<?php echo $data['birthday'] ?>'>
			</div>
			<div class='form-control'>
				<label for="profile_name">Gander</label>
				<select name="gander" id="">
					<?php if($data['gander'] == 'Male'){ ?>
					<option selected value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
					<?php } ?>
					<?php if($data['gander'] == 'Female'){ ?>
					<option  value="Male">Male</option>
					<option selected value="Female">Female</option>
					<option value="Other">Other</option>
					<?php } ?>
					<?php if($data['gander'] == 'Other'){ ?>
					<option  value="Male">Male</option>
					<option  value="Female">Female</option>
					<option selected value="Other">Other</option>
					<?php } ?>
				</select>
			</div>
			<input type="submit" value='submit' name='user_data' class="btn_normal" style='max-width:150px'>
		
	</form>

	<form action="">
			<div class='form-control'>
				<label for="profile_name">Name</label>
				<input type="text" placeholder="enter your name" id="profile_name" required>
			</div>
			<div class='form-control'>
				<label for="profile_name">Email address</label>
				<input type="email" placeholder="enter your email" id="profile_name" required>
			</div>
			<div class='form-control'>
				<label for="profile_name">Email address</label>
				<input type="text" placeholder="enter your email" id="profile_name" required>
			</div>
			<div class='form-control'>
				<label for="profile_name">Username</label>
				<input class="form-control" type="text" placeholder="username" required >
			</div>
			<div class='form-control'>
				<label for="profile_name">Gander</label>
				<select name="gander" id="">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
			</div>
	
		</form>
	</div>


</div>

</div>
</section>


<?php
 include_once('include/footer.php') ?>