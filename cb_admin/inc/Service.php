<!-- add service -->
<?php

if (isset($_GET['action'])) {
    $check = $_GET['action'];
    $id = $_GET['id'];
    if ($check==="delete") {
        header("location:../php/core.php?action=delets&&table=service&&id=$id");
    }elseif ($check==="update") {
        header("location: ../../admin.php?action=blogup&&id=$id");
    }
}else{

include_once("cb_admin/php/fun/fun.php");
$conn = new addmin;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
?>
    <?php
    $blog_show = $conn->show_col("service", $id);
    while ($data = mysqli_fetch_assoc($blog_show)) {
        $ser_name = $data['ser_name'];
        $ser_dec = $data['ser_dec'];
        $s_price = $data['s_price'];
        $ser_img = $data['ser_img'];
        $date = $data['date'];

    ?>
<?php

    }
} ?>
<link rel="stylesheet" href="cb_admin/css/allblog.css">

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    <?php
    $blog = $conn->show("service");
    $i = 0;
    while ($data = mysqli_fetch_assoc($blog)) {
        $i++;
        $id = $data["id"];
        $ser_name = $data['ser_name'];
        $ser_dec = $data['ser_dec'];
        $s_price = $data['s_price'];
        $ser_img = $data['ser_img'];
        $date = $data['date'];
    ?>
        <tr>
            <td> <?php echo $i; ?></td>
            <td><?php echo $ser_name; ?></td>
            <td class="image-show"> <?php echo $s_price; ?> </td>
            <td > <img style="width: 100px; height: 70px; " src="assets/images/service/<?php echo $ser_img; ?>" alt=""></td>
            <td><a href="cb_admin/inc/service.php?action=delete&&id=<?php echo $id; ?>" onclick="blogDelete(event)">Delete</a> <a href="cb_admin/inc/service.php?action=update&&id=<?php echo $id; ?>">Update</a></td>
        </tr>
        <script>
            function blogDelete(e) {
                let confirmMsg = confirm('Are You Sure');
                if (!confirmMsg) {
                    e.preventDefault()
                }
            }
        </script>
    <?php
    }

    ?>
</table>
<?php }  ?> 