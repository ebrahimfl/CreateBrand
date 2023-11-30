
<?php
include_once("php/fun/fun.php");
$conn = new addmin();

?>
<link rel="stylesheet" href="../assets/css/login.css">

<section id="login">
    
    <div class="container">
        <div class="row">
            <div class="img">
                <img src="../assets/images/login-img.png" alt="">
            </div>
           <div class="form">
            <form action="php/core.php" method="post" >
                    <h2>Admin Login</h2>
                    
                        <label for="user-name" class="login-card">
                            <img src="assets/icons/user-icons.png" alt="">
                        <input type="text" placeholder="Username" id="user-name" name="userName">
                        </label>
                    
                        <label for="password" class="login-card">
                            <img src="assets/icons/password-icons.png" alt="">
                        <input type="text" placeholder="Password" id="password" name="password">
                        </label>
                        
                    <input name="login" type="submit" value="Submit" class="submit">
                    
                </form>
           </div>
        </div>
    </div>
</section>