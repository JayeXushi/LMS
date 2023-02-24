<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <?php require 'links.php'; ?>

    <?php include 'script.php'; ?>
  </head>
  <body>
    <div class="wrapper" id="wrapper">
      <!-- Hero Images, Navigation, Texts -->
          <section class="top">
              <?php include 'index-nav.php'; ?>
              <div style="background-color:#043e6c;">
  <div class="content" style="margin-top:0; padding:5vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-6" >
          <img src="img/signIn.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3 style="color:white;"><b>Sign In</b></h3>
              <div class="dropdown">
              <button style="height:6vh;" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Account Type:
              </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="#" style="color:black; text-decoration:none;">Student</a>
                   <a class="dropdown-item" href="#" style="color:black; text-decoration:none;">Teacher</a>
               </div>
              </div>             
            </div>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username">

              </div>
              <br>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
                
              </div>             
              <div class="d-flex mb-4 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption" style="color:white;">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass" style="color:white;">Forgot Password</a></span>
              </div>
              <div>
                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                <span class="d-block text-left my-4 text-muted" >&mdash; <b style="color:white;"> or Login with DepEd Account</b> &mdash;</span>
              </div>
              <div class="social-login">
                  <a href="#" class="google">
                  <span class="fa-brands fa-google"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>         
        </div>
      </div>
    </div>
  </div>
  </div>
   </section>
   <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
  </body>
</html>