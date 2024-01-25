<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);
if(!isset($_COOKIE[md5('name')])){
	header('Location:index.php');
}
$row = $function->show_col('user',$_COOKIE[md5('name')]);
$data = $row->fetch_assoc();
?>
<section id="user_profile">
	<div class="container">
		<form action="useer_profile/php/core.php" method="post" enctype="multipart/form-data">
	
			<div class="profile_header">
				<div class="banner_img">
					<input type="file" id="profile_banner" accept="image/png, image/jpeg, image/jpg" name="banner_img">
					<img src="assets/images/user/<?php echo $data['img_c'] ?>" name='img_cover' alt="">
				</div>
				<div class="profile_logo">
					<input type="file" id='profile-logo' accept=".png,.jpeg,.jpg" name='profile_logo'>
					<img src="assets/images/user/<?php echo $data['img'] ?>" name='img_logo' alt="" class="profile_logo">
					<label for="profile-logo" class="icons">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
							<path d="M2 2H5L7 0H13L15 2H18C18.5304 2 19.0391 2.21071 19.4142 2.58579C19.7893 2.96086 20 3.46957 20 4V16C20 16.5304 19.7893 17.0391 19.4142 17.4142C19.0391 17.7893 18.5304 18 18 18H2C1.46957 18 0.960859 17.7893 0.585786 17.4142C0.210714 17.0391 0 16.5304 0 16V4C0 3.46957 0.210714 2.96086 0.585786 2.58579C0.960859 2.21071 1.46957 2 2 2ZM10 5C8.67392 5 7.40215 5.52678 6.46447 6.46447C5.52678 7.40215 5 8.67392 5 10C5 11.3261 5.52678 12.5979 6.46447 13.5355C7.40215 14.4732 8.67392 15 10 15C11.3261 15 12.5979 14.4732 13.5355 13.5355C14.4732 12.5979 15 11.3261 15 10C15 8.67392 14.4732 7.40215 13.5355 6.46447C12.5979 5.52678 11.3261 5 10 5ZM10 7C10.7956 7 11.5587 7.31607 12.1213 7.87868C12.6839 8.44129 13 9.20435 13 10C13 10.7956 12.6839 11.5587 12.1213 12.1213C11.5587 12.6839 10.7956 13 10 13C9.20435 13 8.44129 12.6839 7.87868 12.1213C7.31607 11.5587 7 10.7956 7 10C7 9.20435 7.31607 8.44129 7.87868 7.87868C8.44129 7.31607 9.20435 7 10 7Z" fill="#fff" />
						</svg>
					</label>
				</div>
				<label for="profile_banner" class='banner_edit'>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
						<path d="M2 2H5L7 0H13L15 2H18C18.5304 2 19.0391 2.21071 19.4142 2.58579C19.7893 2.96086 20 3.46957 20 4V16C20 16.5304 19.7893 17.0391 19.4142 17.4142C19.0391 17.7893 18.5304 18 18 18H2C1.46957 18 0.960859 17.7893 0.585786 17.4142C0.210714 17.0391 0 16.5304 0 16V4C0 3.46957 0.210714 2.96086 0.585786 2.58579C0.960859 2.21071 1.46957 2 2 2ZM10 5C8.67392 5 7.40215 5.52678 6.46447 6.46447C5.52678 7.40215 5 8.67392 5 10C5 11.3261 5.52678 12.5979 6.46447 13.5355C7.40215 14.4732 8.67392 15 10 15C11.3261 15 12.5979 14.4732 13.5355 13.5355C14.4732 12.5979 15 11.3261 15 10C15 8.67392 14.4732 7.40215 13.5355 6.46447C12.5979 5.52678 11.3261 5 10 5ZM10 7C10.7956 7 11.5587 7.31607 12.1213 7.87868C12.6839 8.44129 13 9.20435 13 10C13 10.7956 12.6839 11.5587 12.1213 12.1213C11.5587 12.6839 10.7956 13 10 13C9.20435 13 8.44129 12.6839 7.87868 12.1213C7.31607 11.5587 7 10.7956 7 10C7 9.20435 7.31607 8.44129 7.87868 7.87868C8.44129 7.31607 9.20435 7 10 7Z" fill="#fff" />
					</svg>
					<span>Edit cover photo</span>
				</label>
			</div>
			<div class="top_save_bar">
				<div class="row">
				<div class='text'>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
						<path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM9 17.93C5.05 17.44 2 14.08 2 10C2 9.38 2.08 8.79 2.21 8.21L7 13V14C7 15.1 7.9 16 9 16V17.93ZM15.9 15.39C15.64 14.58 14.9 14 14 14H13V11C13 10.45 12.55 10 12 10H6V8H8C8.55 8 9 7.55 9 7V5H11C12.1 5 13 4.1 13 3V2.59C15.93 3.78 18 6.65 18 10C18 12.08 17.2 13.97 15.9 15.39Z" fill="#fff" />
					</svg>
					<h4>Your cover photo is public.</h4>
				</div>
				<div class='button'>
					<a href="" >Cancel</a>
					<button type='submit' name='profile_img_submit'>Save & change</button>
				</div>
				</form>
				</div>
			</div>
			<h2 class='user_name'><?php echo $data['name'] ?></h2>
			<p class='user_intro'><?php echo $data['intro'] ?></p>
			<section id="user_tab">
				<ul>
					<li><a href="user_profile.php" class="<?php echo $page == 'user_profile.php' ? 'active' : ''; ?>">Home</a></li>
					<li><a href="edit-profile.php" class="<?php echo $page == 'edit-profile.php' ? 'active' : ''; ?>">Profile</a></li>
					<li><a href="profile-about.php" class="<?php echo $page == 'profile-about.php' ? 'active' : ''; ?>">About</a></li>
					<li><a href="add-project.php" class="<?php echo $page == 'add-project.php' ? 'active' : ''; ?>">Add Project </a></li>
				</ul>
			</section>