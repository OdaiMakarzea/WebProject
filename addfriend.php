<?php

session_start();

if ( isset($_SESSION['username']) && !empty($_GET) )
{
	require 'connect.php';

	$friend = $stripped = str_replace(' ', '',$_GET['username']);
	$my = $_SESSION['username'];

	$query = "INSERT INTO friendship (my_username,friend_username) VALUES ('$my','$friend'),('$friend','$my')";
	mysqli_query($conn, $query);
	$query2 = "DELETE FROM friend_request WHERE receiver_username = '$my' AND sender_username='$friend'";

	if(mysqli_query($conn, $query2))
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