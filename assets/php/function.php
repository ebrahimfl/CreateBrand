<?php


class funtion_a{
    private $conn,$connect;
    function __construct($database_name){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "$database_name";
        $this->connect = mysqli_connect($servername,$username,$password,$database_name);

    }
    public function database($database_name) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        // Create connection
        $this->conn = mysqli_connect($servername,$username,$password);
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . $this->conn);
        }

        // Create database
        $dataC = "CREATE DATABASE $database_name";
        $qure = mysqli_query($this->conn,$dataC);
        
        if (!$qure) {
            die("Somthin rong: ". mysqli_error($this->conn)." fix: database fun header.php theke coment koro" );
            

        }else {
            echo "succs";

        }


        
        
        

        mysqli_close($this->conn);
    }


    public function admin_t(){
        // admin table
       $qure = "CREATE TABLE admin ( id int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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


        mysqli_close($this->connect);       
        
    }
    




    





  
    

   



}


?>