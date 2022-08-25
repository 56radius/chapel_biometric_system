<?php
  session_start();
    include('includes/config.php');
    include('includes/checklogin.php');
  check_login();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title> Student Dashboard </title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <style>
     
  </style>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="/sign.html" class="logo">
              <img src="./images/eagle.jpg" />
              <span class="nav-item"> Welcome </span>
            </a>
          </li>
          <li>
            <a href="student_dashboard.php">
              <i class="fas fa-bars"></i>
              <span class="nav-item" id="dash"> Dashboard </span>
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
          <h1> User's Dashboard</h1>
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="users">
          <div class="card">
            <i class="fas fa-chair"></i>
            <h4> Chapel Seat </h4>
            <p> Get your chapel seat number!! </p>
            <a href="seat.php"> 
            <button>Click Here!!</button></a>
          </div>
            </table>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
