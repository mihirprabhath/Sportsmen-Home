<?php 

 function emptyInputSignup( $firstName, $lastName,$email,$userName,$password,$repassword){

    $result;
    
    if(empty( $firstName)|| empty( $lastName)|| empty($email)|| empty($userName)|| empty($password)|| empty($repassword)){

        $result = true;
    }

    else{

        $result = false; 
    }

    return $result;

}

function invaliedUserName($userName){

    $result;

    if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){

        $result=true;

    }

    else{

        $result=false;
    }

    return  $result;

}

function invaliedEmail($email){

    $result;

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

        $result=true;

    }

    else{

        $result=false;
    }

    return  $result;

}

function passwordMatch($password,$repassword){

$result;

if($password!==$repassword){

    $result=true;

}

else{

    
    $result=false;
}

return  $result;

}

function userNameExits($conn,$userName,$email){
    $sql="SELECT*FROM users WHERE userName=? OR email=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){

        header('location:../login_formate/user_signup.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$userName,$email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){

        return $row;
    }

    else{

        return false;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn,$firstName,$lastName,$email,$userName,$password){

    $sql = "INSERT INTO users(firstName,lastName,email,userName,password) values(?,?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare( $stmt,$sql)){

        header('location:..login_formate/user_signup.php?error=stmtFailed');
        exit();
    }

    $hashedPwd= password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$firstName,$lastName,$email,$userName,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location:../login_formate/user_login.php?error=none');
    exit();
}


//  User login section

function emptyinputsLg($userName,$password){

    $result;

    if(empty($userName) ||empty($password)){

        return true;
    }

    else{

        return false;
    }

    return  $result;
}

function LoginUser($conn, $userName,$password){

    $userNameExits=userNameExits($conn,$userName,$userName);
    if( $userNameExits===false){

        header('location:../login_formate/user_login.php?error=userNameExits');
        exit();
    }

    $hashedPwd= $userNameExits["password"];
    $checkPwd = password_verify($password,$hashedPwd);

    if($checkPwd===false){
  
        header('location:../login_formate/user_login.php?error=wronglogin');
        exit();
    }

    else if($checkPwd===true){
        session_start();
        $_SESSION["id"]=$userNameExits["id"];
        $_SESSION["userName"]=$userNameExits["userName"];
        $_SESSION["firstName"]=$userNameExits["firstName"];
        $_SESSION["lastName"]=$userNameExits["lastName"];

    
        header("location:../user_layout/dashboard.php");
        exit();
       
    }
}



    




?>