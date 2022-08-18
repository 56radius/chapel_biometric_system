<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$post=$_POST['post'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$address=$_POST['address'];

$query="insert into admin_reg(first_name,last_name,post,password,gender,email,address) values(?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssss',$first_name,$last_name,$post,$password,$gender,$email,$address);
$stmt->execute();
echo"<script>alert('Admin Succssfully register');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin registration </title>
    <link rel="stylesheet" href="reg.css"/>

    <!-- javascript confirming password code -->
      <script type="text/javascript">
    function valid()
    {
      if(document.registration.password.value!= document.registration.cpassword.value)
      {
        alert("Password and Re-Type Password Field do not match  !!");
        document.registration.cpassword.focus();
        return false;
      }
        return true;
    }
  </script>
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Registration Form (Admin)</div>  
      
      <form method="post" action="">
        <div class="form">
         <div class="inputfield">
          <label> First Name </label>
          <input type="text" name="first_name" id="first_name" class="input" required="required" />
        </div>
      
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" name="last_name" id="last_name" class="input" required="required" />
        </div>
        <div class="inputfield">
          <label> Title / Post </label>
          <input type="text" name="post" id="post" class="input" required="required" />
        </div>
        <div class="inputfield">
          <label>Password</label>
          <input type="password" name="password" id="password" class="input" required="required"/>
        </div>
        <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" name="cpassword" id="cpassword"  class="input" required="required"/>
        </div>
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender" id="gender">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" name="email" id="email" onBlur="checkAvailability()" required="required">
        </div>
        <div class="inputfield">
          <label>Address</label>
          <input type="text" name="address" id="address" class="input" required="required"></input>
        </div>
        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" />
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
        </div>
        <div class="inputfield">
          <input type="submit" name="submit" id="submit" value="Register" class="btn" />
        </div>
      </div>
    </div>
  </body>
</html>
