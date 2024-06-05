 

<?php 

require_once 'dbc.php';
require_once 'db_function.php'; 


if(isset($_POST['submit'])){

    $userName=$_POST['userName'];
    $password=$_POST['password'];


    $emptyinputsLg = emptyinputsLg($userName,$password);


    if($emptyinputsLg !==false){

       
        header("location:../login_formate/user_login.php?error=emptyinputsLg");
        exit();
    }

    
    LoginUser($conn, $userName,$password);
    

}

else{

    header("location:../user_layout/dashboard.php");
}


?>