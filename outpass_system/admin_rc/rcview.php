<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="cssrc/rcdashmain.css">
  <link rel="stylesheet" href="cssrc/viewtable.css">
  <link rel="stylesheet" type="text/css" href="file:///C:/Users/Kalaivani/Downloads/fontawesome-free-5.12.0-web/fontawesome-free-5.12.0-web/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <script src="../js/bootstrapjquery.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.js"></script>
 
  <link rel="icon" type="ico/favicon" href="../img/logo/hostel-black.ico">
  <title>Outpass - View</title>

  <style>
  body {
    font-family: "Comic Sans MS", "Comic Sans", cursive;
    padding: 10px;
    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  }
  </style>

</head>

<body>

  <!--NAV-->
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-blue">
    <div id="sidebar">
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
            <a href="#" class="dropdown-item">Home</a>
            <a href="#" class="dropdown-item">Service</a>
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
<!--OVER NAV-->

<!--MAIN-->
<div id="main">
  <div class="row" style="margin-top:50px; padding-right: 20px; padding-left: 20px;">
    <!--LEFT-->
    <div class="leftcolumn1">
      <div class="card1-inv">
        <h2>Maman Keto <small style="font-size: 20px;">DETAIL</small></h2>
      </div>

      <div class="tbl-content" style="margin-top: 0px;overflow-x: hidden;">
        <table  class="table-r" cellpadding="0" cellspacing="0" border="0" style="padding-bottom: 0;">
          <tbody>
            <tr>
              <td>Register No</td>
              <td></td>
            </tr>
            <tr>
              <td>Block</td>
              <td></td>
            </tr>
            <tr>
              <td>Room No</td>
              <td></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td></td>
            </tr>
            <tr>
              <td>Parent Phone</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--OVER LEFT-->

    <!--RIGHT-->
    <div class="rightcolumn1">
      <div class="card1-inv">
        <h2>TIMING <small style="font-size: 20px;">DETAIL</small></h2>
      </div>
      <div class="tbl-content" style="margin-top: 0px;overflow-x: hidden;">
        <table  class="table-r" cellpadding="0" cellspacing="0" border="0" style="padding-bottom: 0;">
          <tbody>
            <tr>
              <td>Leaving Date</td>
              <td></td>
            </tr>
            <tr>
              <td>Time</td>
              <td></td>
            </tr>
            <tr>
              <td>Arrival Date</td>
              <td></td>
            </tr>
            <tr>
              <td>Time</td>
              <td></td>
            </tr>
            <tr>
              <td>No of days staying</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--OVER RIGHT-->
  </div>

  <div class="row" style="margin-top:5px; padding-right: 20px; padding-left: 20px;">
    <div class="add">
      <div class="card1-inv">
        <h2>Address <small style="font-size: 20px;">DETAIL</small></h2>
      </div>
      <div class="tbl-content" style="margin-top: 0px;overflow-x: hidden;height:375px;">
        <table  class="table-r" cellpadding="0" cellspacing="0" border="0" style="padding-bottom: 0;">
          <tbody>
            <tr>
              <td>Door No</td>
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
</div>
</div>
<!--OVER MAIN-->
</body>
</html>