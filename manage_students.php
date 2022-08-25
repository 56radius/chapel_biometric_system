<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if(isset($_GET['del']))
{
  $id=intval($_GET['del']);
  $adn="delete from registration where id=?";
    $stmt= $mysqli->prepare($adn);
    $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();    
        echo "<script>alert('Data Deleted');</script>" ;
}
?>
<!doctype html>
<html lang="en" class="no-js">


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title> Manage Students </title>

  <!-- styling -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" href="css/fileinput.min.css">
  <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style.css"/>

  <!-- scripting -->
  <script language="javascript" type="text/javascript">
    var popUpWin=0;
    function popUpWindow(URLStr, left, top, width, height)
    {
     if(popUpWin)
    {
    if(!popUpWin.closed) popUpWin.close();
    }
    popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
    }
  </script>
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
            <a href="admin_dashboard.php">
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
            <a href="manage_students.php">
              <i class="fas fa-user"></i>
              <span class="nav-item"> Students </span>
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


            <h2 class="page-title"> Manage Students </h2>
            <div class="panel panel-default">
              <div class="panel-body">
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th> Sno.</th>
                      <th> Full Name </th>
                      <th> Matric No</th>
                      <th> gender </th>
                      <th> email </th>
                      <th> Level  </th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $aid=$_SESSION['id'];
                    $ret="select * from student_reg";
                    $stmt= $mysqli->prepare($ret) ;
                    //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    $cnt=1;
                    while($row=$res->fetch_object())
                        {
                          ?>
                    <tr><td><?php echo $cnt;;?></td>
                    <td><?php echo $row->first_name;?><?php echo $row->last_name;?><?php echo $row->other_names;?></td>
                    <td><?php echo $row->matric_no;?></td>
                    <td><?php echo $row->gender;?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->level;?></td>
                   
                    <td>
                    <a href="javascript:void(0);"  onClick="popUpWindow('http://localhost/hostel/admin/full-profile.php?id=<?php echo $row->id;?>');" title="View Full Details"><i class="fa fa-desktop"></i></a>&nbsp;&nbsp;
                    <a href="manage-students.php?del=<?php echo $row->id;?>" title="Delete Record" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>
                                        </tr>
                    <?php
                      $cnt=$cnt+1;
                    }   ?>                  
                  </tbody>
                </table>

                
              </div>
            </div>

      
  </div>

  <!-- Loading Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
<!-- By Avinx Nation -->