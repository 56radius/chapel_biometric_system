<?php
  session_start();
  include('includes/config.php');
  include('includes/checklogin.php');
  check_login();
    $aid=$_SESSION['id'];
      if(isset($_POST['update']))
      {
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $other_names=$_POST['other_names'];
        $matric_no=$_POST['matric_no'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $level=$_POST['level'];
        $semester=$_POST['semester'];
        $session=$_POST['session'];
        $query="update student_reg set first_name=?,last_name=?,other_names=?,matric_no=?,password=?,
        gender=?,email=?,address=?,level=?,semester=?,session=? where id=?";
        $stmt = $mysqli->prepare($query);
        $rc=$stmt->bind_param('sssssssssssi',$first_name,$last_name,$other_names,$matric_no,$password,$gender,
        $email,$address,$level,$semester,$session,$aid);
        $stmt->execute();
        echo"<script>alert('Student Profile updated Succssfully');</script>";
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <title> Update Profile  </title>
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="profile.css"/>
      <!-- Font Awesome Cdn Link -->
      <linK rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="/sign.html" class="logo">
              <img src="./images/eagle.jpg" />
              <span class="nav-item"> Welcome  </span>
            </a>
          </li>
          <li>
            <a href="student_dashboard.php">
              <i class="fas fa-bars"></i>
              <span class="nav-item" id="dash">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="seat.php">
              <i class="fas fa-address-book"></i>
              <span class="nav-item"> Chapel seat </span>
            </a>
          </li>
          <li>
            <a href="report.php">
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a>
          </li>
            <li>
            <a href="fingerprint.php">
              <i class="fas fa-fingerprint"></i>
              <span class="nav-item"> Fingerprint </span>
            </a>
          </li>
          <li>
            <a href="student_profile.php">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a>
          </li>

          <li>
            <a href="logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main" id="att">
        <div class="main-top">
          <!-- Still coming back to this giving it an head name -->
          <h1> User's Profile</h1>
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="wrapper">
      <div class="title"> Profile Updation </div>  
      
      <form method="post" action="">
        <div class="form">
         <div class="inputfield">
          <label> First Name </label>
          <input type="text" name="first_name" id="first_name" class="input" required="required"/>
        </div>
        
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" name="last_name" id="last_name" class="input" required="required" />
        </div>
        <div class="inputfield">
          <label>other Names</label>
          <input type="text" name="other_names" id="other_names" class="input" required="required" />
        </div>
        <div class="inputfield">
          <label>Matric number</label>
          <input type="text" name="matric_no" id="matric_no" class="input" required="required" />
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
        <div class="inputfield">
          <label>level</label>
          <input type="text" name="level" id="level" class="input" required="required"/>
        </div>
        <div class="inputfield">
          <label>Semester</label>
          <div class="custom_select">
            <select name="semester" id="semester">
              <option value="">Select</option>
              <option value="first">First</option>
              <option value="Second">Second</option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <label>Session</label>
          <div class="custom_select">
            <select name="session" id="session">
              <option value="">Select</option>
              <option value="2021/2022">2021/2022</option>
              <option value="2022/2023">2022/2023</option>
            </select>
          </div>
        </div>
       
        <div class="inputfield">
          <input type="submit" name="update" id="submit" value="Update" class="btn" />
        </div>
      </div>
    </div>
      </section>
    </div>
  </body>
</html>