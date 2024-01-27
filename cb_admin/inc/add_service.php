




<link rel="stylesheet" href="cb_admin/css/add_blog.css">

<form action="cb_admin/php/core.php" method="post" enctype= "multipart/form-data" >
    <label for="title">Service Name </label>
    <input type="text" name="title" id="title" placeholder="Title" required>

    <label for="id">Service Description</label>
    
    <?php include_once("include/text-editor.php") ?>      
    <input type="file" name="img" id="img">    
    <input type="submit" class="btnn" value="Submite" name="S_sub">
</form>


