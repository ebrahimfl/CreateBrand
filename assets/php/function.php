<?php

class fun{
    private $conn;
    function __construct() {
        $conne = new databese;
        $conne->connect();
        $this->conn =$conne->connect;
        
      }
    //   show function
      public function show($table_name,){
        $qur = "SELECT * FROM $table_name";
        $conn_c = mysqli_query($this->conn,$qur);
        if ($conn_c->num_rows> 0) {
            $data = $this->conn->query($qur);
            return $data;
        }else {
            return("No Data");
        }
        
      }

}

class databese{
    private   $servername = "localhost",
	$username = "root",
	$password = "",
	$database_name="createbrand";
    public $connect;
    
    public function connect(){        
        $this->connect = mysqli_connect($this->servername,$this->username,$this->password,$this->database_name);  
             
    }

    public function database(){        
        // Create connection
        $conn = mysqli_connect($this->servername,$this->username,$this->password);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . $conn);
        }

        // Create database
        $dataC = "CREATE DATABASE $this->database_name";
        $qure = mysqli_query($conn,$dataC);
        
        if (!$qure) {
            die("Somthin rong: ". mysqli_error($conn)." fix: database fun header.php theke coment koro" );
            

        }else {
            echo "success";

        }

        mysqli_close($conn);
    }

    public function table(){
        // admin table
       $qure = "CREATE TABLE admin (id int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       ad_name	text,
       ad_pass	varchar(50),
       ad_email varchar(30) UNIQUE,
       ad_parmison	varchar(3)                 
        );";         
        if ($this->connect->query($qure) === TRUE) {
           echo"admin table ok <br>";
        }else{
            die("admin table error: ". $this->connect->error);
            
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
          echo"blog table ok <br>";
       }else{
           die("blog table error". $this->connect->error);
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
          echo"user table ok <br>";
       }else{
           die("user table error". $this->connect->error);
       }

       //service tabel
       $qure = "CREATE TABLE service (id int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            ser_name	text,
            ser_dec text,
            ser_img longtext
        );";
        
       if ($this->connect->query($qure) === TRUE) {
          echo"user table ok <br>";
       }else{
           die("user table error". $this->connect->error);
       }
        mysqli_close($this->connect);       
        
    }
    



}


?>