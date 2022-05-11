<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <title>REGISTER</title>
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
            <h2 style=" padding-bottom: 7px; text-align: center;">Register</h2>

            <form class="form-signin" action="adduser.php" method="post">
              
              <div class="row">
                <div class="col form-group">
                  <input name="fname"  type="text" class="form-control" placeholder="First name" required autofocus>
                </div>

              <div class="col form-group">                
                  <input name="lname" type="text"  class="form-control" placeholder="Last name" required >
                </div>
              </div>

              <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="User name" required autofocus>
              </div>

              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Email address" required>
              </div>

              <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" required>
              </div>

              <div class="form-group" >
                <select name="gender" style="border-radius: 2rem; outline: none; padding-left: 5px" class="mdb-select md-form colorful-select dropdown-primary">
                  <option style="padding-left: 10px;"value="0">Male</option>
                  <option value="1">Female</option>
                </select>
              </div>
             
              <button  class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
            </form>
              <div style="padding-top: 2rem" class="text-center">Already have an account? <a href="log.php">Sign in</a></div>

          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>