<?php

if ( ! empty( $_POST ) ){

require 'connect.php';

$genders = array("male", "female"); 
$gender = $_POST['gender'];

// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];

$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$lname = mysqli_real_escape_string($conn,$_POST['lname']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$query = "INSERT INTO users (fname, lname, gender, email, username, password) values ('$fname', '$lname','$genders[$gender]','$email','$username','$password')";

$result = mysqli_query($conn, $query);

if ($result){
	echo "user saved successfully";
	require 'logtodb.php';
	//header("refresh:.9;url= logtodb.php");
}
else{
	echo "Error " . mysqli_error($conn);
}

}
else{
	header( "location:reg.php" );

}

?>