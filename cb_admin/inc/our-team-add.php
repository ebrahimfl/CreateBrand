
<link rel="stylesheet" href="cb_admin/css/add_blog.css">

<form action="cb_admin/php/core.php" method="post" enctype= "multipart/form-data" >
    <label for="title">Title Here </label>
    <input type="text" name="title" id="title" placeholder="Title" required>

    <label for="id">Content Here </label>
    <textarea name="dsc" id="id" cols="20" rows="5" placeholder="Your Content" required></textarea>

    <label for="mata">Meta Description Here </label>
    <input type="text" name="mata" id="mata" placeholder="Mata Dsciption" required>

    <label for="Catagory">Category </label>
    <input type="text" name="catagory" id="catagory" placeholder="Catagory" required>
    <input type="file" name="img" id="img" value="Upload You Thamble">

    
    <input type="submit" class="btnn" value="Submite" name="team_add">
</form>