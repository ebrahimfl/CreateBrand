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
    
   
    // show all
    public function show($table_name) {        
        $sql ="SELECT * FROM $table_name ORDER BY id DESC";
        $result = $this->conn->query($sql);
        if ($result->num_rows> 0) {
            $data = $this->conn->query($sql);
            return $data;
        }        
    }

    // show id
    public function show_col($table_name,$id)  {
        $show = "SELECT * FROM $table_name WHERE id=$id";
        $sql_s = mysqli_query($this->conn,$show);
        if ($sql_s) {
            $data = mysqli_query($this->conn,$show);
            return $data;
        }else {
            echo "no";
        }
        
        
    } 

    // delete
    public function delete($table_name,$id) {
        $sql = "DELETE FROM $table_name WHERE id='$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            return "sucssec";
        }else {
            dir("NO");
        }
        
    }

    // service start 
    public function serviec_add($data) {
        $title = $data['title'];
        $dsc = $data['dsc'];        
        $img_t = $_FILES["img"]['tmp_name'];
        $img_name = $_FILES["img"]['name'];
        $type = $_FILES["img"]['type'];
        $size = $_FILES["img"]['size'];
        

        $sql = "INSERT INTO service (ser_name,ser_dec,ser_img)VALUES('$title','$dsc','$img_name')";
        $result = $this->conn->query($sql);
        if ($result) {
            echo "succs";
            move_uploaded_file($img_t,"../../assets/images/service/".$img_name);
            header("location:../../admin.php?val=Service&&add=ok");
        }else {
            die("Sumthin problem".$result);
        }
        
    }
    public function service_up($id,$data) {        
        if ($data) {
            $title = $data['title'];
            $dsc = $data['dsc'];        
            $img_t = $_FILES["img"]['tmp_name'];
            $img_name = $_FILES["img"]['name'];
            $type = $_FILES["img"]['type'];
            $size = $_FILES["img"]['size'];

            $sql = "UPDATE service SET title='$title',dsc='$dsc',img='$img_name', WHERE id=$id";
            if (mysqli_query($this->conn,$sql)) {
                move_uploaded_file($img_t,"../../assets/images/".$img_name);
               header("location:../?val=Service&&add=ok");
            }else {
                echo"sumthing is rong";
            }
        }else {
            "No data";
        }
        
    }

    public function img_validaction($img_name,$img_tmp_name,$location){
        if(isset($img_name)&& !empty($img_name)){
            $ex_validation=['png','PNG','jpeg','jpg','gif'];
            $img_extanction = pathinfo($img_name, PATHINFO_EXTENSION);
            if(in_array($img_extanction,$ex_validation)){
                $new_img_name = rand().'.'.$img_extanction;
                move_uploaded_file($img_tmp_name,$location.$new_img_name);
                return $new_img_name;
            }else{
                return false;
            }
    }else{
      return false;
    }
}
    // *Our Team Add 
    public function team_add(){
        $name = $_POST['name'];
        $team_id = $_POST['team_id'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $location = $_POST['location'];
       $join_date = date('Y-m-d',strtotime($_POST['join_date']));
        $best_skills = $_POST['best_skills'];
        $project_1 = $_POST['project_1'];
        $project_1_desc = $_POST['project_1_desc'];
        $project_1_desc = $_POST['project_1_desc'];
        $project_2 = $_POST['project_2'];
        $project_2_desc = $_POST['project_2_desc'];
        $project_3 = $_POST['project_3'];
        $project_3_desc = $_POST['project_3_desc'];
        $project_3_desc = $_POST['project_3_desc'];
        $work_ex_name = $_POST['work_ex_name'];
        $work_ex_desc = $_POST['work_ex_desc'];
        

        if($img_name=$this->img_validaction($_FILES['img']['name'],$_FILES['img']['tmp_name'],'../../assets/images/team/')){
            $sql = "INSERT INTO ourteam(name,team_id,category,image,description,status,location,join_date,best_skills,project_1,project_1_desc,project_2,project_2_desc,project_3,project_3_desc,work_ex_name,work_ex_desc) VALUES('$name',$team_id,'$category','$img_name','$description',1,'$location','$join_date','$best_skills','$project_1','$project_1_desc','$project_2','$project_2_desc','$project_3','$project_3_desc','$work_ex_name','$work_ex_desc')";
            if($this->conn->query($sql)){
                header("location:../../admin.php?val=team_add");
            }
        }else{
         header("location:../../admin.php?val=team_add");
        }

    }

    // blog fun start
    // blog add
    public function add_blog($data) {

        $title = $data['title'];
        $dsc = $data['dsc'];
        $mata = $data['mata'];
        $catagory = $data['catagory'];
        $img_t = $_FILES["img"]['tmp_name'];
        $img_namen = $_FILES["img"]['name'];
        $type = $_FILES["img"]['type'];
        $size = $_FILES["img"]['size'];
        $img_name = rand(10,100).$img_namen;

        $sql = "INSERT INTO blog (title,dsc,mata,img,catagory)VALUES('$title','$dsc','$mata','$img_name','$catagory')";
        $result = $this->conn->query($sql);
        if ($result) {
            echo "succs";
            move_uploaded_file($img_t,"../../assets/images/blog/".$img_name);
            header("location:../../admin.php?val=AddBlog&&add=ok");
        }else {
            die("Sumthin problem");
        }
        
    }
    // SHUDHUMATORO BLOG UPDAT
    public function blog_update($id,$data) {        
        if ($data) {
            $title = $data['title'];
            $dsc = $data['dsc'];
            $mata = $data['mata'];
            $img = $_FILES['img']['name'];
            $img_t = $_FILES['img']['tmp_name'];            
            $catagory = $data['catagory'];

            $sql = "UPDATE blog SET title='$title',dsc='$dsc',mata='$mata',img='$img',catagory='$catagory' WHERE id=$id";
            if (mysqli_query($this->conn,$sql)) {
                move_uploaded_file($img_t,"../../assets/images/".$img);
               header("location:../?val=AllBlog");
            }else {
                echo"sumthing is rong";
            }
        }else {
            "No data";
        }
        
        
    }
    // blog fun end

    // admin login
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

   public function visitior($time){
        global $connection;
        $sql = "SELECT COUNT(id) AS count FROM visitor WHERE time >='$time'";
        $result = $connection->query($sql);
        $data =$result->fetch_assoc();
        return $data['count'];
    }
    public function visitior_total(){
        global $connection;
        $sql = "SELECT COUNT(id) AS count FROM visitor";
        $result = $connection->query($sql);
        $data =$result->fetch_assoc();
        return $data['count'];
    }


}



?>

