<?php 
	include '../Functions/Functions.php';
	include '../Server/Connection/Connection.php';

		if (isset($_POST['Submit'])) {
			insert_new_data();
		}
?>
<html>
	<head>
		<title>
			DepEd E-Learning Management
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
    			margin: 0px 135px
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
		<form class="center_form" action="" method="POST" id="new_user_from">
			<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
			<br>
			<table cellpadding='10'>
				<strong>ENTER LOGIN DETAILS</strong>
				<tr>
					<td>Enter a username  </td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your  password  </td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
                <tr>
					<td>Enter confirmed  password  </td>
					<td><input type="password" name="confirmPassword" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your Email ID</td>
					<td><input type="text" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10'>
				<strong>PERSONAL DETAILS</strong>
				<tr>
					<td>Enter your first name  </td>
					<td><input type="text" name="first_name" required><br><br></td>
				</tr>
                <tr>
					<td>Enter your last name  </td>
					<td><input type="text" name="last_name" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your phone number</td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
			<br>
		</form>
	</body>
</html>