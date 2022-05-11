<?php
   // echo '<script>console.log("Your stuff here")</script>';

   session_start();
   if(isset($_POST['text'],$_POST['post_id'],$_SESSION['username']))
   {
   require 'connect.php';

   $user = $_SESSION['username'];
   $text = htmlspecialchars($_POST['text']);
   $post_id = $_POST['post_id'];

   $query = "INSERT INTO comments (post_id,comment_username,text) VALUES ($post_id,'$user','$text')";
   mysqli_query($conn, $query);
   // print_r($_POST);
   // print_r($user);
   }

// header('Location: ' . $_SERVER['HTTP_REFERER']);

?>