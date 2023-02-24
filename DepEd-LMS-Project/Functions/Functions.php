<?php 
	function insert_new_data(){
		include 'database/connection/Connection.php';
		$uid = uniqid();

		$query = "INSERT INTO personal_info (User_ID, Firstname, Lastname, Phone_Number) VALUES ('".$uid."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['phone_no']."')";

		if(mysqli_query($conn, $query)){


			$query = "INSERT INTO login_info (User_ID, Username, Password, Email, User_type) VALUES ('".$uid."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['type']."')";

			if(mysqli_query($conn, $query)){	

				echo '<script type="text/javascript">';
				echo 'alert("Successfully Signed Up")';
				echo '</script>';

			}

		}else{
			echo '<script type="text/javascript">';
			echo 'alert("Something Went Wrong")';
			echo '</script>';
		}
	
	}
?>