<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
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
              <span class="nav-item">Admin</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-bars"></i>
              <span class="nav-item" id="dash">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="attendance.php">
              <i class="fas fa-address-book"></i>
              <span class="nav-item">Attendance</span>
            </a>
          </li>
          <li>
            <a href="report.php">
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a>
          </li>
          <li>
            <a href="#att">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Statistics</span>
            </a>
          </li>
          <li>
            <a href="/reg.html">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a>
          </li>

          <li>
            <a href="sign.html" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main" id="att">
        <div class="main-top">
          <h1>Dashboard</h1>
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="users">
          <div class="card">
            <img src="./images/david.jpg" />
            <h4>Adebayo David</h4>
            <p>400 level</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>85%</span></td>
                  <td><span>15%</span></td>
                </tr>
                <tr>
                  <td>present</td>
                  <td>absent</td>
                </tr>
              </table>
            </div>
            <button>Profile</button>
          </div>
          <div class="card">
            <img src="./images/josh.jpg" />
            <h4>Oluwatoyin Joshua</h4>
            <p>400 lv</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>82%</span></td>
                  <td><span>18%</span></td>
                </tr>
                <tr>
                  <td>present</td>
                  <td>absent</td>
                </tr>
              </table>
            </div>
            <button>Profile</button>
          </div>
          <div class="card">
            <img src="./images/max.png" />
            <h4>Titus Maxwell</h4>
            <p>400 LV</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>94%</span></td>
                  <td><span>6%</span></td>
                </tr>
                <tr>
                  <td>present</td>
                  <td>absent</td>
                </tr>
              </table>
            </div>
            <button>Profile</button>
          </div>
          <div class="card">
            <img src="./images/OBAZE EMMANUEL-PRESIDENT.jpg" />
            <h4>Obaze Emmanuel</h4>
            <p>400 lv</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>85%</span></td>
                  <td><span>15%</span></td>
                </tr>
                <tr>
                  <td>present</td>
                  <td>absent</td>
                </tr>
              </table>
            </div>
            <button>Profile</button>
          </div>
        </div>

        <section class="attendance">
          <div class="attendance-list">
            <h1>TODAY</h1>
            <h2>Morning devotion</h2>
            <span class="blue">05/3/2022</span>
            <table class="table">
              <thead>
                <tr>
                  <th>s/n</th>
                  <th>Student Name</th>
                  <th>seat number</th>
                  <th>Date</th>
                  <th>Service start time</th>
                  <th>Time of entry</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Adebayo David</td>
                  <td>GR 5 / 22</td>
                  <td>03-24-22</td>
                  <td>6:00AM</td>
                  <td>6:00AM</td>
                  <td><button class="present">PRESENT</button></td>
                </tr>
                <tr class="active">
                  <td>2</td>
                  <td>Bababtunde Emmanuel</td>
                  <td>GR 1 / 19</td>
                  <td>03-24-22</td>
                  <td>6:00AM</td>
                  <td>6:01PM</td>
                  <td><button class="late">Late</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>John Oluwatoyin</td>
                  <td>GR 4/ 21</td>
                  <td>03-24-22</td>
                  <td>6:00AM</td>
                  <td>---</td>
                  <td><button class="absent">Absent</button></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Adebayo ThankGOD</td>
                  <td>GR 4 / 22</td>
                  <td>03-24-22</td>
                  <td>6:00AM</td>
                  <td>6:00AM</td>
                  <td><button class="present">PRESENT</button></td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>David Mayowa</td>
                  <td>GR 5 / 30</td>
                  <td>03-24-22</td>
                  <td>6:00AM</td>
                  <td>6:00AM</td>
                  <td><button class="present">PRESENT</button></td>
                </tr>
                <!--  -->
                <!-- <tr >
                <td>06</td>
                <td>Tara Smith</td>
                <td>Testing</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr> -->
                -->
              </tbody>
            </table>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
