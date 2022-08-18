<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title> Fingerprint registration </title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <script src="jquery-1.8.2.js"></script>
<script src="mfs100-9.0.2.6.js"></script>

<script language="javascript" type="text/javascript">


        var quality = 60; //(1 to 100) (recommanded minimum 55)
        var timeout = 10; // seconds (minimum=10(recommanded), maximum=60, unlimited=0 )
        var flag = 0;

// Function used to match fingerprint using jason object 

function Match() {

            try {
              //fingerprint stored as isotemplate

                var isotemplate = <?php echo json_encode($fp); ?>;
                var res = MatchFinger(quality, timeout, isotemplate);

                if (res.httpStaus) {
                    if (res.data.Status) {
                        alert("Finger matched");
                        
                        //variable flag used for authentication 
                        
                        flag=1;
                    }
                    else {
                        if (res.data.ErrorCode != "0") {
                            alert(res.data.ErrorDescription);
                        }
                        else {
                            alert("Finger not matched");
                        }
                    }
                }
                else {
                    alert(res.err);
                }
            }
            catch (e) {
                alert(e);
            }
            return false;

        }

//function to redirect to next page upon fingerprint matching

function redirect(){

    
    if(flag){ 
    window.location.assign("url"); 
    }
    else{
      alert("Scan Your Finger");
    }

  return false;
}

</script>

  <style>
     
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


         <section class="attendance">
          <div class="attendance-list">
            <h2> Register your fingerprint </h2>
          </div>


  <div class="header">

    <img class="left" src="../favicons/apple-icon-60x60.png" height="40" width="40">
  </div>

    <div class="register_panel">
      <div class="panel panel-primary">
          <div class="panel-heading font"> </div>
          <div class="panel-body">
                <form method = "post" name="myForm" action="#">
                    
                    <div class="hide">
                      <table>
                        <tr>
                          <td>
                              Base64Encoded ISO Image
                          </td>
                          <td>
                             <textarea id="txtIsoTemplate" style="width: 100%; height:50px;" class="form-control"> </textarea>
                          </td>
                        </tr>
                      </table>
                    </div>
                   
                    
                    <div class="finger_print padd fingerpadd" style="border:solid">

                    <div>
                    <figure>
                    <img src="https://www.larsonjewelers.com/Images/larson-jewelers-fingerprint-engraving-ring.png" alt="finger_print" width="100" height="100">
                    </figure>
                    </div>


                    <div>
                      <button type="input" onclick="return Match()" class="btn btn-default padd" >start scanning</button>
                    </div>
                    
                    </div>
                    

                    
                    <div>
                      <button type="submit" onclick="return redirect()" class="btn btn-primary btn-lg  padd submit_buttom_padding btn-block" value="submit" name="submit">Submit</button>
                    </div>
                    

                    </div>
                    </div>
               </form>
          </div>
       </div>
    </div>
        </section>
  </body>
</html>
