<?php

if (isset($_GET['action'])) {
    $check = $_GET['action'];
    $id = $_GET['id'];
    if ($check==="delete") {
        header("location:../php/core.php?action=delete&&id=$id");
    }elseif ($check==="update") {
        header("location: ../../admin.php?action=blogup&&id=$id");
    }
}else {
include_once("./cb_admin/php/fun/fun.php");
$conn = new addmin;
?>


 <table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Dscription</th>
        <th>Mata Dsc</th>
        <th>IMG</th>
        <th>Catagory</th>
    </tr>
    
    <?php 
        $blog= $conn->show("blog");
        $i = 0;
        while ($con= mysqli_fetch_assoc($blog)) {
        $i++;
        $id = $con["id"];
        $title = $con["title"];
        $dsc = $con["dsc"];
        $mata = $con["mata"];
        $img = $con["img"];
        $catagory = $con["catagory"];
    ?>
    <tr>
        <td> <?php echo $i; ?></td>
        <td><?php echo $title; ?></td>
        <td><?php echo $dsc; ?></td>
        <td><?php echo $mata; ?></td>
        <td><?php echo $img; ?></td>
        <td><?php echo $catagory; ?></td>
        <td><a href="cb_admin/inc/allBlog.php?action=delete&&id=<?php echo $id; ?>">Delete</a> | <a href="cb_admin/inc/allBlog.php?action=update&&id=<?php echo $id; ?>">Update</a></td>
    </tr>
<?php
    
    }
?>
 </table>

 
 <?php } ?>
