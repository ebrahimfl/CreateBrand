<?php

class fun
{
    private $conn;
    function __construct()
    {
        $conne = new databese;
        $conne->connect();
        $this->conn = $conne->connect;
    }

    // url 

   public function base_url ($url){
    echo "http://localhost/CreateBrand/".$url;

   }

    //   show function
    public function show($table_name)
    {
        $qur = "SELECT * FROM $table_name  ORDER BY id DESC";
        $conn_c = mysqli_query($this->conn, $qur);
    if($conn_c->num_rows > 0) {
            $data = $this->conn->query($qur);
            return $data;
        } else {
            return ("No Data");
        }
    }
    public function select_count($sql){
        $conn_c = mysqli_query($this->conn, $sql);
        if($conn_c->num_rows > 0) {
                $data = $this->conn->query($sql);
                return $data;
            } else {
                return ("No Data");
            }
    }

    public function img_validaction($img_name, $img_tmp_name, $location)
    {
        if (isset($img_name) && !empty($img_name)) {

            $ex_validation = ['png', 'PNG', 'jpeg', 'jpg', 'gif'];

            $img_extanction = pathinfo($img_name, PATHINFO_EXTENSION);
            
            if(in_array($img_extanction, $ex_validation)){
                $new_img_name = rand() .time(). '.' . $img_extanction; 
                
                 $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], 'useer_profile/php/core.php') );
                 $remove =rtrim($_SERVER['SCRIPT_NAME'], $page);
                
                if ($remove !== ""){
                    $remove1 =$remove."/";
                     $servarname = $_SERVER['DOCUMENT_ROOT'].$remove1;
                }else{

                  $servarname = $_SERVER['DOCUMENT_ROOT'];
                }
                
                move_uploaded_file($img_tmp_name, $servarname.$location . $new_img_name);
                return $new_img_name;
            }else{
                return false;
        }
        }else{
            return false;
        }
        
    }
    //   insert function
    public function insert($sql)
    {
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
    public function alert($type, $message)
    {
        $_SESSION['alert']['type'] = $type;
        $_SESSION['alert']['message'] = $message;
    }
    public function error_message_function($name)
    {
        if (isset($_SESSION['form'][$name]) && !empty($_SESSION['form'][$name])) {
            echo $_SESSION['form'][$name];
            unset($_SESSION['form'][$name]);
        }
    }
    public function showLimit($table_name, $limit)
    {
        $qur = "SELECT * FROM $table_name  ORDER BY id DESC LIMIT $limit";
        $conn_c = mysqli_query($this->conn, $qur);
        if ($conn_c->num_rows > 0) {
            $data = $this->conn->query($qur);
            return $data;
        } else {
            return ("No Data");
        }
    }
    //   show function id 
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
      //   show function skill tabal
      public function skill($table_name,$id)  {
        $show = "SELECT * FROM $table_name WHERE ad_id=$id";
        $sql_s = mysqli_query($this->conn,$show);
        if ($sql_s) {
            $data = mysqli_query($this->conn,$show);            
            return $data;
        }else {
            echo "no";
        }       
        
        }

    public function textShorten($text, $limit = 400)
    {
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . ".....";
        return $text;
    }

    public function valid_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}


class databese
{
    private   $servername = "localhost",
        $username = "root",
        $password = "",
        $database_name = "createbrand";
    public $connect;

    public function connect()
    {
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->database_name);
    }

    public function database()
    {
        // Create connection
        $conn = mysqli_connect($this->servername, $this->username, $this->password);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . $conn);
        }

        // Create database
        $dataC = "CREATE DATABASE $this->database_name";
        $qure = mysqli_query($conn, $dataC);

        if (!$qure) {
            die("Somthin rong: " . mysqli_error($conn) . " fix: database fun header.php theke coment koro");
        } else {
            echo "success";
        }

        mysqli_close($conn);
    }

    public function table()
    {
        // admin table
        $qure = "CREATE TABLE admin (id int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       ad_name	text,
       ad_pass	varchar(50),
       ad_email varchar(30) UNIQUE,
       ad_parmison	varchar(3)                 
        );";
        if ($this->connect->query($qure) === TRUE) {
            echo "admin table ok <br>";
        } else {
            die("admin table error: " . $this->connect->error);
        }

        //blog table 
        $qure = "CREATE TABLE blog (id int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                title	text,
                dsc	text,
                mata	text,
                img	longtext,
                catagory	text,
                activ int(3)
        );";

        if ($this->connect->query($qure) === TRUE) {
            echo "blog table ok <br>";
        } else {
            die("blog table error" . $this->connect->error);
        }

        //user table
        $qure = "CREATE TABLE user (id int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name	text,
            email 	varchar(50) UNIQUE,
            nambar 	varchar(20) UNIQUE,
            coutry	text,
            password	varchar(50)
        );";

        if ($this->connect->query($qure) === TRUE) {
            echo "user table ok <br>";
        } else {
            die("user table error" . $this->connect->error);
        }

        //service tabel
        $qure = "CREATE TABLE service (id int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            ser_name	text,
            ser_dec text,
            ser_img longtext
        );";

        if ($this->connect->query($qure) === TRUE) {
            echo "user table ok <br>";
        } else {
            die("user table error" . $this->connect->error);
        }
        mysqli_close($this->connect);
    }
   
}
