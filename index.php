<?php

class Movie
{
    // Varibili di istanza 
    public $title;
    public $year;

    // Costruttore 
    function __construct($title, $year)
    {
        $this->title = $title;
        $this->year = $year;
    }

    // Metodo per ottenere titolo 
    public function getTitle()
    {
        return $this->title;
    }

    // Metodo per ottenere anno 
    public function getyear()
    {
        return $this->year;
    }
}
