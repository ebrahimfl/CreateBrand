<?php


class databese{
    private   $servername = "localhost", $username = "root", $password = "",$database_name="createbrand";
    private $connect;
    
    public function connect(){        
        $this->connect = mysqli_connect($this->servername,$this->username,$this->password,$this->database_name);  
             
    }

    public function database() {        
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
            echo "succs </br>";

        }

        mysqli_close($conn);
    }


    public function table(){
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

       //service tabel
       $qure = "CREATE TABLE service (
        id INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        ser_name TEXT,
        ser_dec TEXT,
        ser_img LONGTEXT,
        date DATETIME DEFAULT CURRENT_TIMESTAMP
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