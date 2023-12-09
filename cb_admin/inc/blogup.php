<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include_once("../php/fun/fun.php");
    $conn = new addmin;

?>




    <?php
    $blog_show = $conn->show_col("blog", $id);
    while ($data = mysqli_fetch_assoc($blog_show)) {
        $title = $data['title'];
        $dsc = $data['dsc'];
        $mata = $data['mata'];
        $img = $data['img'];
        $catagory = $data['catagory'];



    ?>
        <link rel="stylesheet" href="../css/update_blog.css">
        <div class="update-blog-conatiner">
            <div class="update-blog-wrapper">
                <form action="../php/core.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                    <h1>You Can Update The From Here </h1>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="<?php echo $title; ?>" required>

                    <label for="id">Description</label>
                    <textarea name="dsc" id="id" cols="30" rows="10" required><?php echo $dsc; ?></textarea>

                    <label for="mata">Meta Discription</label>
                    <input type="text" name="mata" id="mata" value="<?php echo $mata; ?>" required>

                    <label for="catagory">Catagory</label>
                    <input type="text" name="catagory" id="catagory" value="<?php echo $catagory; ?>" required>

                    <label for="img">Upload Image</label>
                    <input type="file" name="img" id="img" value="Upload You Thamble">


                    <input type="submit" class="btnn"  value="Submit" name="blogup">


                </form>
            </div>
        </div>



<?php
    }
} ?>