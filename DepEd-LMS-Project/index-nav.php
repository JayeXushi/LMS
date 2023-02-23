<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bureau of Learning Delivery- Teaching and Learning Division</title>
    <?php require 'links.php'; ?>

</head>
<body>
    <div class="my-nav w-100 scroll-active position-relative" id="nav">
        <div class="container d-flex flex-wrap py-2 justify-content-between align-items-center  ">
      
          <div class="d-xl-flex align-items-center d-none">
            <a href="index.php" class="mb-md-0 text-decoration-none text-black d-none d-xl-flex">
              <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> -->
              <img style="height:100px; width:200px;" src="img/deped.png" class="d-block" alt="...">
            </a>
            <h1 style="color:darkblue; margin-left:2vh; margin-top:2vh; font-size:4vh; font-weight:bold;">Bureau of Learning Delivery- Teaching and Learning Division</h1>
            <form class="mb-md-0 d-none d-xl-flex" role="search">
          </form>
          </div>
      
          <div class="d-xl-none d-flex">
            <a href="index.php" class="mb-md-0 text-decoration-none text-white ">
              <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> -->
            </a>
          </div>
      
          <div>
            <ul class="nav nav-pills">
              <li class="nav-item d-none d-xl-flex"><a class="nav-link" href="index.php"><i class="fa-solid fa-earth-americas pe-2"></i>Home</a></li>
              <li class="nav-item d-none d-xl-flex"><a class="nav-link" href=".php"><i class="fa-solid fa-book-open pe-2"></i>Courses</a></li>
              <li class="nav-item d-none d-xl-flex"><a class="nav-link" href="news.php"><i class="fa-solid fa-microphone pe-2"></i>News</a></li>
              <li class="nav-item d-none d-xl-flex"><a class="nav-link" href="signin_page.php"><i class="fa-solid fa-pen pe-2"></i>Sign In</a></li>
              <li class="nav-item d-none d-xl-flex"><a class="nav-link" href="signup_page.php"><i class="fa-solid fa-pen-to-square pe-2"></i>Sign Up</a></li>
              <li class="nav-item d-none d-xl-flex"><a class="nav-link" href="about.php"><i class="fa-sharp fa-solid fa-people-group pe-2"></i>About us</a>
            </ul>
          </div>
          <button class="d-xl-none d-sm-flex align-items-center">
            <svg class="menu" width="10vh" height="6vh" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 32H0V26.6667H24V32ZM48 18.6667H0V13.3333H48V18.6667ZM48 5.33333H24V0H48V5.33333Z" fill="black"/></svg>
          </button>
        </div>
      </div>
      <?php include 'script.php'; ?>
</body>
</html>