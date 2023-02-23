<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <?php require 'links.php'; ?>

    <?php include 'script.php'; ?>

    <style type="text/css">
        .card{
            margin: 5px; 
            text-align: justify;
            border: 3px solid #00CFE7 !important;
        }

        .card .a-bg{
            background-color: #B4B4B4;
            padding: 5px;
            border-radius: 25px;
        }

        .card a{
            text-decoration: none;
            color: white !important;
        }

        .card .a-bg:hover, .card a:hover{
            background-color: #00CFE7 !important;
            transition: .5s ;
            font-weight: bold;
        }

        #news-table{
            margin-right: 50px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <!-- Hero Images, Navigation, Texts -->
    <?php include 'index-nav.php'; ?>

    <div id="news-container">
        <center>
            <h1 class="fw-bold">News and Updates<br></h1>
        </center>
            
        <table id="news-table">
            <tr>
                <td>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="a-bg"><center><a href="" class="a-readmore">Read More...</a></center></div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                <td>
                <td>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="a-bg"><center><a href="" class="a-readmore">Read More...</a></center></div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                <td>
                <td>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="a-bg"><center><a href="" class="a-readmore">Read More...</a></center></div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                <td>
                <td>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="a-bg"><center><a href="" class="a-readmore">Read More...</a></center></div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                <td>    
            <tr>
            <tr>
                <td>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="a-bg"><center><a href="" class="a-readmore">Read More...</a></center></div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                <td>
                <td>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="a-bg"><center><a href="" class="a-readmore">Read More...</a></center></div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                <td>
                <td>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="a-bg"><center><a href="" class="a-readmore">Read More...</a></center></div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                <td>
                <td>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="a-bg"><center><a href="" class="a-readmore">Read More...</a></center></div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                <td>    
            <tr>
        </table>
    </div>
      
    <?php include 'footer.php'; ?>
</body>
</html>