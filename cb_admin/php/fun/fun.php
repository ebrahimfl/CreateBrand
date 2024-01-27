<?php
class addmin
{
    private $conn;
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "createbrand";
        $this->conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$this->conn) {
            die("<h1>Database do not worked!! Please Database create your server?? Help Ebrahim: 01980533510</h1>");
        }
    }


    // show all
    public function show($table_name)
    {
        $sql = "SELECT * FROM $table_name ORDER BY id DESC";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $data = $this->conn->query($sql);
            return $data;
        }
    }

    // show id
    public function show_col($table_name, $id)
    {
        $show = "SELECT * FROM $table_name WHERE id=$id";
        $sql_s = mysqli_query($this->conn, $show);
        if ($sql_s) {
            $data = mysqli_query($this->conn, $show);
            return $data;
        } else {
            echo "no";
        }
    }

    // delete
    public function delete($table_name, $id)
    {
        $sql = "DELETE FROM $table_name WHERE id='$id'";
        $result = $this->conn->query($sql);
        if ($result) {
            return "sucssec";
        } else {
            dir("NO");
        }
    }

    //delet image 
    public function delete_image($table_name, $path, $colomun_name, $id)
    {
        $sql_image = "SELECT * FROM $table_name WHERE id='$id'  ";
        $result_for_image = $this->conn->query($sql_image);
        $fetched_sql =  mysqli_fetch_assoc($result_for_image);
        $image_name = $fetched_sql["$colomun_name"];

        $sql = "DELETE FROM $table_name WHERE id='$id'";
        $filename = $path . $image_name;
        // Check if the file exists before attempting to delete
        if (file_exists($filename)) {
            // Attempt to delete the file
            if (unlink($filename)) {
          
            } else {
                echo 'Unable to delete the file.';
            }
        } else {
            echo 'File does not exist.';
        }
        $result = $this->conn->query($sql);
        if ($result) {
            return "sucssec";
        } else {
            dir("NO");
        }
    }




    // service start 
    public function serviec_add($data)
    {
        $title = $data['title'];
        $dsc = $data['content'];
        $img_t = $_FILES["img"]['tmp_name'];
        $img_name = $_FILES["img"]['name'];
        $type = $_FILES["img"]['type'];
        $size = $_FILES["img"]['size'];


        $sql = "INSERT INTO service (ser_name,ser_dec,ser_img)VALUES('$title','$dsc','$img_name')";
        $result = $this->conn->query($sql);
        if ($result) {
            echo "succs";
            move_uploaded_file($img_t, "../../assets/images/service/" . $img_name);
            header("location:../../admin.php?val=Service&&add=ok");
        } else {
            die("Sumthin problem" . $result);
        }
    }
    public function service_up($id, $data)
    {
        if ($data) {
            $title = $data['title'];
            $dsc = $data['dsc'];
            $img_t = $_FILES["img"]['tmp_name'];
            $img_name = $_FILES["img"]['name'];
            $type = $_FILES["img"]['type'];
            $size = $_FILES["img"]['size'];

            $sql = "UPDATE service SET title='$title',dsc='$dsc',img='$img_name', WHERE id=$id";
            if (mysqli_query($this->conn, $sql)) {
                move_uploaded_file($img_t, "../../assets/images/" . $img_name);
                header("location:../?val=Service&&add=ok");
            } else {
                echo "sumthing is rong";
            }
        } else {
            "No data";
        }
    }

    public function img_validaction($img_name, $img_tmp_name, $location)
    {
        if (isset($img_name) && !empty($img_name)) {
            $ex_validation = ['png', 'PNG', 'jpeg', 'jpg', 'gif'];
            $img_extanction = pathinfo($img_name, PATHINFO_EXTENSION);
            if (in_array($img_extanction, $ex_validation)) {
                $new_img_name = rand() . '.' . $img_extanction;
                move_uploaded_file($img_tmp_name, $location . $new_img_name);
                return $new_img_name;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    // *Our Team Add 
    public function team_add()
    {
        $acces = $_POST['acces'];
        $name = $_POST['name'];
        $Nid = $_POST['Nid'];
        $team_id = $_POST['team_id'];
        $category = $_POST['category'];
        $location = $_POST['location'];
        $password = $_POST['password'];

        $sql = "INSERT INTO admin (	acces, ad_id, ad_name, ad_pass, ad_parmison, ad_nid, ad_catagory, location) VALUES('$acces', '$team_id', '$name', '$password', '1', '$Nid', '$category', '$location')";
        if ($this->conn->query($sql)) {
            header("location:../../admin.php?val=team_add&&ok");
        } else {
            header("location:../../admin.php?val=team_add&&no");
        }
    }

    // blog fun start
    // blog add
    public function add_blog($data)
    {
        $dsc = $data['content'];
        $tittle = $data['tittle'];
        $catagory = $data['catagory'];
        $img_t = $_FILES["img"]['tmp_name'];
        $img_namen = $_FILES["img"]['name'];
        $type = $_FILES["img"]['type'];
        $size = $_FILES["img"]['size'];
        $img_name = rand(10, 100) . $img_namen;

        $sql = "INSERT INTO blog (title,dsc,img,catagory) VALUES ('$tittle','$dsc','$img_name','$catagory')";
        $result = $this->conn->query($sql);
        if ($result) {
            echo "succs";
            move_uploaded_file($img_t, "../../assets/images/blog/" . $img_name);
            header("location:../../admin.php?val=AddBlog&&add=ok");
        } else {
            die("Sumthin problem");
        }
    }
    // SHUDHUMATORO BLOG UPDAT
    public function blog_update($id, $data,$images)
    {
        if ($data) {
            $title = $data['title'];
            $dsc = $data['content'];
            $img = $_FILES['img']['name'];
            $img_t = $_FILES['img']['tmp_name'];
            $catagory = $data['catagory'];
            if(!$img){
                $img = $images ; 

            }else{
                $filename = "../../assets/images/blog/".$images;
                // Check if the file exists before attempting to delete
                if (file_exists($filename)) {
                    // Attempt to delete the file
                    if (unlink($filename)) {
                  
                    } else {
                        echo 'Unable to delete the file.';
                    }
                } else {
                    echo 'File does not exist.';
                }
            }
            $sql = "UPDATE blog SET title='$title',dsc='$dsc',img='$img',catagory='$catagory' WHERE id=$id";
            if (mysqli_query($this->conn, $sql)) {
                move_uploaded_file($img_t, "../../assets/images/blog/".$img);
                header("location:../?val=AllBlog");
            } else {
                echo "sumthing is rong";
            }
        } else {
            "No data";
        }
    }
    // blog fun end

    // admin login
    public function addlog($data)
    {
        $use_name = $data['userName'];
        $use_pass = $data['password'];
        $qur = "SELECT * FROM admin WHERE ad_email='$use_name' && ad_pass='$use_pass';";
        $check = mysqli_query($this->conn, $qur);
        if ($check) {
            if (mysqli_num_rows($check) === 1) {
                $id_c = mysqli_fetch_assoc($check);
                $id = $id_c['id'];
                setcookie(md5("ad_name"), $use_name, time() + (86400 / 4), "/");
                session_start();
                $_SESSION[md5("admin_brandOfcreate_id")] = $id;
                $_SESSION[md5("admin_brandOfcreate_ad_id")] = $id_c['ad_id'];
                header("location:../../admin.php");
            } else {
                header("location:../../");
            }
        } else {
            dir("Database not connected");
        }
    }

    public function visitior($time)
    {
        global $connection;
        $sql = "SELECT COUNT(id) AS count FROM visitor WHERE time >='$time'";
        $result = $connection->query($sql);
        $data = $result->fetch_assoc();
        return $data['count'];
    }
    public function visitior_total()
    {
        global $connection;
        $sql = "SELECT COUNT(id) AS count FROM visitor";
        $result = $connection->query($sql);
        $data = $result->fetch_assoc();
        return $data['count'];
    }
    // monuwar profile update function 

    public function update_user_data($id, $data)
    {
        if ($data) {
            $change_email_input = $data['change_email_input'];
            if ($change_email_input == null) {
                echo "<script>alert('input your email please')</script>";
                echo "<script>window.open('../../user_profile.php','_self')</script>";
            } else if ($change_email_input !== null) {
                $sql = "UPDATE user SET email='$change_email_input' WHERE id=$id";
                if (mysqli_query($this->conn, $sql)) {
                    echo "<script>alert('this is done ')</script>";
                    echo "<script>window.open('../../user_profile.php','_self')</script>";
                } else {
                    echo "something is wrong";
                }
            }
        } else {
            echo "no data";
        }
    }
    public function save_add_eamil_ge($id, $data)
    {
        if ($data) {
            $add_email_input = $data['add_email_input'];
            if ($add_email_input == null) {
                echo "<script>alert('input your email please')</script>";
                echo "<script>window.open('../../user_profile.php','_self')</script>";
            } else {
                $sql = "UPDATE user SET email='$add_email_input' WHERE id=$id";
                if (mysqli_query($this->conn, $sql)) {
                    echo "<script>alert('this is done ')</script>";
                    echo "<script>window.open('../../user_profile.php','_self')</script>";
                } else {
                    echo "something is wrong";
                }
            }
        } else {
            echo "no data";
        }
    }
    public function save_change_number_get($id, $data)
    {
        if ($data) {
            $change_number_input = $data['change_number_input'];
            if ($change_number_input == null) {
                echo "<script>alert('input your number please')</script>";
                echo "<script>window.open('../../user_profile.php','_self')</script>";
            } else {
                $sql = "UPDATE user SET nambar=$change_number_input WHERE id=$id";
                if (mysqli_query($this->conn, $sql)) {
                    echo "<script>alert('this is done ')</script>";
                    echo "<script>window.open('../../user_profile.php','_self')</script>";
                } else {
                    echo "something is wrong";
                }
            }
        } else {
            echo "no data";
        }
    }
    public function add_number_ge($id, $data)
    {
        if ($data) {
            $add_number_input = $data['add_number_input'];
            if ($add_number_input == null) {
                echo "<script>alert('input your number please')</script>";
                echo "<script>window.open('../../user_profile.php','_self')</script>";
            } else {
                $sql = "UPDATE user SET nambar=$add_number_input WHERE id=$id";
                if (mysqli_query($this->conn, $sql)) {
                    echo "<script>alert('this is done ')</script>";
                    echo "<script>window.open('../../user_profile.php','_self')</script>";
                } else {
                    echo "something is wrong";
                }
            }
        } else {
            echo "no data";
        }
    }


    public function change_country_get($id, $data)
    {
        if ($data) {
            $change_country_input = $data['change_country_input'];
            if ($change_country_input == null) {
                echo "<script>alert('input your country name please')</script>";
                echo "<script>window.open('../../user_profile.php','_self')</script>";
            } else {
                $sql = "UPDATE user SET coutry='$change_country_input' WHERE id=$id";
                if (mysqli_query($this->conn, $sql)) {
                    echo "<script>alert('this is done ')</script>";
                    echo "<script>window.open('../../user_profile.php','_self')</script>";
                } else {
                    echo "something is wrong";
                }
            }
        } else {
            echo "no data";
        }
    }
    public function save_add_country_get($id, $data)
    {
        if ($data) {
            $ountry_add_input = $data['country_add_input'];
            if ($ountry_add_input == null) {
                echo "<script>alert('input your country name please')</script>";
                echo "<script>window.open('../../user_profile.php','_self')</script>";
            } else {
                $sql = "UPDATE user SET coutry='$ountry_add_input' WHERE id=$id";
                if (mysqli_query($this->conn, $sql)) {
                    echo "<script>alert('this is done ')</script>";
                    echo "<script>window.open('../../user_profile.php','_self')</script>";
                } else {
                    echo "something is wrong";
                }
            }
        } else {
            echo "no data";
        }
    }
}
