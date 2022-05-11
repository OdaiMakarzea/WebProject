<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>

<style >
    
body{
    margin-top:70px;
    background:#eee;
}
.card {
    background-color: #fff;
    border: 0 solid #eee;
    border-radius: 0;
}
.card {
    margin-bottom: 30px;
    -webkit-box-shadow: 2px 2px 2px rgba(0,0,0,0.1), -1px 0 2px rgba(0,0,0,0.05);
    box-shadow: 2px 2px 2px rgba(0,0,0,0.1), -1px 0 2px rgba(0,0,0,0.05);
}

.card-profile .card-header {
    height: 9rem;
    background-size: cover;
    background-position: center center
}

.card-profile-img {
    max-width: 8rem;
    margin-top: -6rem;
    margin-bottom: 1rem;
    border: 3px solid #fff;
    border-radius: 100%
}

.avatar {
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
    border-radius: 50%;
    display: inline-block;
    background: #ced4da no-repeat center/cover;
    position: relative;
    text-align: center;
    color: #868e96;
    font-weight: 600;
    vertical-align: bottom
}

.avatar.avatar-md {
    width: 3rem;
    height: 3rem
}

.avatar.avatar-lg {
    width: 4rem;
    height: 4rem
}

.avatar.avatar-xl {
    width: 5rem;
    height: 5rem
}

.avatar.avatar-xxl {
    width: 7rem;
    height: 7rem;
    min-width: 7rem
}

.card-header:first-child {
    border-radius: 0 0 0 0;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: 1rem 1.25rem;
    background-color: #fff;
    border-bottom: 1px solid #eee;
}
.card-header {
    -webkit-box-shadow: 2px 2px 2px rgba(0,0,0,0.05);
    box-shadow: 2px 2px 2px rgba(0,0,0,0.05);
}
  .comment{
    margin-left: 90px;
    margin-right: 15px;
  }
</style>
<body>
    <?php
  session_start();
  if ( !isset( $_SESSION['username'] ) )
  {
    header("Location:log.php");
  }

  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background:linear-gradient(to right, #8b7cef, #fdcbd5)">
    <a class="navbar-brand" href="home.php">FriendsBook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
      </ul>
    </div>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Notifications
          </a>
          <div class="dropdown-menu dropdown-menu-right" style="width:400px " aria-labelledby="navbarDropdown">
            <p style="margin-left: 10px">Friend request</p>
          <div id="freq">
          <?php
          require 'connect.php';
          $user=$_SESSION['username'];
          $query = "SELECT fname, lname,username FROM users WHERE username IN (SELECT sender_username FROM friend_request WHERE receiver_username='$user')";

          $result = mysqli_query($conn, $query);
          if(mysqli_num_rows($result)==0)
            { 
              echo "<p style='margin-left:10px''>You have no friend requests :c</p>";
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
            <a href="addfriend.php?username= <?php echo$row['username'];?>" class="btn btn-dark" >Add</a>
            <a href="deletefriendrequest.php?username= <?php echo$row['username'];?>" class="btn btn-dark">Delete</a>
          </div>
        </div>

        <?php
          }
        ?>
        </div>
        </div>
      </li>
    </ul>
  </nav>

<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="card card-profile">
<div style="background:linear-gradient(to right, #8b7cef, #fdcbd5);" class="card-header"></div>
<div class="card-body text-center"><img src="pics/default-profile.jpg" class="card-profile-img">

  <?php

    require 'connect.php';
    $user=$_SESSION['username'];
    $query = "SELECT fname,lname,gender, email FROM users WHERE username='$user'";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    echo "<h3 class='mb-3'>".$row['fname']." ".$row['lname']."</h3>";
    echo "<p class='mb-4'> " .$row['email']." </p>";
    echo "<p class='mb-4'> " .$row['gender']." </p>";
  ?>
</div>
</div>
  <p> <b> My Friends</b></p>
    <div id="myfrinds">
        <?php
          require 'connect.php';
          $user=$_SESSION['username'];
          //when user is logged in change the username value to "$username"
          $query = "SELECT fname, lname, username FROM users WHERE username IN (SELECT friend_username FROM friendship WHERE my_username='$user')";

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
      </div>
</div>
<div class="col-lg-8">
<div class="card">
<div class="card-header">
  <div class="input-group">
    <div class="input-group-append">
      <a href="postform.php" class="btn text-white btn-primary">Add post</a>        
    </div>
  </div>
</div>
<div class="list-group card-list-group" id="posts" >
            <?php
                  require 'connect.php';
                  $user=$_SESSION['username'];
                  $query = "SELECT p.id, p.username, p.date_posted, p.text, p.pic, u.fname, u.lname FROM posts p INNER JOIN users u ON p.username=u.username WHERE p.username='$user' order by date_posted DESC";

                  $result = mysqli_query($conn, $query);
                  if(mysqli_num_rows($result)==0)
                    { 
                      echo "<p style='margin-left:10px''>You have no posts :c</p>";
                    }
                  while($row = mysqli_fetch_assoc($result))
                  {
                    ?>

            <div class="card">
              <div class="card-body">
                  <div class="container py-3">
                    <div class="card">
                      <div class="row ">
                     
                    <?php
                      
                        echo "<div class='col-md-4'>";
                        if(!empty($row['pic']))
                      {
                        echo "<img src='".$row['pic']."' class='w-100'>";
                      }
                        echo "<p class='text-secondary text-center' style='margin-top: 10px; margin-bottom: 5px'>".$row['date_posted']."</p>";
                        echo "</div>";
                      
                      
                    ?>

                      <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                          <?php
                          echo "<h4 class='card-title'>"."<a href='others_profile.php?username=".$row['username']."'>".$row['fname']." ".$row['lname']."</a>"."</h4>"; 
                          echo "<p class='card-text'>".$row['text']."</p>";
                          ?>
                        </div>
                      </div>
                    </div>
                   </div>
                </div>
                <?php
                    $post_id=$row['id'];
                    $query1 = "SELECT c.comment_username, c.text ,u.fname,u.lname from comments c INNER JOIN users u on  c.comment_username= u.username WHERE post_id=$post_id";

                    $result1 = mysqli_query($conn, $query1);         
                     while($row1 = mysqli_fetch_assoc($result1))
                  {      
                  ?>
                  <div class="card card-inner comment">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                  <?php
                                    echo "<p><strong>"."<a href='others_profile.php?username=".$row1['comment_username']."'>".$row1['fname']." ".$row1['lname']."</a>"."</strong></p>";
                                    
                                  ?>
                               
                                </div>
                            </div>
                        </div>
                  </div>
                  <?php
                    }
                  ?> 

                    <div class="input-group mb-3 mt-3">

                      <form action="comment_from.php" method="post" class="ajax form-inline ml-auto" >

                        <div class="form-group mx-sm-3 mb-2 ">

                          <input class="form-control" style="width: 500px" type="text" name="text" id="newcomment" placeholder="Write a comment"  aria-describedby="basic-addon2" required>

                          <input type="hidden" name="post_id" value="<?php echo($post_id)?>">

                        </div>
                         <input type="submit" value="Add comment" class="btn btn-primary mb-2 btn-outline-secondary comment_btn">

                      </form>
                    </div>

                  <div>  
                    <p id="newlikes">
                      <?php 

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
                            <a href="editpostform.php?id= <?php echo$row['id'];?>" class="float-left btn text-white btn-primary ml-2">Edit</a>
                            <a href="deletepost.php?id= <?php echo$row['id'];?>" class="float-left btn text-white btn-primary ml-2">Delete</a>
                          <?php
                        }
                        else
                        {
                        ?>
                        <a id='like' value="<?php echo $post_id;?>" class="float-left btn text-white btn-danger" onclick="like(this)"><?php echo $row2['likes'];?> likes</a>

                        <a href="editpostform.php?id= <?php echo$row['id'];?>" class="float-left btn text-white btn-primary ml-2">Edit</a>
                        <a href="deletepost.php?id= <?php echo$row['id'];?>" class="float-left btn text-white btn-primary ml-2">Delete</a>

                        <?php
                          }
                        ?>

                    </p>
                  </div>   

        <!--           <div>  
                    <p>
                      <a class="float-left btn text-white btn-primary" onclick="like.call(this)">Like</a>
                      <a href="editpostform.php?id= <?php echo$row['id'];?>" class="float-left btn text-white btn-primary ml-2">Edit</a>
                      <a href="deletepost.php?id= <?php echo$row['id'];?>" class="float-left btn text-white btn-primary ml-2">Delete</a>
                    </p>
                  </div>  -->

           </div>   
        </div>
        <?php
          }              
        ?>

</div>
</div>
</div>
</div>
</div>

</body>
</html>

<script>
// load-comments & posts
setInterval(function() {
  $(document).ready(function(){
        $("#posts").load("load-profilecomments.php");
  });
}, 8000);
</script>

<script>
//load friends requests 
setInterval(function() {
  $(document).ready(function(){
        $("#freq").load("load-freq.php");
  });
}, 30000);
</script>

<script>
//load friends requests 
setInterval(function() {
  $(document).ready(function(){
        $("#myfrinds").load("load-myfrinds.php");
  });
}, 30000);
</script>

<script>
  //submit comment
  $('form.ajax').on('submit',function(){
    var that = $(this),
        url = that.attr('action'), 
        type = that.attr('method'),
        data = {};

    that.find('[name]').each(function(index, value){
      var that = $(this),
          name = that.attr('name'),
          value = that.val();

      data[name] = value;
    });
    $.ajax({
        url: url,
        type: type,
        data: data,
        success: function(response){
          console.log(response);
           $(document).ready(function(){
      $("#posts").load("load-profilecomments.php");
    });
        }
    });
   
    return false;
  });
</script>

<script>
  //add/delete likes
function like(el) {
  if ($(el).hasClass('btn-primary'))
  {
    like.staticVar=$(el).attr('value');
    $.ajax(
    {
       url: "add_like.php?id="+like.staticVar,
       success: function(data){
        $("#posts").load("load-profilecomments.php");
        console.log("success");
       }
    });
  }
  else
  {
    like.staticVar=$(el).attr('value');
    $.ajax(
    {
       url: "delete_like.php?id="+like.staticVar,
       success: function(data){
        $("#posts").load("load-profilecomments.php");
        console.log("success");
       }
   });
  }
};
</script>