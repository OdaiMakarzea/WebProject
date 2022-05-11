 <?php 
session_start();
$user=$_SESSION['username'];
require 'connect.php';
$post_id= $_GET['id'];

$query2 = "SELECT count(*) AS likes FROM likes l where l.post_id = $post_id";
$result2 = mysqli_query($conn, $query2);         
$row2 = mysqli_fetch_assoc($result2);
                      

$query3 = "SELECT l.username as liked FROM likes l WHERE l.username = '$user' AND l.post_id= $post_id";
$result3 = mysqli_query($conn, $query3);         
$row3 = mysqli_fetch_assoc($result3);

if (!isset($row3['liked'])) 
{
  ?>
    <a id='like' value="<?php echo $post_id;?>" class="float-left btn text-white btn-primary" onclick="like(this)"><?php echo $row2['likes'];?> likes</a>
  <?php
}
else
{
?>
 <a id='like' value="<?php echo $post_id;?>" class="float-left btn text-white btn-danger" onclick="like(this)"><?php echo $row2['likes'];?> likes</a>

<?php
  }
?>