<?php 

require_once 'dbc.php';
require_once 'db_function.php';

if(isset($_POST['submit'])){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];


    
    
   

    $emptyInputs=emptyInputSignup( $firstName, $lastName,$email,$userName,$password,$repassword);
    $invaliedUserName=invaliedUserName($userName);
    $invaliedEmail=invaliedEmail($email);
    $passwordMatch=passwordMatch( $password,$repassword);
    $userNameExits=userNameExits($conn,$userName,$email);


    if($emptyInputs!==false){
        
        header("location:../login_formate/user_signup.php?error=emptyInputs");
        exit();
    
    }

    if($invaliedUserName!==false){
      
      
        header("location:../login_formate/user_signup.php?error=invaliedUserName");
        exit();
    
    }

    if($invaliedEmail!==false){
     
        
        header("location:../login_formate/user_signup.php?error=invaliedEmail");
        exit();
    
    }

    if($passwordMatch!==false){
      

        
         
        header("location:../login_formate/user_signup.php?error=passwordMatch");
        exit();
    
    
    }

    if($userNameExits!==false){
      

        header("location:../login_formate/user_signup.php?error=userNameExits");
        exit();
    
    }

    createUser($conn,$firstName,$lastName,$email,$userName,$password);
   

}




   else{

    header('location:../login_formate/user_login.php');
  

    
}


