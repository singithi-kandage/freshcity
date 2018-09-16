<?php

	$username = "";
	$password= "";
	$output ="";
	
	if(!empty($_POST['username']))
	{
		$username = $_POST['username'];
	}
	if(!empty($_POST['password']))
	{
		$password = $_POST['password'];
	}
	
	
	if($username = "admin"&& $password == "admin1234")
	{
		$output = "works";
	}
	
	header('location: ../sign-in.html');

?>