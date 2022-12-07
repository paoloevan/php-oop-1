<?php
class Movie
{
    public $title;
    public $director;
    public $duration;
    public $year;
    public $genres;

    function __construct($title, $director, $duration, $year, $genres)
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
            if (!is_object($item)) {
                echo $item;
            } else {
                foreach ($item as $genre) {
                    foreach ($genre as $string)
                        echo $string;
                }
            }
        }
    }
}
