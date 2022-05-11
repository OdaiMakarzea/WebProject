<?php

session_start();

if ( isset($_SESSION['username']) && !empty($_GET) )
{
	require 'connect.php';

	$friend = $stripped = str_replace(' ', '',$_GET['username']);
	$my = $_SESSION['username'];

	$query = "DELETE FROM friend_request WHERE receiver_username = '$my' AND sender_username='$friend'";

	if(mysqli_query($conn, $query))
	{
		header('Location: ' . $_SERVER['HTTP_REFERER']);

		// header( "location:home.php" );
	}
	else
	{
		echo "Error: " .  "<br>" . mysqli_error($conn);
		header("refresh:.9;url= home.php");
	}
	
}


?>