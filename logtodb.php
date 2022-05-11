<?php
session_start();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
    	require 'connect.php';

		// $username = $_POST['username'];
		// $password = $_POST['password'];
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);


    	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
		$result = mysqli_query($conn, $query);
		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['username']=$_POST['username'];
			header("location: home.php");
		}
		else
		{
			echo "Make sure you entered a correct username and password";
			header( "refresh:.9;url=log.php" );
		}
    }
}
else
{
	header("location: log.php");

}
?>
