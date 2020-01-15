<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--TEXT-->
  <link rel="stylesheet" type="text/css" href="file:///C:/Users/Kalaivani/Downloads/fontawesome-free-5.12.0-web/fontawesome-free-5.12.0-web/css/all.min.css">
  
  <!--CSS-->
  <link rel="stylesheet" href="cssrc/rcoutpazz.css">
  <link rel="stylesheet" href="cssrc/rcdashmain.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <!--JAVASCRIPT-->
  <script src="''/js/bootstrapjquery.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/jq.js"></script>
  <script src="jsrc/rcoutpass.js"></script>

  <link rel="icon" type="ico/favicon" href="../img/logo/hostel-black.ico">
  <title>RC - </title>

</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-blue">
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
                    <img src="../img/logo/hostel-black.bmp" height="50px" width="50px" alt="sgassddfsa">
                </div>
                <span href="javascript:void(0)" class="closebtn" onclick="navclose()">&times;</span>
                <a href="#">Profile</a>
                <a href="#">Outpass</a>
                <a href="#">Clients</a>
                <a href="#">Logout</a>
        </div>
        <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
                <a href="#" class="nav-link">Profile</a>
        </li>
        <li class="selected nav-item">
                <a href="#" class="nav-link active">Outpass</a>
        </li>
        <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Outpass</a>
                <a href="#" class="dropdown-item">Contact</a>
                </div>
        </li>
        <li class="nav-item">
                <a href="#" class="nav-link">Service</a>
        </li>
        <li class="nav-item">
                <a href="#" class="nav-link">Logout</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="#">
                <img class="rounded-circle avatar" src="../img/girl.png" style="max-width: 30px">
                <span class=" text-white small">Rc Mam</span>
                </a>
        </li>
        </ul>
</nav>

<div id="main">
        <section class="sec">
                <!--TABLE-->
                <h1 class="head1">Student Outpass</h1>
                
                <div class="tbl-header"></div>
                  <table class="table-r" cellpadding="0" cellspacing="0" border="0">
                    <thead style="width: 100%;">
                      <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Room No</th>
                        <th>Date</th>
                        <th>Place</th>
                        <th>Stay day</th>
                        <th>Status</th>
                        <th>View</th>
                      </tr>
                    </thead>
                  </table>
                
                <div class="tbl-content" style="margin-top: 0px;">
                  <table class="table-r" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                      <tr>
                        <td>AAC</td>
                        <td>AUSTRALIAN COMPANY </td>
                        <td>$1.38</td>
                        <td>+2.01</td>
                        <td>-0.36%</td>
                        <td>77</td>
                        <td></td>
                        <td>
                            <div class="dark">
                              <a class="btn1 btn1-white">View</a>
                            </div>
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </section>
</div>   
              
              <!-- follow me-->
              <div class="made-with-love">
                Made with
                <i>?</i> by
                <a target="_blank" href="#">Team</a>
              </div>
</div>


</div>
</div>

</body>
</html>


