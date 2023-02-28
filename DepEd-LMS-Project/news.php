<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <style>
        #news-div-container{
            display: flex;
        }
        #news-div-container #left-newscontent{
            flex-basis: 80%;
        }
        #news-div-container #right-news-nav{
            flex-basis: 20%;
            width: 100%;
        }
        #news-div-container #right-news-nav iframe{
            height: 100%;
        }
        .news-rows{
            padding: 15px;
        }
        .news-rows .news-img{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        .news-rows .news-img img{
            width: 100%;
        }
        .news-rows .news-title{
            text-align: center;
            margin: 5px;
        }
        .news-rows .news-title a{
            color: #5f2af0;
            text-decoration: none;
        }
        .news-rows .news-content{
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            text-align: justify;
        }
    </style>
    <?php require 'links.php'; ?>

    <?php include 'script.php'; ?>
</head>
<body>
    <div class="wrapper" id="wrapper">
        <!-- Hero Images, Navigation, Texts -->
            <section class="top">
                <?php include 'index-nav.php'; ?>
            </section>
    <div id="news-container">
        <center>
            <h1 class="fw-bold">News and Updates<br></h1><br>
        </center>

        <section class="group-card"> 

        <div id="news-div-container">
            <div id="left-newscontent">
                <div class="news-rows">
                    <div class="news-img">
                        <img src="img/news-sample.jpg ">
                    </div>

                    <div class="news-title">
                        <br>
                            <a href=""><h2>Deped E-Taguyod into E-learning Website Project</h2></a>
                    </div>
                    <div class="news-content">
                        <p>&emsp;&emsp;&emsp;&emsp;In joint project with JCI Makati, Deped Filipino E-taguyod was into creating E-Learning or Learning Management System (LMS) for guiding teachers into teaching Filipino subject. Lorem ipsum dolor sit amet. Nam magnam quod qui excepturi molestiae ex quidem sint. Non Quis mollitia id iste exercitationem a laboriosam voluptatum in aliquid commodi! <a href="">Read More.</a></p>
                    </div>
                </div>
                <div class="news-rows">
                    <div class="news-img">
                        <img src="img/handshake.jpg ">
                    </div>

                    <div class="news-title">
                        <br>
                            <a href=""><h2>Deped E-taguyod Filipino Department and JCI Makati</h2></a>
                    </div>
                    <div class="news-content">
                        <p>&emsp;&emsp;&emsp;&emsp;JCI Makati and Deped E-taguyod join forces in building Learning Management System (LMS). Lorem ipsum dolor sit amet. Nam magnam quod qui excepturi molestiae ex quidem sint. Non Quis mollitia id iste exercitationem a laboriosam voluptatum in aliquid commodi! <a href="">Read More.</a></p>
                    </div>
                </div>
            </div>

            <div id="right-news-nav">
                <iframe src="news-right-nav.php"></iframe>
            </div>
        </div>
        </section> 
      
    <?php include 'footer.php'; ?>
</body>
</html>