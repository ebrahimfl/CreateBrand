
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
    <label for="location">Location</label>
    <input type="text" name="location" id="location" required>
    <label for="join_date">Create of Bardn Join Date</label>
    <input type="date" name="join_date" id="join_date" required>
    <label for="category">Description</label>
    <textarea name="description" id="t_description" cols="20" rows="5" placeholder="Description" required></textarea>
    <label for="skils">Best Skills<sup style='font-size:14px;color:red;font-weight:400'> &lt;button&gt; Your  skill &lt;/button&gt<sup></label>
    <textarea name="best_skills" id="skils" cols="20" rows="5" placeholder="skills" required></textarea>
    <label for="project_1">Project 1 Name</label>
    <input type="text" name="project_1" id="project_1" required>
    <label for="project_1_desc">Project 1 Description</label>
    <textarea name="project_1_desc" id="project_1_desc" cols="20" rows="5" placeholder="description" required></textarea>
    <label for="project_2">Project 2 Name</label>
    <input type="text" name="project_2" id="project_2" required>
    <label for="project_2_desc">Project 2 Description</label>
    <textarea name="project_2_desc" id="project_2_desc" cols="20" rows="5" placeholder="description" required></textarea>
    <label for="project_3">Project 3 Name</label>
    <input type="text" name="project_3" id="project_3" required>
    <label for="project_3_desc">Project 3 Description</label>
    <textarea name="project_3_desc" id="project_3_desc" cols="20" rows="5" placeholder="description" required></textarea>
    <label for="work_ex_name">Work Experience Name</label>
    <input type="text" name="work_ex_name" id="work_ex_name" required>
    <label for="work_ex_desc">Work Experience Description</label>
    <input type="text" name="work_ex_desc" id="work_ex_desc" required>
    <input type="submit" class="btnn" value="Submite" name="team_add">
</form>