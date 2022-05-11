<?php
session_start();

if ( isset($_SESSION['username']) && !empty($_GET) )
{
	require 'connect.php';

	$post_id = $stripped = str_replace(' ', '',$_GET['id']);
	$username = $_SESSION['username'];

	$query = "DELETE FROM likes WHERE post_id= $post_id and username='$username'";
	mysqli_query($conn, $query);

}

?>