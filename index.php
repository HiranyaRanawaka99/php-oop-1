<?php 

require __DIR__ .'/data/movie_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Film base</title>
</head>
<body>
    <div class="container">
    <h1 class="text-danger">FILM BASE</h1>
        <div class="row">
            <div class="col">
            <?php foreach($movies_list as $movie): ?>
            <div class="card mt-2">
                <div class="card-body">
                    <p> 
                        <?= $movie->get_details()?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?> 
        </div>
    </div>  

    <h1 class="text-danger mt-5">SERIES BASE</h1>
        <div class="row">
            <div class="col">
            <?php foreach($series_list as $serie): ?>
            <div class="card mt-2">
                <div class="card-body">
                    <p> 
                        <?= $serie->get_details()?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?> 
        </div>
    </div>  
</body>
</html>