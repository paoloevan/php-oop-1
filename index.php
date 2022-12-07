<?php
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genres.php';
include __DIR__ . '/db.php';

$genres_1 = new Genres($bb_film['genre']);
$film_1 = new Movie($bb_film['title'], $bb_film['director'], $bb_film['duration'], $bb_film['year'], $genres_1);
var_dump($film_1);

$genres_2 = new Genres($donnie_film['genre']);
$film_2 = new Movie($donnie_film['title'], $donnie_film['director'], $donnie_film['duration'], $donnie_film['year'], $genres_2);
var_dump($film_2);

$film_1->get_film_data();
$film_2->get_film_data();
