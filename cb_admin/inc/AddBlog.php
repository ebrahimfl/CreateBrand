<link rel="stylesheet" href="cb_admin/css/add_blog.css">




<form action="cb_admin/php/core.php" method="post" enctype="multipart/form-data">
    <input type="text" name="tittle" id="tittle" placeholder="Tittle" required>
    <input type="text" name="catagory" id="catagory" placeholder="Catagory" required>
    <!-- <textarea name="dsc" id="id" cols="20" rows="5" class="check" placeholder="Your Content" required></textarea> -->
    <?php include_once('include/text-editor.php') ?>
    <input type="file" name="img" id="img" value="Upload You Thamble">
    <input type="submit" class="btnn" value="Submite" name="b_sub">
</form>















<?php

?>