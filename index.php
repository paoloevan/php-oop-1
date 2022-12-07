<?php
// Modificare la classe Movie in modo che accetti piú di un genere.

class Movie
{
    public $title;
    public $director;
    public $duration;
    public $year;
    public $genres;

    function __construct($title, $director, $duration, $year, array $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->duration = $duration;
        $this->year = $year;
        $this->genres = $genres;
    }

    public function get_film_data()
    {
        $data = [
            'title' => $this->title,
            'director' => $this->director,
            'duration' => $this->duration,
            'year' => $this->year,
            'genres' => $this->genres
        ];
        foreach ($data as $item) {
            if (!is_array($item)) {
                echo $item;
            } else {
                foreach ($item as $genre) {
                    echo $genre;
                }
            }
        }
    }
}

$genres_1 = ['musical', 'comedy', 'drama'];
$film_1 = new Movie('The blues brothers', 'john landis', 120, 1980, $genres_1);
var_dump($film_1);

$genres_2 = ['thriller', 'sci-fi', 'fantasy'];
$film_2 = new Movie('Donnie darko', 'Richard Kelly', 100, 2001, $genres_2);
var_dump($film_2);

$film_1->get_film_data();
$film_2->get_film_data();
