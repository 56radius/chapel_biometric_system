<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title> Student Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
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
            <a href="logout." class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>


    </div>
  </body>
</html>
