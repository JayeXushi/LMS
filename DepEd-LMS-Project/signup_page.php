<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>DepEd Management System</title>
        <?php require 'links.php'; ?>

        <?php include 'script.php'; ?>
  </head>
  <body>
  <div class="wrapper" id="wrapper">
        <!-- Hero Images, Navigation, Texts -->
            <section class="top">
                <?php include 'index-nav.php'; ?>
                <div class="row d-flex justify-content-between">
  </section>
  </div>
  </div>
  <div class="background">
  <center>
    <br>
    <section class="container1">
      <header>Registration Form</header>
      <form action="#" class="form">
        <div class="input-account-type">
        <label for="account-type">Account Type: </label>
          <select name="account-type" id="account-type">
            <option value="student">-Default-</option>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
          </select>
          </div>
          <br>

        <div class="input-box">
          <label>Username</label>
          <input type="text" placeholder="Enter Username" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Password</label>
            <input type="text" placeholder="Enter Password" required />
          </div>
          <div class="input-box">
            <label>Confirm Password</label>
            <input type="text" placeholder="Enter Confirm Password" required />
          </div>
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" required />
        </div>
        
        <div class="column">
          <div class="input-box">
            <label>Last Name</label>
            <input type="text" placeholder="Enter Last Name" required />
          </div>
          <div class="input-box">
            <label>First Name</label>
            <input type="text" placeholder="Enter First Name" required />
          </div>
        </div>
        
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>

        <div class="gender-box">
          <label>Gender</label>
          <br>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" required />
          <input type="text" placeholder="Enter street address line 2" required />
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
                <option>Nepal</option>
                <option>Etc.....</option>
              </select>
            </div>
            <input type="text" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter your region" required />
            <input type="number" placeholder="Enter postal code" required />
          </div>
        </div>
        <button>Submit</button>
      </form>
    </section>
    <br>
</center>
</div>
<?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
  </body>
</html>

