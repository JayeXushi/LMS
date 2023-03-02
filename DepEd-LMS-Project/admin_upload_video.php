<?php 
    include 'Functions/Functions.php';

    if (isset($_GET['error'])) {
                echo '<script type="text/javascript">';
                echo 'alert("invalid video type")';
                echo '</script>';
    }

    if (isset($_FILES['my_video']) && isset($_POST['submits'])) {

            insert_new_video();

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
        #add_vid_container, #show_uploaded_video{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            padding: 50px;
        }
        #video_table{
            text-align: center;
            border: 3px solid black;
            border-collapse: collapse;
        }
        #video_table th{
            padding: 10px;
        }
        #video_table td{
            padding: 10px;
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
                <input type="text" name="Video_Title" required=""><br>
                <label>Video Author: </label><br>
                <input type="text" name="Video_Author" required=""><br>
                <label>Video Description: </label><br>
                <textarea name="Video_Description" required=""></textarea><br>
                <label>Select Video File: </label><br>
                <input type="file" name="my_video" required=""><br><br>
                <center>
                <input type="submit" name="submits" value="Upload">
                </center>
            </form>
        </div>
        <div id="show_uploaded_video">
            <center><table id="video_table">
                <?php 
                show_uploaded_video();
                ?>
            </table></center>
        </div>
    </div>
</body>
</html>