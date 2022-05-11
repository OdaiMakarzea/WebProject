 <?php
   session_start();
  require 'connect.php';
  $user=$_SESSION['username'];
  $query = "SELECT fname, lname,username FROM users WHERE username IN (SELECT friend_username FROM friendship WHERE my_username='$user')";

  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)==0)
    { 
      echo "You have no friends :c";
    }
  while($row = mysqli_fetch_assoc($result))
  { ?>

<div class="d-flex flex-row border rounded" style="margin-top: 20px" >
  <div class="p-0 w-25">
    <img src="pics/default-profile.jpg" class="img-thumbnail border-0" />  
  </div>

  <div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
    <?php
      echo "<h4 class='card-title'>"."<a href='others_profile.php?username=".$row['username']."'>".$row['fname']." ".$row['lname']."</a>"."</h4>"; 
    ?>
  </div>
</div>

<?php
  }
?>