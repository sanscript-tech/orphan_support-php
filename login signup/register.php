<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$message='';
$flag=0;
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'testing');

// REGISTER USER
if (isset($_POST['register'])) {
    if(empty($_POST["user_email"]) || empty($_POST["user_password"]) || empty($_POST["user_password1"]) || empty($_POST["user_name"]))
 {$flag=1;
  $message = "<div class='alert alert-danger'>All Fields are required</div>";
 }
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['user_name']);
  $email = mysqli_real_escape_string($db, $_POST['user_email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['user_password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['user_password1']);

  // form validation: ensure that the form is correctly filled ...
  
//  if (empty($username)) {
//  $message = "<div class='alert alert-danger'>name required</div>";
// }
//  if (empty($email)) {
//  $message = "<div class='alert alert-danger'>Email Id required</div>";
// }
//  if (empty($password_1)) {
//  $message = "<div class='alert alert-danger'>password is required</div>";
// }
  if ($password_1 != $password_2) {
  $message = "<div class='alert alert-danger'>Password must be same</div>";
 }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_details WHERE user_name='$username' OR user_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $username) {
  $message = "<div class='alert alert-danger'>Username already taken</div>";
        $flag=1;
 }

    if ($user['user_email'] === $email) 
    {
  $message = "<div class='alert alert-danger'>Email Already exists</div>";
        $flag=1;
 }
  }
 $user_id=1;
    
  // Finally, register user if there are no errors in the form
    //means flag=0
  if ($flag == 0) {
  	$password = ($user_password);

  	$query = "INSERT INTO user_details (user_id, user_email, user_password,user_name) 
  			  VALUES('$user_id', '$email', '$password_1,'$username')";
  	mysqli_query($db, $query);
//  	$_SESSION['user_email'] = $username;
//  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
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

    <div class="panel-heading">Sign Up</div>
    <div class="panel-body">
     
        <span><?php echo $message; ?></span> 
     <form method="post">
        <div class="form-group">
       <label>Name</label>
       <input type="text" name="user_name" id="user_name" class="form-control"  />
      </div>
      <div class="form-group">
       <label>Email ID</label>
       <input type="text" name="user_email" id="user_email" class="form-control"  />
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="password" name="user_password" id="user_password" class="form-control" />
      </div>
         <div class="form-group">
       <label>Confirm Password</label>
       <input type="text" name="user_password1" id="user_password" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="register" id="register" class="btn btn-info" value="register" />
<!--          <button type="submit" class="btn btn-primary" name="reg_user">Register</button>-->
      </div>
         <div class="d-flex justify-content-center links">
					Already a member?<a href="login.php
                        ">Sign in</a>
				</div>
				
     </form>
    </div>
   </div>
   
  </div>
 
	
<!--
  <form method="post" action="register.php">
  	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
-->
</body>
</html>
