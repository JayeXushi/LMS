<?php 
	//include 'database/connection/Connection.php';
	/*include 'Functions/Functions.php';

	if (isset($_POST['Submit'])) {
		insert_new_data();
	}*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			DepEd E-Learning Management
		</title>
		<style>
			body{
				background-color: lightgray;
			}
			input, select{
    			border: 3px solid lightgreen;
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
			#form-div{
				background-color: #030337;
			}
			#signup-title{
				background: #0E86C7;
				padding: 10px;
				color: white;
			}
			.flabel{
				font-size: 25px;
				font-weight: bold;

			}
			#form-background{
				background-color: white;
				width: 70%;
				margin-right: auto;
				margin-left: auto;
			}


		</style>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require 'links.php'; ?>
	</head>
	<body>
    <div class="wrapper" id="wrapper">
        <!-- Hero Images, Navigation, Texts -->
            <section class="top">
                <?php include 'index-nav.php'; ?>
            </section>
    </div>
	<center>
				<div id="form-div">
				<div id="form-background">
					<form class="center_form" action="" method="POST" id="new_user_from">
				<h2 id="signup-title"><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
				<br>
				
				<table cellpadding='10'>
					<strong>ENTER LOGIN DETAILS</strong>
					<tr>
						<td class="flabel">Enter Username  </td>
						<td><input type="text" name="username" required><br><br></td>
					</tr>
					<tr>
						<td class="flabel">Enter Password  </td>
						<td><input type="password" name="password" required><br><br></td>
					</tr>
					<tr>
						<td class="flabel">Confirm  Password  </td>
						<td><input type="password" name="confirmPassword" required><br><br></td>
					</tr>
					<tr>
						<td class="flabel">Enter Email </td>
						<td><input type="text" name="email" required><br><br></td>
					</tr>
					<tr>
						<td class="flabel">Select Category</td>
						<td><select name="type">
							<option value="1">Student</option>
							<option value="2">Teacher</option>
						</select><br><br></td>
					</tr>
				</table>
				<br>
				<table cellpadding='10'>
					<strong>PERSONAL DETAILS</strong>
					<tr>
						<td class="flabel">Enter Firstname  </td>
						<td ><input type="text" name="first_name" required><br><br></td>
					</tr>
					<tr>
						<td class="flabel">Enter Lastname  </td>
						<td><input type="text" name="last_name" required><br><br></td>
					</tr>
					<tr>
						<td class="flabel">Enter Phone Number</td>
						<td><input type="text" name="phone_no" required><br><br></td>
					</tr>
				</table>
				
				<br>
				<input type="submit" value="Submit" name="Submit">
				<br>
			</form>
		</div>
	</div>
	</center>
	<?php include 'footer.php'; ?>
		<?php include 'script.php'; ?>
	</body>
</html>