<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style type="text/css">
    twelve h1 {
  font-size:26px; font-weight:700;  letter-spacing:1px; text-transform:uppercase; width:160px; text-align:center; margin:auto; white-space:nowrap; padding-bottom:13px;
}
.twelve h1:before {
    background-color:blue;
    content: '';
    display: block;
    height: 3px;
    width: 75px;
    margin-bottom: 5px;
}


.alert {
  padding:10px;
  background-color: #f44336;
  color: white;
  opacity: 0.7;
  transition: opacity 0.6s;
  margin-bottom: 2px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #f05951;}

.closebtn {
  margin-left: 2px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


  </style>
  <title>user_login</title>
</head>
<body>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <p style ="text-align: center; " class="h1"><b><i>RUSL Sportsmans</i></b></p>
        <img style="width: 100%" src="images/log.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action = "../login_database/user_login_db.php" method ="POST">

           <!-- User Heading -->

          <div class="twelve">
          <h1>User Login</h1>
          </div>

          <!-- Email/userName input -->
          <div class="form-outline mb-4">
            <input type="text" id="form1Example13" class="form-control form-control-lg" name="userName" />
            <label class="form-label" for="form1Example13" >Username/Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>


         <!--  Registration Part-->

           <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="user_signup.php"
            style="color: #393f81;">Register here</a>


            <!-- Login page php error handling -->
          
            <?php 

            if(isset($_GET["error"])){

              if(($_GET["error"]=="emptyinputsLg")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span> 
                <strong> Error!</strong> Required to fill all the fields..!
              </div>';

              }

              else if(($_GET["error"]=="userNameExits")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span>  
                <strong>Error!</strong> Check Username and password..!
              </div>';

              }

              

              }

              ?>
          
          </p>

           <!-- Submit button -->
          
           <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Login</button>


        </form>

       

      </div>
    </div>
  </div>
</section>
  
</body>
</html>