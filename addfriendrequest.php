<?php

session_start();

if ( isset($_SESSION['username']) && !empty($_GET) )
{
	require 'connect.php';

	$receiver = $stripped = str_replace(' ', '',$_GET['username']);
	$sender = $_SESSION['username'];

	$query = "INSERT INTO friend_request (sender_username,receiver_username) VALUES ('$sender','$receiver')";

	if(mysqli_query($conn, $query))
	{
		header( "location:home.php" );
	}
	else
	{
		echo "Error: " .  "<br>" . mysqli_error($conn);
		header("refresh:.9;url= home.php");
	}
	
}


?>