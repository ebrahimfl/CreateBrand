<?php
class addmin{
    private $conn;
    public function __construct() {
            $db_host = "localhost";
            $db_user = "root";        
            $db_pass = "";
            $db_name = "createbrand";
            $this->conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
            if (!$this->conn) {
                die ("<h1>Database do not worked!! Please Database create your server?? Help Ebrahim: 01980533510</h1>");       
            }
    
    }

    public function addlog($data) {
        $use_name = $data['userName'];
        $use_pass = $data['password'];
        $qur = "SELECT * FROM admin WHERE ad_email='$use_name' && ad_pass='$use_pass';";
        $check = mysqli_query($this->conn,$qur);
        if ($check) {
            if (mysqli_num_rows($check)===1) {
                setcookie(md5("ad_name"),$use_name,time() + (86400/4), "/");
                header("location:../../admin.php");
            }else {
                header("location:../../");
            }
        }else {
           dir("Database not connected");
        }

        
        
    }

    public function show($table_name) {        
        $sql ="SELECT * FROM $table_name;";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows> 0) {
            $data = $this->conn->query($sql);
            return $data;
        }        
    }

    public function show_col($table_name,$id)  {
        $show = "SELECT * FROM $table_name WHERE id=$id;";
        $sql_s = mysqli_query($this->conn,$show);
        if ($sql_s) {
            $data = mysqli_query($this->conn,$show);
            return $data;
        }else {
            echo "no";
        }
        
        
    }

    public function add_blog($data) {
        $title = $data['title'];
        $dsc = $data['dsc'];
        $mata = $data['mata'];
        $catagory = $data['catagory'];
        $img_t = $_FILES["img"]['tmp_name'];
        $img_name = $_FILES["img"]['name'];
        $type = $_FILES["img"]['type'];
        $size = $_FILES["img"]['size'];
       
        

        $sql = "INSERT INTO blog (title,dsc,mata,img,catagory)VALUES('$title','$dsc','$mata','$img_name','$catagory')";
        $result = $this->conn->query($sql);
        if ($result) {
            echo "succs";
            move_uploaded_file($img_t,"../../assets/images/".$img_name);
            header("location:../../admin.php?val=AddBlog&&add=ok");
        }else {
            dir("Sumthin problem");
        }
        
        
    }

    public function blog_update($id,$data) {        
        if ($data) {
            $title = $data['title'];
            $dsc = $data['dsc'];
            $mata = $data['mata'];
            $img = $data['img'];
            $catagory = $data['catagory'];

            $sql = "UPDATE blog SET title='$title',dsc='$dsc',mata='$mata',img='$img',catagory='$catagory' WHERE id=$id";
            if (mysqli_query($this->conn,$sql)) {
               header("location:../?val=AllBlog");
            }else {
                echo"sumthing is rong";
            }
        }else {
            "No data";
        }
        
        
    }
    public function delete($table_name,$id) {
        $sql = "DELETE FROM $table_name WHERE id='$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            return "sucssec";
        }else {
            dir("NO");
        }
        
    }

  


}



?>

