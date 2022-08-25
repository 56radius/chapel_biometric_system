<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT email,password,id FROM admin_reg WHERE email=? and password=? ");
        $stmt->bind_param('ss',$email,$password);
        $stmt->execute();
        $stmt -> bind_result($email,$password,$id);
        $rs=$stmt->fetch();
        $stmt->close();
        $_SESSION['id']=$id;
        $_SESSION['login']=$email;
        $uip=$_SERVER['REMOTE_ADDR'];
        $ldate=date('d/m/Y h:i:s', time());
        if($rs)
        {
             $uid=$_SESSION['id'];
             $uemail=$_SESSION['login'];
            $ip=$_SERVER['REMOTE_ADDR'];
            $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
            $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
            $city = $addrDetailsArr['geoplugin_city'];
            $country = $addrDetailsArr['geoplugin_countryName'];
            $log="insert into adminLog(userId,userEmail,userIp,city,country) values('$uid','$uemail','$ip','$city','$country')";
            $mysqli->query($log);
              if($log)
              {
                header("location:admin_dashboard.php");
              }
          }
          else
          {
            echo "<script>alert('Invalid Username/Email or password');</script>";
          }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin Login </title>
    <link rel="stylesheet" type="text/css" href="./sign.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="post" class="sign-in-form">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" id="email" placeholder="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" />
            </div>
            <input type="submit" name="login" id="login" value="Login" class="btn solid" />
          </form>

          <form action="" method="post" class="sign-up-form">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" id="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" />
            </div>
            <input type="submit" name="submits" value="Sign Up" class="btn solid" />

            <!-- <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here?</h3>
            <p>Sign up,with just your mail.</p>
            <button class="btn transparent" id="sign-up-btn">Sign Up</button>
          </div>
          <img src="./images/log.svg" class="image" alt="" />
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>One of us?</h3>
            <p>Welcome back.</p>
            <button class="btn transparent" id="sign-in-btn">Sign In</button>
          </div>
          <img src="./images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

     
    <script src="./sign.js"></script> 
  </body>
</html>
