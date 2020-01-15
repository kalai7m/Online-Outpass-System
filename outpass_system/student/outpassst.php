<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="file:///C:/Users/Kalaivani/Downloads/fontawesome-free-5.12.0-web/fontawesome-free-5.12.0-web/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <script src="../js/bootstrapjquery.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.js"></script>
  
  <link rel="stylesheet" href="../css/dashmain.css">
  <link rel="stylesheet" href="../css/body.css" />
  <link rel="stylesheet" href="../css/dashtable1.css">
  <link rel="stylesheet" href="../css/form.css">

  <link rel="icon" type="ico/favicon" href="../img/logo/hostel-black.ico">
  <title>Student - Outpass</title>

  <style>
  .bod{
    background: rgb(150, 176, 233);
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to top,rgb(93, 138, 236),rgb(150, 176, 233));
    background: -moz-linear-gradient(to top,rgb(93, 138, 236), rgb(150, 176, 233));
    background: -o-linear-gradient(to top,rgb(93, 138, 236),rgb(150, 176, 233));
    background: linear-gradient(to top, rgb(93, 138, 236),rgb(150, 176, 233));
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Roboto', sans-serif;
  }

  </style>

</head>
<body class="bod" style="height:1500px;background: rgb(150, 176, 233);">

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
                <a href="#">Profile</a>
                <a href="#">Outpass</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
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
                <img class="rounded-circle avatar" src="../img/boy.png" style="max-width: 30px">
                <span class=" text-white small">Maman Ketoprak</span>
                </a>        
        </li>
        </ul>
</nav>

<div id="main" style="background:none;padding-top: 20px;">
    

<!--OVER MAIN ABOUT-->

<!--OUTPS FORM-->
<div class="main-w1 wrapper1">
    <h1><img src="../img/logo/bagg.png" style="height: 70px; width: auto;"> Outpass Form</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="#" method="post">
                <center>
                <input class="box w wt" type="text" name="stname" placeholder="Name" required="">
                <input class="box w"  type="text" name="regno" placeholder="Register No" required="">
                <input class="box w" type="text" name="block" placeholder="Block" required="">
                <input class="box w" type="text" name="roomno" placeholder="Room No" required="">
                <input class="box w" type="text" name="depdate" placeholder="Date" required="">
                <input class="box w" type="text" name="deptime" placeholder="Time" required="">
                <input class="box w" type="text" name="arrdate" placeholder="Date" required="">
                <input class="box w" type="text" name="arrtime" placeholder="Time" required="">
                <input class="box w" type="text" name="day" placeholder="No of days to stay" required="">
                <input class="box w" type="text" name="stph" placeholder="Your Phone" required="">
                <input class="box w" type="text" name="parph" placeholder="Parent Phone" required="">
                
            </center>
            <div class="addr">
                <span class="space1">
                    <script>
                        function addb(){
                                    if(document.getElementById("r").checked)
                                    {
                                        document.getElementById("fd").style.display="block";
                                        document.getElementById("mesg").style.display="none";
                                    }else{
                                        document.getElementById("fd").style.display="none";
                                        document.getElementById("mesg").style.display="inline";
                                        document.getElementById("mesg").innerHTML="Home Adress Taken";
                                    }
                                }
                        </script>
                <label class="addr1">Address</label>
                <input type="radio" name="other" id="b" onclick="addb()">home
                <input type="radio" name="other" id="r" onclick="addb()">other
                <span id="mesg" style="margin-left: 20px;"></span>

                </span>
            </div>
            <center>
                <div id="fd" style="display: none;">
                    <input type="text" class="box" name="otheradd-dno" id="h" style="margin-top: 10px;" placeholder="Door No">
                    <input type="text" class="box" name="otheradd-st" id="h" style="margin-top: 10px;" placeholder="Street">
                    <input type="text" class="box" name="otheradd-area" id="h" style="margin-top: 10px;" placeholder="Area">
                    <input type="text" class="box" name="otheradd-city" id="h" style="margin-top: 10px;" placeholder="City">
                    <input type="text" class="box" name="otheradd-district" id="h" style="margin-top: 10px;" placeholder="District">
                    <input type="text" class="box" name="otheradd-pin" id="h" style="margin-top: 10px;" placeholder="Pincode">
                    <input type="text" class="box" name="otheradd-state" id="h" style="margin-top: 10px;" placeholder="State">
                </div>
            </center>
                <input type="submit" value="Apply Outpazz">
                <p>Are the details right? <a href="#">Apply Outpazz</a></p>
            </form>
        </div>
        </div>

        <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
        </ul>
</div>
</div>
    <!--OVER OUTPS FORM-->         
       
</div>

</body>
</html>


