
<link rel="stylesheet" href="cb_admin/css/add_blog.css">

<form action="cb_admin/php/core.php" method="post" enctype= "multipart/form-data" >
<label for="team">Team</label>
    <select name="acces" id="team" style="height:40px;margin:10px;font-size:16px;max-width:700px;outline:none" required> 
        <option value="">Select</option>
        <option value="Team">Team</option>
        <option value="Admin">Admin</option>       
        
    </select>
    <label for="t_name">Name </label>
    <input type="text" name="name" id="t_name" placeholder="enter team name" required>
    <label for="nid">Nid or Brith </label>
    <input type="text" name="Nid" id="nid" placeholder="NID//Brith reg" required>
    <label for="t_id">Team Id</label>
    <input type="text" name="team_id" id="t_id" placeholder="enter team id" required>
   
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
    <select name="location" id="location" style="height:40px;margin:10px;font-size:16px;max-width:700px;outline:none" required> 
        <option value="">Select</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">India</option>        
    </select>
    
    <label for="password">Password</label>
    <input  placeholder="enter password"  name="password" id="password" required>
    <input name="team_add" type="submit" value="Add"> 
    
</form>



