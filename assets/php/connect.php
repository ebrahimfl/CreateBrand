<?php 
 
        $db_host = "localhost";
        $db_user = "root";        
        $db_pass = "";
        $db_name = "createbrand";
        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if (!$conn) {
            die ("<h1>Database do not worked!! Please Database create your server?? Help Ebrahim: 01980533510</h1>");       
        }

        session_start();
        $u_id = $_SESSION['id']='1';
        $u_name = $_SESSION['name']= 'ebrahim';
        $checkDB = isset($u_id,$u_name );
        if (!$checkDB ) {
            die("No seson");
            
        }else{
            
        }
        

    

    
       
    






?>