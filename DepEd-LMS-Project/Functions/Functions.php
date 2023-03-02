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

	function insert_new_video(){
		include 'database/connection/Connection.php';

		$video_name = $_FILES['my_video']['name'];
        $tmp_name = $_FILES['my_video']['tmp_name'];
        $error = $_FILES['my_video']['error'];

        if ($error === 0) {
            $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

            $video_ex_lc = strtolower($video_ex);

            $allowed_exs = array("mp4", 'webm', 'avi', 'flv');

            if(in_array($video_ex_lc, $allowed_exs)){
                
                $new_video_name = uniqid("video-", true).'.'.$video_ex_lc;
                $video_upload_path = 'video_uploads/'.$new_video_name;
                move_uploaded_file($tmp_name, $video_upload_path);

                $query = "INSERT INTO video_upload(Video_ID, Video_Title, Video_Description, Video_Author) VALUES ('".$new_video_name."', '".$_POST['Video_Title']."', '".$_POST['Video_Description']."', '".$_POST['Video_Author']."')";

                if(mysqli_query($conn, $query)){
                	echo '<script type="text/javascript">';
					echo 'alert("Video Successfully Added")';
					echo '</script>';
                }else{
                	echo '<script type="text/javascript">';
					echo 'alert("Something Went Wrong")';
					echo '</script>';
                }

            }else{
                $em = "You Can't Upload Files Of This Type";
                header("location:admin_upload_video.php?error=".$em."");
            }

        }
	}

	function show_uploaded_video(){
		include 'database/connection/Connection.php';

		$query = "SELECT * FROM video_upload";
		$result = mysqli_query($conn, $query);
		$num_rows = mysqli_num_rows($result);

		if ($num_rows >= 1) {
			
					echo "<h2>Videos Uploaded</h2>";
			
			
			echo "<tr>";
				echo "<th>";
					echo "No.";
				echo "</th>";
				echo "<th>";
					echo "Video ID";
				echo "</th>";
				echo "<th>";
					echo "Video Title";
				echo "</th>";
				echo "<th>";
					echo "Video Author";
				echo "</th>";
				echo "<th>";
					echo "Video Description";
				echo "</th>";
				echo "<th colspan=2>";
					echo "Action";
				echo "</th>";
			echo "</tr>";

			for ($i=0; $i < $num_rows; $i++){
				$row = mysqli_fetch_assoc($result);
				$no = $i + 1;
				echo '<tr>';
							echo '<td>'.$no.'</td>';
							echo '<td>'.$row['Video_ID'].'</td>';
							echo '<td>'.$row['Video_Title'].'</td>';
							echo '<td>'.$row['Video_Author'].'</td>';
							echo '<td>'.$row['Video_Description'].'</td>';
							echo '<td> <a href = "">Edit</a></td>';
							echo '<td> <a href = "">Delete</a></td>';
				echo '</tr>';
			}
		}else{
			echo "<h2>No Videos Uploaded</h2>";
		}
	}
?>