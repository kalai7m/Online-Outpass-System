<?php
session_start();
if(!isset($_COOKIE['logincook']))
  {
    header("location: ../login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="ico/favicon" href="../img/logo/hostel-black.ico">
  <title>Dashboard-Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="file:///C:/Users/Kalaivani/Downloads/fontawesome-free-5.12.0-web/fontawesome-free-5.12.0-web/css/all.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  
  
  <script src="../js/bootstrapjquery.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.js"></script>


  <link rel="stylesheet" href="../css/dashmain.css">
  <link rel="stylesheet" href="../css/body.css" />
  <link rel="stylesheet" href="../css/dashtable1.css">
  


</head>
<body style="height:1500px;background: rgb(150, 176, 233);">

<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
        <div id="sidebar">
                <!--<div class="toggle-btn" onclick="toggleSidebar()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>-->
                <script>
                        function toggleSidebar(){
                            document.getElementById("main").style.marginLeft = "250px";
                            document.getElementById("sidebar").style.marginLeft="200px";
                            
                        }  
                        function navclose(){
                            document.getElementById("main").style.marginLeft = "0px";
                            document.getElementById("sidebar").style.marginLeft="0px";
                            
                        }  
                  </script>
                <div class="toggle1" onclick="toggleSidebar()">
                    <img src="../img/logo/hostel-black.png" height="50px" width="50px" alt="sgassddfsa">
                </div>
                <span href="javascript:void(0)" class="closebtn" onclick="navclose()">&times;</span>
                <a href="dash.php">Profile</a>
                <a href="outpassst.php">Outpass</a>
                <a href="">View</a>
                <a href="#">Change Password</a>
                <a href="../logout.php">logout</a>
        </div>
        <ul class="navbar-nav ml-auto">
        
        <li class="selected nav-item">
                <a href="dash.php" class="nav-link active">Home</a>
        </li>
        <!--<li class="nav-item">
                <a href="#" class="nav-link">Outpass</a>
        </li>
        <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Home</a>
                <a href="#" class="dropdown-item">Service</a>
                <a href="#" class="dropdown-item">Contact</a>
                </div>
        </li>
        <li class="nav-item">
                <a href="#" class="nav-link">Service</a>
        </li>-->
        <li class="nav-item">
                <a href="../logout.php" class="nav-link">Logout</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="#">
                <img class="rounded-circle avatar" src="../img/boy.png" style="max-width: 30px">
                <span class=" text-white small">Maman Ketoprak</span>
                </a>
        </li>
        </ul>
</nav>

<div id="main" class="row" style="margin-top:50px;background: rgb(150, 176, 233); padding-right: 20px; padding-left: 20px;">
        <div class="leftcolumn">
                <!--MAIN ABOUT-->
                <div class="card about">
                  <h2>ABOUT ME</h2>
                  <h5>Update description, Dec 7, 2017</h5>

                  
                </div>
                <div class="card1">
                        <div style="background: #0E1119;">
                                <table class="container1">
                                      <thead>
                                              <tr>
                                                      <th><h1>Personal Detail</h1></th>
                                                      <th><h1></h1></th>
                                              </tr>
                                      </thead>
                                      <tbody>
                                              <tr>
                                                      <td>Name</td>
                                                      <td>Dhoni</td>
                                              </tr>
                                              <tr>
                                                      <td>Register</td>
                                                      <td>2017507326</td>
                                              </tr>
                                              <tr>
                                                      <td>Gender</td>
                                                      <td>4162</td>
                                              </tr>
                                              <tr>
                                                      <td>DOB</td>
                                                      <td>3654</td>
                                              </tr>
                                              <tr>
                                                <td>Blood Group</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Religion</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Caste</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Marital Status</td>
                                                <td></td>
                                             </tr>
                                        </tbody>
                                        <thead>
                                             <tr>
                                                     <th><h1>Academic Detail</h1></th>
                                                     <th></th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                                        <td>College</td>
                                                        <td>MIT, AU</td>
                                                     </tr>
                                                        
                                             <tr>
                                                <td>Course</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Department</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Year of study<small>current</small></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Year of Graduation</td>
                                                <td></td>
                                             </tr>
                                        </tbody>
                                        <thead>
                                                <tr>
                                                        <th><h1>Contact</h1></th>
                                                        <th></th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>Mail</td>
                                                        <td></td>
                                                </tr>
                                                <tr>
                                                        <td>Phone</td>
                                                        <td></td>
                                                </tr>
                                        </tbody>
                                        <thead>
                                                <tr>
                                                        <th><h1>Address</h1></th>
                                                        <th></th>
                                                </tr>
                                        </thead>
                                        <tbody>                                               
                                             <tr>
                                                <td>Doorno</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Street</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Area</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>City</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>District</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>Pincode</td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>State</td>
                                                <td></td>
                                             </tr>
                                        </tbody>
                                </table>
                              </div>
                </div>
                <!--OVER MAIN ABOUT-->

                <div class="card">
                  <h2>TITLE HEADING</h2>
                  <h5>Title description, Sep 2, 2017</h5>
                  <div class="fakeimg">Image</div>
                  <p>Some text..</p>
                  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
              </div>
        <div class="rightcolumn">

                <!--PHOTO-->
                <div class="card">
                  <h2><i class="fas fa-camera-retro"></i> My Pic</h2>
                  <div class="fakeimg">
                  <img class="photo" src="../img/boy.png">
                </div>
                <p><center>Dhoni</center></p>
                </div>
                <!--OVER PHOTO-->

                <!--HOSTEL DETAIL-->
                <div class="card about">
                  <h3>Hostel Detail</h3>
                </div>

                <div class="card1">
                        <table class="container1">
                                <tr>
                                        <td>Hostel Name</td>
                                        <td>Cauvery</td>
                                </tr>
                                <tr>
                                        <td>Room No</td>
                                        <td>7211</td>
                                </tr>
                                <tr>
                                        <td>RC</td>
                                        <td>Kasth</td>
                                </tr>
                        </table>
                </div>
                <!--OVER HOSTEL DETAIL-->

                <!--CONTACT GUARD-->
                <div class="card">
                  <h3><!--<i class="fas fa-phone-alt"></i>--><i class="fas fa-phone-square-alt"></i> Contact Detail</h3>
                  <small><center>Parent/Guardian</center></small>
                  <p><span style="font-weight: bold;">Dad : </span></p>
                  <p><span style="font-weight: bold;">Phone : </span></p>
                  <p><span style="font-weight: bold;">Mail : </span></p>
                  <hr style="border-color: #0E1119;">
                  <p><span style="font-weight: bold;">Mom : </span></p>
                  <p><span style="font-weight: bold;">Phone : </span></p>
                  <p><span style="font-weight: bold;">Mail : </span></p>
                  <p><span style="font-weight: bold;">Phone : </span></p>
                </div>
                <!--OVER CONTACT GUARD-->

              </div>
            </div>
            
        <div class="footer container-fluid">
                <h2>Footer</h2>
        </div>
</div>

</body>
</html>


