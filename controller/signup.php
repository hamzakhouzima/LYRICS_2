<?php

    require '../model/db.php';

session_start();
    $firstname= $lastname=$email=$password=$confirm = "";

class signup extends Connection{

    public $available='true' ;



    public function register($firstname,$lastname,$email,$password){
      
    
        $sql = "INSERT INTO user (first_name ,last_name, email, password) VALUES ('$firstname','$lastname','$email','$password') ";
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();
        // $result = $stmt->fetchAll();


    }


    public function check($email){

        $check_request = 'SELECT * FROM user';
        $stmt = $this->conn->prepare($check_request);
        $stmt  -> execute();
        $res = $stmt->fetchAll();


    }
}

$obj =  new signup();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname =  $_POST['fname'];
    $lastname =  $_POST['lname'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $confirm = $_POST['cpassword'];

if(empty( $_POST['fname']) || empty( $_POST['lname']) || empty( $_POST['email']) || empty( $_POST['password']) || empty( $_POST['cpassword'])){

    $_SESSION['signup_error'] = 'one of the fields is empty ';
    // header("location:view_signup.php");
        

}else{

        if($password===$confirm){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $obj->register($firstname,$lastname,$email,$hash);
            header("location:view_login.php");
        }elseif($password!=$confirm){
            $_SESSON['password_confirmation'] = 'password confirmation does not match ';
            
        }



}

}





?>
