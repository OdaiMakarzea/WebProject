<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <title>SIGN IN</title>

</head>
<body>
  <?php
  session_start();
  if ( isset( $_SESSION['username'] ) )
  {
    header("Location:home.php");

  }
  ?>

 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 3rem;">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h2 style=" padding-bottom: 7px; text-align: center;">SIGN IN</h2>
            <form class="form-signin" action="logtodb.php" method="post">
              <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="User name" required autofocus>
              </div>
              <div class="form-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>
              <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="SIGN IN">
              <!--<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" >SIGN IN</button>-->
                  <br>
                  <h2 style=" text-align: center;" >Join FriendsBook today.</h2>
              <button  class="btn btn-lg btn-primary btn-block text-uppercase" type="button" onclick="location.href='reg.php'">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>