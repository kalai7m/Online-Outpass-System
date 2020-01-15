<?php
	echo "hello";
	session_start();
	$myemail = "dhoni@gmail.com";
	$mypass = "dhoni";
	if(isset($_POST['rc']))
	{
		$code = $_POST['code'];
		
			$email=$_POST['email'];
			$pass=$_POST['pwd'];
			if($email == $myemail && $pass == $mypass)
			{
				if($code == $_SESSION['captcha_code'])
				{
				if(isset($_POST['remember'])){
				setcookie('rcemail', $email, time()+60*60*7);/*valid for 7 days*/
				setcookie('rcpass', $pass, time()+60*60*7);
				}
				
				session_start();
				$_SESSION['email'] = $email;
				$sec= 5 + time();
				setcookie(logincook,date("F jS - g:i a"),$sec);
				header("location: admin_rc/dashrcm.php");
			}else{
				header("location: ./login.php");
				$_SESSION['msg1']="invalid captcha";
			}			
		}else{
		
			$_SESSION['msg1']="Email or pass is invalid";
				header("location: ./login.php");
		}		
	}else{
		header("location: ./login.php");
	}
?>