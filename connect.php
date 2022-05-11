<?php

$conn = mysqli_connect("localhost", "root", "", "web_project");

if (!$conn){
	die("Could not connect to database " . mysqli_connect_error());
}
?>