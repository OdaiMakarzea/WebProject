<?php

session_start();

if ( isset($_SESSION['username']) && !empty($_GET) )
{
	require 'connect.php';
	$post_id = $_GET['id'];

	$query = "DELETE FROM posts WHERE id = '$post_id'";
	mysqli_query($conn, $query);

	if(mysqli_query($conn, $query))
	{
		header( "location:profile.php" );
	}
}
?>