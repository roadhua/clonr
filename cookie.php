<?php  
if ($_COOKIE['userName']) {
	$cookie = $_COOKIE['userName'];
	$email = $_COOKIE['Email'];
	echo $cookie;
	echo $email;
}