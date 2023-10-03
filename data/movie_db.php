<?php

require __DIR__ . '/../Models/Production.php';
require __DIR__ . '/../Models/Genere.php';
require __DIR__ . '/../Models/Movie.php';
require __DIR__ . '/../Models/SeriesTv.php';

// GENERI SERIE
$naruto_shippuden_genre = ['Anime', 'Azione', 'Avventura'];
$mr_sunshine_genre = ['Romantico', 'Dramma'];
// NEW SERIES
$naruto = new SerieTv (
    'Naruto Shippuden',
    $naruto_shippuden_genre,
    9.3,
    2017,
    2017,
    750,
    29
);

$mr = new SerieTv(
    'Mr. Sunshine',
    $mr_sunshine_genre,
    7.8,
    2009,
    2010,
    24,
);
    
$series_list = [$naruto, $mr];

// GENERI FILM
$signore_degli_anelli_genre = ['Avventura', 'Fantasy'];
$tre_uomini_e_una_gamba_genre = ['Comico', 'Commedia'];
// NEW MOVIES
$signore = new Movie (
    'Signore degli Anelli',
    $signore_degli_anelli_genre,
    8,
    2001,
    180
);

// SERIE TV

$tre = new Movie (
    'Tre uomini e una gamba',
    $tre_uomini_e_una_gamba_genre,
    8.5,
    1997,
    110
);
// MOVIES
$movies_list = [$signore, $tre];


?>