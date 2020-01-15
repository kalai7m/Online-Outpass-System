<?php
session_start();
session_destroy();
if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
	
	$email=$_COOKIE['email'];
	$pass=$_COOKIE['pass'];
	setcookie('email',$email,time()-1);
	setcookie('pass',$pass,time()-1);
	header("location: ./login.php");
}
else{
	header("location: ./login.php");
}
if(isset($_COOKIE['rcemail']) and isset($_COOKIE['rcpass'])){
	$email=$_COOKIE['rcemail'];
	$pass=$_COOKIE['rcpass'];
	setcookie('rcemail',$email,time()-1);
	setcookie('rcpass',$pass,time()-1);
	header("location: ./login.php");
}
else{
	header("location: ./login.php");
}
?>