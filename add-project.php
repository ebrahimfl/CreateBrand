<?php if (!isset($_COOKIE[md5('name')])) {
    header('Location:index.php');
}
include_once('include/header.php') ?>
<link rel="stylesheet" href="assets/css/profile.css">
<?php include_once('include/headerM.php') ?>
<?php include_once('include/profile-include.php');

?>

<div class="content">
  <h3>Add A New Project</h3>
    <form action="useer_profile/php/core.php" method="post" enctype="multipart/form-data">
        <div class='form-control'>
            <label for="profile_name">Project Title</label>
            <input type="text" name="title" placeholder="enter project title" id="project_title" required autocomplete="off">
        </div>
        <div class='form-control'>
            <label for="profile_name">Project Description</label>
            <textarea name="description" placeholder="enter project description" required id="description" autocomplete="off"></textarea>
        </div>

        <div class='form-control'>
            <label for="profile_name">Project Zip File</label>
            <input type="file" name="project_file" placeholder="enter project title" id="project_file"  accept=".zip" required autocomplete="off">
        </div>
      
        <input type="submit" value='submit' name='user_project_add' class="btn_normal" style='max-width:150px'>

    </form>
</div>
</div>
</section>


<?php
include_once('include/footer.php') ?>