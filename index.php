<?php 

require_once __DIR__. '/Models/Movie.php';
require_once __DIR__ . '/Models/Genere.php';
require __DIR__ .'/data/moive_db.php';

// $new_movies = [];
// $new_genres = [];

// foreach($movies_data as $movie_data) {

//     foreach($movie_data['genres'] as $genre) {
//         $new_genres [] = new Genre($genre);
//     }


//     $new_movies[] = new Movie($movie_data['title'], $movie_data['genres'], $movie_data['length']);
// }

// var_dump($new_movies);

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
            <?php foreach($movies_data as $movie_data): ?>
            <div class="card mt-2">
                <div class="card-body">
                    <h2><?= $movie_data['title']?> </h2>
                    
                    <p><b>Genere: </b> <?= implode(' - ', $movie_data ['genres'])?> </p>
                   
                    <p> <b>Durata: </b><?= $movie_data['length']?></p>
                </div>
            </div>
            <?php endforeach; ?> 
            </div>
        </div>  
</body>
</html>