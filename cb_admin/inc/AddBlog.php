<?php
include_once("./cb_admin/php/fun/fun.php");
$conn = new addmin;
?>

<form action="cb_admin/php/core.php" method="post" enctype= "multipart/form-data" >
    <input type="text" name="title" id="title" placeholder="Title">
    <textarea name="dsc" id="id" cols="30" rows="10"></textarea>
    <input type="text" name="mata" id="mata" placeholder="Mata Dsciption">
    <input type="text" name="catagory" id="catagory" placeholder="Catagory">
    <input type="file" name="img" id="img" value="Upload You Thamble">
    <input type="submit" value="Submite" name="b_sub">
    <a href=""></a>
    
</form>












<?php 

?>