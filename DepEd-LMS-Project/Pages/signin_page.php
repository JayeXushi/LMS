<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
        <center>
        <h1>DepEd Learning Management System</h1>
        <h4>by JCI Makati</h4>
        <h2>Region: NCR-Manila</h2>
        <a href="index.html">Home</a> 
     <a href="mission.html">Mission</a>
     <a href="vision.html">Vision</a>
     <a href="news.html">News</a> 
     <a href="contactUs.html">Contact us</a>
     <a href="aboutUs.html">About Us</a>
     <a href="signin_page.php"> Sign in</a>
     <a href="signup_page.php"> Sign up</a>
		<br>
		<br>
		<br>
        </center>
		<form class="float_form" style="padding-left: 20px" action="login_handler.php" method="POST">
			<fieldset>
				<legend>Login Details:-</legend>
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>Password:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong>User Type:</strong><br>
				Student <input type='radio' name='user_type' value='student' checked/> Teacher <input type='radio' name='user_type' value='teacher'/>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Login">
			</fieldset>
			<br>
			<a href="signup_page.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
		</form>
	</body>
</html>