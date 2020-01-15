<?php
	session_start();
	$myemail = "dhoni1234@gmail.com";
	$mypass = "dhoni";
	if(isset($_POST['login']))
	{
		
		$code = $_POST['code'];
		if($code == $_SESSION['captcha_code'])
		{
			$email=$_POST['email'];
			$pass=$_POST['pwd'];
			if($email == $myemail && $pass == $mypass)
			{
				session_start();
					$_SESSION['email'] = $email;
					$sec= 5 + time();
					setcookie(logincook,date("F jS - g:i a"),$sec);
					header("location: student/dash.php");
				if(isset($_POST['remember'])){
					setcookie('email', $email, time()+60*60*7);/*valid for 7 days*/
					setcookie('pass', $pass, time()+60*60*7);
				}
					
					
			}else{
				$_SESSION['msg1']="Email or pass is invalid";
				header("location: ./login.php");
			}
		}else{			
			header("location: ./login.php");
			$_SESSION['msg']="invalid captcha";
		}
	}
	else{
		header("location: login.php");
	}
?>