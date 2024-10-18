<?php

session_start();


$host = "localhost";
$user = "root";
$password = "";
$dbname = "studi";

$connect = new mysqli($host, $user, $password, $dbname);

if($connect -> connect_error)
{
    //die ("Connection Error");

}
else{
    //echo("Connection sucess");
}

if(isset($_POST ['submit'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $phone =  $_POST['phone'];
  $pass = $_POST['pass'];
  $conpass = $_POST['conpass'];

  $sql = "INSERT INTO user_reg (email, pass) VALUES (?,?)";
  $result = $connect -> prepare($sql);

  $result -> bind_param("ss", $email,$pass,);

  if($result ->execute())
  {
  echo "<script>alert('Connection Successful!');</script>";
  }

  else{
  echo "<script>alert('Try Again!');</script>";
  }
}



?>



<!DOCTYPE html>
<html lang="en" style="min-height: 138%;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Studi -  User Registration</title>
    
    <!-- Layout styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.ico">
    
  </head>
  <body>

    <div class="container" style="margin-top: 1%; padding-left: 0.75rem;">

      <img class ="image" src="4.png" alt="Studi - User Registration" style="width:500px; margin-left: 93px; margin-bottom:80px;">

    <div>
        <div>
            <div>
                <div>
                  <div class="card" style="margin-bottom:-20px; padding-bottom:3%; width:470px; height: 825px;">
                    <div>
                <h1><b>User Registration</b></h1><hr><br>


                <form method="POST" name="form1">

                  <div class="form-group" style="width: 49%;">
                    <label><b>First Name</b> <font style="color: red;">*</font></label>
                    <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                  </div>

                  <div class="form-group" style="width: 49%; margin-top: -80px; margin-left: 170px;">
                    <label><b>Last Name</b> <font style="color: red;">*</font></label>
                    <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label><b>Username</b> <font style="color: red;">*</font></label>
                    <input type="text" name="uname"  placeholder="Username" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label><b>Email Address</b> <font style="color: red;">*</font></label>
                    <input type="email" name="email" placeholder="Enter your email address" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label><b>Gender</b> <font style="color: red;">*</font></label>

                    <input type="radio" name="gender" id="male" name="gender" value="m" required="required">
                    <label for="male" style="font-size: 14px; margin-top: -4px;">Male</label>

                    <input type="radio" name="gender" id="female" name="gender" value="f">
                    <label for="female" style="font-size: 14px; margin-top: -4px;">Female</label>
                  </div>

                  <div class="form-group">
                    <label><b>Phone Number</b> <font style="color: red;">*</font></label>
                    <input type="number" name="phone" placeholder="Phone Number (with country code)" name="phone" class="form-control" required>
                  </div>
                  
                  <div class="form-group">
                    <label><b>Password</b> <font style="color: red;">*</font></label>
                    <input type="password" name="pass" placeholder="Enter your password with 8 or more digits" minlength="8" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label><b>Confirm Password</b> <font style="color: red;">*</font></label>
                    <input type="password" name="conpass" placeholder="Confirm your password" minlength="8" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <input type="checkbox" required><font style="font-size: 14px; text-align:justify;">
                      I agree to all the terms and conditions and all information that I provided above is true.<font style="color: red;">*</font></font>
                  <br>
                  <font class="sign-up" style="font-size: 12px;">By creating an account you are accepting our <a href="#"> <b> Terms & Conditions</b></a></font>
                </div>

                  <div style="margin-top: 3px;">
                  <input type="reset" class="btn" value="Clear" style="width:130px; margin-left: 20px;">
                  <input type="submit" class="btn" name = "submit" value="Register" style="width:130px; margin-left: 33px;"><br>
                  </div>
                  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

                    <div>
                        <div>
                            <div>
                              <div class="card" 
                              style="float:left;
                               margin-left: 205px;
                               height:128px; width: 500px;
                               margin-top: -128px;
                               border-top-right-radius: 0px;
                               border-bottom-right-radius: 0px;
                               border-bottom-left-radius: 10px;">
                               
                  
                      <p class="sign-up" style="margin-top: -20px; margin-left: 10px;">Already have an user account?<a href="User login.html"> <b>Login</b></a>
                      <br><b>Want to select account type again? </b><a href="Commonlogin.html"><b>Go Back</b></a><br></p>
            
        </div>
      </div>
    </div>
</div>
</body>
</html>
  