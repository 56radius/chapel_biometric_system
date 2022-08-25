<?php
  session_start();
  include('includes/config.php');

if(isset($_POST['submit']))
{
  $group_no = $_POST['group_no'];
  $level = $_POST['level'];
      //switch case statement
          switch($group_no) {
            //group 1
             case "1": 
                  if($level == 200) {
                      $seat = rand(1,50);
                        if($seat % 2 == 0){
                            echo"<script>alert('You are in 200 level, Group: 1 Seat: $seat');</script>";
                        }
                  }
                  elseif($level == 400) {
                      $seat = rand(1,50);
                        if($seat % 2 == 1){
                          echo"<script>alert('You are in 400 level, Group: 1 Seat: $seat');</script>";
                        }
                  }
              break;

              //group 2
              case "2": 
                  if($level == 200) {
                      $seat = rand(1,50);
                        if($seat % 2 == 0){
                          echo"<script>alert('You are in 400 level, Group: 2 Seat: $seat');</script>";
                        }
                  }
                  elseif($level == 400) {
                    $seat = rand(1,50);
                        if($seat % 2 == 1){
                          echo"<script>alert('You are in Group: 2 Seat: $seat');</script>";
                         }
                  }
              break;

              //group 3
              case "3": 
                  if($level == 200) {
                      $seat = rand(1,50);
                        if($seat % 2 == 0){
                          echo"<script>alert('You are in Group: 3 Seat: $seat');</script>";
                        }
                  } 
                  elseif($level == 400) {
                      $seat = rand(1,50);
                        if($seat % 2 == 1){
                          echo"<script>alert('You are in Group: 3 Seat: $seat');</script>";
                        }
                  }
              break;

              //group 4
              case "4": 
                  if($level == 200) {
                    $seat = rand(1,50);
                      if($seat % 2 == 0){
                        echo"<script>alert('You are in Group: 4 Seat: $seat');</script>";
                      }
                  } 
                  elseif($level == 400) {
                    $seat = rand(1,50);
                      if($seat % 2 == 1){
                        echo"<script>alert('You are in Group: 4 Seat: $seat');</script>";
                      }
                  }
              break;

              //group 5
              case "5": 
                  if($level == 200) {
                    $seat = rand(1,50);
                      if($seat % 2 == 0){
                        echo"<script>alert('You are in Group: 5 Seat: $seat');</script>";
                      }
                  } 
                  elseif($level == 400) {
                    $seat = rand(1,50);
                      if($seat % 2 == 1){
                        echo"<script>alert('You are in Group: 5 Seat: $seat');</script>";
                      }
                  }
              break;

              //group 6
              case "6": 
                if($level == 200) {
                  $seat = rand(1,50);
                    if($seat % 2 == 0){
                      echo"<script>alert('You are in 200 level, Group: 6 Seat: $seat');</script>";
                    }
                } 
                elseif($level == 400) {
                  $seat = rand(1,50);
                    if($seat % 2 == 1){
                      echo"<script>alert('You are in 400 level, Group: 6 Seat: $seat');</script>";
                    }
                }
              break;

              //group 7
              case "7": 
                if($level == 200) {
                  $seat = rand(1,50);
                    if($seat % 2 == 0){
                     echo"<script>alert('You are in Group: 7 Seat: $seat');</script>";
                    }
                } 
                elseif($level == 400) {
                  $seat = rand(1,50);
                    if($seat % 2 == 1){
                      echo"<script>alert('You are in Group: 7 Seat: $seat');</script>";
                    }
                }
              break;

              //group 8
              case "8": 
                if($level == 200) {
                  $seat = rand(1,50);
                    if($seat % 2 == 0){
                      echo"<script>alert('You are in Group: 8 Seat: $seat');</script>";
                    }
                } 
                elseif($level == 400) {
                  $seat = rand(1,50);
                    if($seat % 2 == 1){
                      echo"<script>alert('You are in Group: 8 Seat: $seat');</script>";
                    }
                }
              break;

              //group 9
              case "9": 
                if($level == 200) {
                  $seat = rand(1,50);
                    if($seat % 2 == 0){
                      echo"<script>alert('You are in Group: 9 Seat: $seat');</script>";
                    }
                } 
                elseif($level == 400) {
                  $seat = rand(1,50);
                    if($seat % 2 == 1){
                      echo"<script>alert('You are in Group: 9 Seat: $seat');</script>";
                    }
                }
              break;

              //group 10
              case "10": 
                if($level == 200) {
                  $seat = rand(1,50);
                    if($seat % 2 == 0){
                      echo"<script>alert('You are in Group: 10 Seat: $seat');</script>";
                    }
                } 
                elseif($level == 400) {
                  $seat = rand(1,50);
                    if($seat % 2 == 1){
                      echo"<script>alert('You are in Group: 10 Seat: $seat');</script>";
                    }
                }
              break;

              //group 11
              case "11": 
                if($level == 200) {
                  $seat = rand(1,50);
                    if($seat % 2 == 0){
                      echo"<script>alert('You are in Group: 11 Seat: $seat');</script>";
                    }
                } 
                elseif($level == 400) {
                  $seat = rand(1,50);
                    if($seat % 2 == 1){
                      echo"<script>alert('You are in Group: 11 Seat: $seat');</script>";
                    }
                }
              break;

              //group 12
              case "12": 
                if($level == 200) {
                  $seat = rand(1,50);
                    if($seat % 2 == 0){
                      echo"<script>alert('You are in Group: 12 Seat: $seat');</script>";
                    }
                } 
                elseif($level == 400) {
                  $seat = rand(1,50);
                    if($seat % 2 == 1){
                      echo"<script>alert('You are in Group: 12 Seat: $seat');</script>";
                    }
                }
              break;

              default:
                  echo"<script>alert('Invalid');</script>";
              break;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="This is for 200 level and 400 level">
    <meta name="author" content="gbenga">
    <meta name="keywords" content="seat, number, 200">
    <title> 200 or 400 level seat number </title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <style>
    .wrapper {
  max-width: 500px;
  width: 100%;
  background: #fff;
  margin: 20px auto;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.125);
  padding: 30px;
}

.wrapper .title {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #4d84e2;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form {
  width: 100%;
}

.wrapper .form .inputfield {
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label {
  width: 200px;
  color: #757575;
  margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea {
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea {
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select {
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before {
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}

.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus {
  border: 1px solid #4d84e2;
}

.wrapper .form .inputfield p {
  font-size: 14px;
  color: #757575;
}
.wrapper .form .inputfield .check {
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"] {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark {
  width: 15px;
  height: 15px;
  border: 1px solid #4d84e2;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before {
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark {
  background: #4d84e2;
}

.wrapper
  .form
  .inputfield
  .check
  input[type="checkbox"]:checked
  ~ .checkmark:before {
  display: block;
}

.wrapper .form .inputfield .btn {
  width: 100%;
  padding: 8px 10px;
  font-size: 15px;
  border: 0px;
  background: #4d84e2;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover {
  background: #4d84e1;
}

.wrapper .form .inputfield:last-child {
  margin-bottom: 0;
}

@media (max-width: 420px) {
  .wrapper .form .inputfield {
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label {
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms {
    flex-direction: row;
  }
}

.button {
  padding: 6px 20px;
  border-radius: 10px;
  cursor: pointer;
  background: transparent;
  border: 1px solid #4481eb;
}

.button: hover {
   background: #4481eb;
  color: #fff;
  transition: 0.5rem;
}

  </style>
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

      <div class="wrapper">
      <div class="title"> 200 level or 400 level seat number </div>  
      
      <form method="post" action="">
        <div class="form">
         <div class="inputfield">
          <label> Full Name </label>
          <input type="text" name="first_name" id="first_name" class="input" required="required" />
        </div>
      
        <div class="inputfield">
          <label> Matric Number </label>
          <input type="text" name="last_name" id="last_name" class="input" required="required" />
        </div>
        <div class="inputfield">
          <label> Hostel Name </label>
          <input type="text" name="other_names" id="other_names" class="input" required="required" />
        </div>
        <div class="inputfield">
          <label> Room Number </label>
          <input type="text" name="other_names" id="other_names" class="input" required="required" />
        </div>
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender" id="gender">
              <option value=""> None </option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </div>
         <div class="inputfield">
          <label> Level </label>
          <div class="custom_select">
            <select name="level" id="level">
              <option value=""> None </option>
              <option value="200"> 200 </option>
              <option value="400"> 400 </option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <label> Group Number </label>
          <div class="custom_select">
            <select name="group_no" id="group_no">
              <option value=""> None </option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <label>Session</label>
          <div class="custom_select">
            <select name="session" id="session">
              <option value=""> none </option>
              <option value="2021/2022">2021/2022</option>
              <option value="2022/2023">2022/2023</option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <input type="submit" name="submit" id="submit" value="Get Seat no" class="btn" />
        </div>
      </div>
    </div>
      </div>
    </div>
      </section>
      </div>
    </div>
  </body>
</html>