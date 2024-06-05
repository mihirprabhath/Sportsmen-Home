<!DOCTYPE html>
<html>
<head>
	<title>user_signup</title>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 0.7;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #f05951;}

.closebtn {
  margin-left: 15px;
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
</head>
<body>
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form action="../login_database/user_signup_db.php" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" name="firstName" />
                  <label class="form-label" for="form3Example1">First name</label>
                </div>
              </div>
              
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" name="lastName"/>
                  <label class="form-label" for="form3Example2">Last name</label>
                </div>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example3" class="form-control" name="email" />
                  <label class="form-label" for="form3Example3">Email Address</label>
                </div>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example4" class="form-control" name="userName"  />
                  <label class="form-label" for="form3Example4">Username</label>
                </div>
              </div>

            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example3" class="form-control" name="password" />
              <label class="form-label" for="form3Example3">Password</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control" name="repassword"/>
              <label class="form-label" for="form3Example4">Repeat Password</label>
            </div>

             <p class="mb-5 pb-lg-2" style="color: #393f81;">If you created account?<a href="user_login.php"
            style="color: #393f81;">Login here</a></p>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">
              Sign up
            </button>

          </form>

          <?php 

            if(isset($_GET["error"])){

              if(($_GET["error"]=="emptyInputs")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span> 
                <strong> Error!</strong> Required to fill all the fields..!
              </div>';

              }

               else if(($_GET["error"]=="invaliedUserName")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span>  
                <strong>Error!</strong> Your Username is invalied..!
              </div>';

              }

              else if(($_GET["error"]=="invaliedEmail")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span>  
                <strong>Error!</strong> Enter valied email address..!
              </div>';

              }

              else if(($_GET["error"]=="passwordMatch")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span>  
                <strong>Error!</strong> Password not match with repeat password..!
              </div>';

              }

              else if (($_GET["error"]=="userNameExits")){
                echo '<div class="alert">
                <span class="closebtn">&times;</span>  
                <strong>Error!</strong> Enter another Username..!
              </div>';

              }

             

              }


            
          
          
          ?>


        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>