<?php
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genres.php';

$genres_1 = new Genres(['musical', 'comedy', 'drama']);
$film_1 = new Movie('The blues brothers', 'john landis', 120, 1980, $genres_1);
var_dump($film_1);

$genres_2 = new Genres(['thriller', 'sci-fi', 'fantasy']);
$film_2 = new Movie('Donnie darko', 'Richard Kelly', 100, 2001, $genres_2);
var_dump($film_2);

$film_1->get_film_data();
$film_2->get_film_data();
