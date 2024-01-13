<?php 
 
  if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
  }
  
    include_once '../assets/php/function.php';
    $function = new fun();
    if(isset($_POST['contact-submit'])&& !empty($_POST['contact-submit'])){
        $name = $function->valid_input($_POST['name']);
        $email = $function->valid_input($_POST['email']);
        $phone = $function->valid_input($_POST['phone']);
        $subject = $function->valid_input($_POST['subject']);
        $message = $function->valid_input($_POST['message']);
        $hassError = false;
        if(empty($_POST['name'])){
            $hassError = true;
            $_SESSION['form']['name']='Name Can not be blank';
        }
        if(empty($_POST['email'])){
            $hassError = true;
            $_SESSION['form']['email']='email can not be blank';
        }
        if(empty($_POST['phone'])){
            $hassError = true;
            $_SESSION['form']['phone']='phone number can not blank';
        }
        if(empty($_POST['subject'])){
            $hassError = true;
            $_SESSION ['form']['subject'] = 'subject can not be blank';
        }

        if($hassError == false){
            $insertData = $function->insert("INSERT INTO contact(name,email,phone,subject,message)VALUES('{$name}','{$email}','{$phone}','{$subject}','{$message}')");
            if($insertData==true){
              $function->alert('success',"Thanks for reaching out! We've received your contact form submission and will be in touch soon");
              header('Location:../contact-us.php');
            }
        }
     

    }

?>