<?php
//login.php

include("database_connection.php");
$conn = mysqli_connect('localhost','root','','testing');
if(isset($_COOKIE["type"]))
{
 header("location:index.php");
}

$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["user_email"]) || empty($_POST["user_password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
     $q = mysqli_real_escape_string($conn,$_POST["user_email"]);
    $pass=mysqli_real_escape_string($conn,$_POST["user_password"]);
    $query = "SELECT * FROM user_details WHERE user_email='".$q."' and user_password='".$pass."' "; 
     
     $result=mysqli_query($conn,$query);
     $user=mysqli_fetch_array($result);
     if($user){
         setcookie("type", $q, time()+3600);
     header("location:index.php");
     }else{
        $message = "<div class='alert alert-danger'>invalid user</div>"; 
     }
 }
}


?>

<!DOCTYPE html>
<html>
 <head>
  <title>login-signup</title>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <style>
         .container{
             width: 400px;
            
             padding: 2px;
            
         }
     </style>
 </head>
 <body>
  <br />
  <div class="container">
   
   <div class="panel panel-default">

    <div class="panel-heading">Login</div>
    <div class="panel-body">
     <span><?php echo $message; ?></span>
     <form method="post">
      <div class="form-group">
       <label>User Email</label>
       <input type="text" name="user_email" id="user_email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="password" name="user_password" id="user_password" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="login" id="login" class="btn btn-info" value="Login" />
      </div>
         <div class="d-flex justify-content-center links">
					Don't have an account?<a href="register.php"
                        >Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
     </form>
    </div>
   </div>
   
  </div>
 </body>
</html>
