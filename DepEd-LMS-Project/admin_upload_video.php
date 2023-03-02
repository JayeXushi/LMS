<?php 
    if (isset($_GET['error'])) {
                echo '<script type="text/javascript">';
                echo 'alert("invalid video type")';
                echo '</script>';
    }

    if (isset($_FILES['my_video']) && isset($_POST['submits'])) {

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

            }else{
                $em = "You Can't Upload Files Of This Type";
                header("location:admin_upload_video.php?error=".$em."");
            }

        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>

    <style type="text/css">
        #add_vid_form_background{
            background-color: #043e6c;
            padding: 50px;
        }
        #add_vid_container{
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            padding: 50px;
        }
    </style>
</head>

<body>
    <div class="wrapper" id="wrapper">
        <!-- Hero Images, Navigation, Texts -->
            <section class="top">
                <?php include 'admin-nav.php'; ?>
            </section>
    </div>

    <div id="add_vid_form_background">
        <div id="add_vid_container">
            <form action="" method="post" enctype="multipart/form-data">

                <label>Video Title: </label><br>
                <input type="text" name="Video_Title"><br>
                <label>Video Author: </label><br>
                <input type="text" name="Video_Author"><br>
                <label>Video Description: </label><br>
                <textarea name="Video_Description"></textarea><br>
                <label>Select Video File: </label><br>
                <input type="file" name="my_video"><br><br>
                <center>
                <input type="submit" name="submits" value="Upload">
                </center>
            </form>
        </div>
    </div>
</body>
</html>