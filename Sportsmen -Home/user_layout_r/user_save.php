<?php 

require_once "../login_database/dbc.php";


if(isset($_POST['order'])){

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $sport = $_POST["sport"];
    $r_date = $_POST["orderDate"];

    $query = "INSERT INTO registration(firstName,lastName,phoneNumber,email,sport,r_date)
    VALUES( '$firstName', '$lastName', '$phone', '$email', '$sport','$r_date');";




    $query_run=mysqli_query($conn,$query);

    if( $query_run){

        header("location:../user_layout_r/registration.php?sucssess");
        exit();
    }

    else{

        header("location:../user_layout_r/registration.php?error=notSet");
        exit();
    }



}








?>