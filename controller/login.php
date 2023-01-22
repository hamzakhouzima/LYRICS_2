<?php
 require '../model/db.php';
session_start();
$email=$pass = "";

 class logins extends Connection{


    public function login($email,$password){

        $sql = "SELECT email , password FROM user WHERE email='$email'  ";

        $stmt = $this->conn->prepare($sql);
        $stmt ->execute();
        $rows = $stmt->fetchAll();
    
      
        foreach($rows as $row){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $verify = password_verify($password,$row['password']);

            if($row['email'] === $email && $verify){

               $_SESSION['log'] = $verify;
               header("location:../view/index.php");

            }else{
                
                $_SESSION['login_error'] = 'login failed , try again !!';  
                     
                }


        }

    }

 }




$obj = new logins();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['log_email'];
    $pass = $_POST['log_password'];
    if(empty($_POST['log_email'])){

        $_SESSION['email_error'] = "Please! complete the form ";
        // header("location:view_login.php");
        // die;


    }
    if(empty($_POST['log_password'])){

        $_SESSION['password_error'] = "Please! complete the form";
        // header("location:view_login.php");
        // die;

    }else{

        $obj->login($email,$pass);

    }
  



}




?>