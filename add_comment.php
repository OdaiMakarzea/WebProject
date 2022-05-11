<?php
	session_start();
	$user=$_SESSION['username'];
	$post_id=$_GET['post_id'];
	echo $post_id.$user;
?>