<?php
// Modificare la classe Movie in modo che accetti piú di un genere.

class Movie
{
    public $title;
    public $director;
    public $duration;
    public $year;

    function __construct($title, $director, $duration, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->duration = $duration;
        $this->year = $year;
    }

    public function get_title()
    {
        echo $this->title;
    }
}

$film_1 = new Movie('The blues brothers', 'john landis', 120, 1980);
var_dump($film_1);

$film_2 = new Movie('Donnie darko', 'Richard Kelly', 100, 2001);
var_dump($film_2);

$film_1->get_title();
$film_2->get_title();
