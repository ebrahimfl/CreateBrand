
<link rel="stylesheet" href="cb_admin/css/add_blog.css">

<form action="cb_admin/php/core.php" method="post" enctype= "multipart/form-data" >
    <label for="t_name">Name </label>
    <input type="text" name="name" id="t_name" placeholder="enter team name" required>
    <label for="t_id">Team Id</label>
    <input type="text" name="team_id" id="t_id" placeholder="enter team id" required>
    <label for="t_img">Member Img <sup style='font-size:14px;color:red;font-weight:400'>* only png PNG jpg jpeg gif<sup></label>
    <input type="file" name="img" id="t_img"  value="upload image" required >

    <label for="category">Category</label>
    <select name="category" id="category" style="height:40px;margin:10px;font-size:16px;max-width:700px;outline:none" required> 
        <option value="">Select</option>
        <option value="Websaite Design">Websaite Design</option>
        <option value="Websaite Development">Websaite Development</option>
        <option value="Full Stack Developer">Full Stack Developer</option>
        <option value="SEO">SEO</option>
        <option value="Digital Marketing">Digital Marketing</option>
        <option value="Website any Bug fixing">Website any Bug fixing</option>
        <option value="B2B Lead Colocation">B2B Lead Colocation</option>
        <option value="Wordpress Theme Customization">Wordpress Theme Customization</option>
    </select>
    <textarea name="description" id="t_description" cols="20" rows="5" placeholder="Description" required></textarea>
    <input type="submit" class="btnn" value="Submite" name="team_add">
</form>