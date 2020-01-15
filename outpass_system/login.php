<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/logindem.css">
    <script src="js/jq.js"></script>
    <script src="js/logindemjs.js"></script>
    <link rel="icon" type="ico/favicon" href="img/logo/hostel-black.ico">
    <title>Login</title>

</head>
<body>
    <nav class="main-nav">
        <ul>
            <li><a class="signin" href="#0">STUDENT</a></li>
            <li><a class="signup" href="#0">RC </a></li>
        </ul>
    </nav>
    
    <div class="user-modal">
            <div class="user-modal-container">
                <ul class="switcher">
                    <li><a href="#0">Student Login</a></li>
                    <li><a href="#0">RC Login</a></li>
                </ul>
    <!--STUDENT LOGIN-->
                <div id="login">
                    <form class="form" action="validate.php" method="post">
                        <p class="fieldset">
                            <label class="image-replace email" for="signin-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signin-email" type="email" name="email" placeholder="E-mail">
                            <!--<span class="error-message">An account with this email address does not exist!</span>-->
                        </p>
    
                        <p class="fieldset">
                            <label class="image-replace password" for="signin-password">Password</label>
                            <input class="full-width has-padding has-border" id="signin-password" type="password" name="pwd"  placeholder="Password">
                            <a href="#0" class="hide-password">Show</a>
                            <span class="error-message">Wrong password! Try again.</span>
                        </p>

    	     <p class="fieldset">

                                <img style="height:40px;width: 100%;" src="a.php" id="captcha_image" />                        
                                <input class="has-border full-width has-padding" style="margin-top: 5px;" type="text" name="code" placeholder="Captcha">
                                <center><p style="color: red;">
                                <?php
                                    if(isset($_SESSION['msg']))
                                    {
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
		                                session_destroy();
                                    }
                                
                                ?>
	             </p></center>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="remember-me" name="remember" checked>
                            <label for="remember-me">Remember me</label>
                        </p>
    
                        <p class="fieldset">
                            <input class="full-width" type="submit" name="login" value="Login">
                        </p>
                    </form>
<!--PHP-->
                    <?php
                        if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
                            $email=$_COOKIE['email'];
                            $pass=$_COOKIE['pass'];
                            echo "<script>document.getElementById('signin-email').value = '$email';
                            document.getElementById('signin-password').value = '$pass';</script>";
                        }
	                ?>
<!--OVER PHP-->

                    <p class="form-bottom-message"><a href="#0">Forgot your password?</a></p>
                    <!-- <a href="#0" class="close-form">Close</a> -->
                </div>
    <!--OVER STUDENT LOGIN-->

    <!--RC LOGIN-->
                <div id="signup">
                    <form class="form" action="b.php" method="post">
                     
    
                        <p class="fieldset">
                            <label class="image-replace email" for="rc-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="rc-email" type="email" name="email" placeholder="E-mail">
                            <span class="error-message">Enter a valid email address!</span>
                        </p>
    
                        <p class="fieldset">
                            <label class="image-replace password" for="rc-password">Password</label>
                            <input class="full-width has-padding has-border" id="rc-password" type="password"  name="pwd" placeholder="Password">
                            <a href="#0" class="hide-password">Show</a>
                            <span class="error-message">Your password has to be at least 6 characters long!</span>
                        </p>
                     
	    <p class="fieldset">

                                <img style="height:40px;width: 100%;" src="a.php" id="captcha_image" />                        
                                <input class="has-border full-width has-padding" style="margin-top: 5px;" type="text" name="code" placeholder="Captcha">
                                <center><p style="color: red;">
                                <?php
                                    if(isset($_SESSION['msg1']))
                                    {
                                        echo $_SESSION['msg1'];
                                        unset($_SESSION['msg1']);
		 session_destroy();
                                    }
                                
                                ?>
	             </p></center>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="remember-me" name="remember" checked>
                            <label for="remember-me">Remember me</label>
                        </p>
    
                        <p class="fieldset">
                            <input class="full-width" type="submit" name="rc" value="Login">
                        </p>
    
                    </form>
<!--PHP-->
                    <?php
                    if(isset($_COOKIE['rcemail']) and isset($_COOKIE['rcpass'])){
                        $email=$_COOKIE['rcemail'];
                        $pass=$_COOKIE['rcpass'];
                        echo "<script>document.getElementById('rc-email').value = '$email';
                        document.getElementById('rc-password').value = '$pass';</script>";
                    }
                    ?>
<!--OVER PHP-->
                    <p class="form-bottom-message1"><a href="#0">Forgot your password?</a></p>
                    <!-- <a href="#0" class="cd-close-form">Close</a> -->
                </div>
	
    <!--OVER RC LOGIN-->
                <div id="reset-password">
                    <p class="form-message">Lost your password? Please enter your email address.</br> You will receive a link to create a new password.</p>
    
                    <form class="form">
                        <p class="fieldset">
                            <label class="image-replace email" for="reset-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                            <span class="error-message">An account with this email does not exist!</span>
                        </p>
    
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Reset password">
                        </p>
                    </form>
    
                    <p class="form-bottom-message"><a href="#0">Back to log-in</a></p>
                </div>
                <a href="#0" class="close-form">Close</a>
            </div>
        </div>
</body>
</html>