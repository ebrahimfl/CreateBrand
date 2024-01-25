<?php
if (isset($_COOKIE[md5("name")])) {
	header("location:user_profile.php");
}
?>


<link rel="stylesheet" href="assets/css/login.css">

<section id="login">
    
    <div class="container">
        <div class="row">
            <div class="img">
                <img src="assets/images/login-img.png" alt="">
            </div>
           <div class="form">
            <form action="assets/php/userCore.php" method="post" >
                    <h2>User Login</h2>
                    
                        <label for="user-name" class="login-card">
                            <img src="assets/icons/user-name.png" alt="">
                        <input type="text" placeholder="Username" id="user-name" name="userName" autocomplete="off">
                        </label>
                    
                        <label for="password" class="login-card">
                            <img src="assets/icons/password-icons.png" alt="">
                        <input type="text" placeholder="Password" id="password" name="password" autocomplete='off'>
                        </label>
                        
                    <input name="login" type="submit" value="Submit" class="submit">
                    <p><a href="?log=signup" style="text-align: center;">Create account</a></p>
                </form>
           </div>
        </div>
    </div>
</section>