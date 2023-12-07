<?php
if (isset($_GET['id'])) {
$id =$_GET['id'];
include_once("../php/fun/fun.php");
$conn = new addmin;
?>




<?php
    $blog_show = $conn->show_col("blog",$id);
    while ($data = mysqli_fetch_assoc($blog_show)) {
        $title = $data['title'];
        $dsc = $data['dsc'];
        $mata = $data['mata'];
        $img = $data['img'];
        $catagory = $data['catagory'];
        
    

?>
<form action="../php/core.php?id=<?php echo $id; ?>" method="post" enctype= "multipart/form-data" >
    <input type="text" name="title" id="title"  value="<?php echo $title; ?>" required>
    <textarea name="dsc" id="id" cols="30" rows="10"  required><?php echo $dsc; ?></textarea>
    <input type="text" name="mata" id="mata" value="<?php echo $mata; ?>" required>
    <input type="text" name="catagory" id="catagory" value="<?php echo $catagory; ?>" required>
    <input type="file" name="img" id="img" value="Upload You Thamble">
    <input type="submit" value="Submite" name="blogup">
    
    
</form>




<?php 
}
} ?>