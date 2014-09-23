﻿<?php
	/* 
	    Date: September 17, 2014
	    File: email.php
	    Author: Gabriel Hounsome
	    Website: myPortfolio
	    Description: This website is to showcase the projects and assignments that I have worked on
	*/
#Create and populate variables 
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$ok=true;
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo 'you did not enter a valid email address<br />';
	$ok=false;
}
if(empty($name))
{
	echo 'you must provide a name<br />';
	$ok=false;
}
if($ok)
{
		mail('200265074@student.georgianc.on.ca', 'Email from '.$name, $message, 'From: '.$email);
}
	header("Location: index.html");
?>