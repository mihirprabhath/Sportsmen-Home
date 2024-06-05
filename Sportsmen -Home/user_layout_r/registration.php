

<?php 

session_start();
require_once "../login_database/dbc.php";

?>


<html>
  <head>

  <link rel="stylesheet" href="../user_layout/user_page.css">
  <style>

        *{
            margin:0;
            
        }


        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #2b3a61;
        
    
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 22px 22px;
        text-decoration: none;
        }

        li a:hover:not(.active) {
        background-color: #111;
        }

        .active {
        background-color: #04AA6D;
        }


        /* User Order Form*/

        body {
        font-family: Arial;
        }

        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        button[type=submit] {
        width: 100%;
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        button[type=submit]:hover {
        background-color: #45a049;
        }

        div.container {
        border-radius: 5px;
        background-color: #f2f2f2;
        
        }

        .fileds{
            width:18%;
            margin-right:16%;
            height:35px;
            margin-bottom:2%;
        }
        
        .area{

            width:100%;
            margin-right:2%;
            height:60px;
            margin-top: 1%;
            margin-bottom: 1%;
            background-color: white;

            }

            
       
       
</style>
 
  </head>
  <body>




  <div style="position: sticky; top:0; display: inline;">

  

    <li style="position: absolute; top:0; left:40%; color:white;   list-style-type: none; padding-top: 10px;
 "> <h1 class="heading">RUSL sportsmans</h1></li>
  <ul>

  <?php 
if(isset($_SESSION["userName"])){

    echo '<li style="float:right"><a href="../login_formate/user_login.php">logout</a></li>';
     
}
else{
    echo '<li style="float:right"><a href="../login_formate/user_login.php">login</a></li>';
}

?>
  
</ul>

</div>






    
<div class="container" style="margin:20px;">

<div class="layout" style="  background-color: white; width: 70%; height:100%; margin-left:16%;
 padding:7px;">

<h1 style="margin-bottom:2%;">Sportsmen Registration Form</h1>


<div class="container">
  <form action="user_save.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text"  name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text"  name="lastname" placeholder="Your last name.." required>

    
    <label for="lname">Phone Number</label>
    <input type="text"  name="phone" placeholder="077-3592227"required>

    <label for="email">Email Address </label>
    <input type="text"  name="email" placeholder="Your email .." required>
     
       
    </textarea>

    <label for="sport">Your Sport</label>
    <select  name="sport">
        <?php 
        $query = "SELECT*FROM sport;";

        $query_run = mysqli_query($conn, $query);

        if($query_run){

            while($row=mysqli_fetch_assoc($query_run)){

                echo'<option value='.$row['item'].'>'.$row['item'].'</option>';
            }
        }

        else{ echo"Error executing query:".mysqli_error($conn);}
        
      
        
        ?>

    </select>
    
     
   

    <br>



    <label for="date">Date of Registration </label>
    <input class="fileds" type="date"  name="orderDate"  required>
    




    
    <br>

    <button type="submit" name="order">Registration Now</button>
  </form>
</div>

</div>


<nav class="main-menu">
            <br>
            <br>
            <br>
            <ul>
                <li>
                    <a href="../user_layout/dashboard.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                           Community Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="../user_layout_r/registration.php">
                    <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="nav-text">
                        Sportsmen Registration
                        </span>
                    </a>
                    
                </li>
                
                    
          
                <li class="has-subnav">
                    <a href="../user_avilable/team.php">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                        <span class="nav-text">
                        Team
                        </span>
                    </a>
                   
                </li>
               
                <li>
                <a href="../user_layout_comment/user_comment.php">
                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                        <span class="nav-text">
                        User Comment
                        </span>
                    </a>
                </li>
                
                <li>
                <a href="../user_layout_about/about_us.php">
                   <i class="fa fa-info fa-2x"></i>             
                        <span class="nav-text">
                           About Us
                        </span>
                    </a>
                </li>
                <li>

        </nav> 


  </body>


  
    </html>