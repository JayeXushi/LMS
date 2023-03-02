<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mga Kurso</title>
    <?php require 'links.php'; ?>

    <?php include 'script.php'; ?>
</head>
<body>
    <div class="wrapper" id="wrapper">
        <!-- Hero Images, Navigation, Texts -->
            <section class="top">
                <?php include 'index-nav.php'; ?>
            </section>
        <section>
            <div class="container pt-2">
                <hr>
                <h3>Mga Kurso</h3>
                <p class="text-muted">Ikaw ay Isang?</p>

                <div class="row row-cols-1 row-cols-md-2 g-2 mt-2">

                    <div class="col">
                    <div class="card">
                        <img src="img/student.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title"></h3>
                        <div class="rating mb-2">
                            <span class="rating-number">Estudyante</span>
                            <span class="star-rating">
                           <i><a href="cont-courses.php"><button type="button" class="mt-1 font-500">Piliin</button></a></i></span>
                            <span class="rating-count"></span>
                        </div>
                        <p class="card-text text-muted"></p>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <img src="img/teacher.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title"></h3>
                        <div class="rating mb-2">
                            <span class="rating-number">Guro</span>
                            <span class="star-rating">
                            <i><a href="cont-courses.php"><button type="button" class="mt-1 font-500">Piliin</button></a></i></span>
                            <span class="rating-count"></span>
                        </div>
                        <p class="card-text text-muted"></p>
                        </div>
                    </div>
                    </div>
        </section>
        <?php include 'footer.php'; ?>
</body>
</html>