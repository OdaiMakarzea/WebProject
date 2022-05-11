<?php
session_start();

if ( isset($_SESSION['username']) && !empty($_GET) )
{
	require 'connect.php';

	$post_id = $stripped = str_replace(' ', '',$_GET['id']);
	$username = $_SESSION['username'];

	$query = "INSERT INTO likes (post_id,username) VALUES ($post_id,'$username')";

	mysqli_query($conn, $query);
}
?>