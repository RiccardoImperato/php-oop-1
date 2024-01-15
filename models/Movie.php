<?php
// Definizione classe Movie
class Movie
{
    // Varibili di istanza 
    public $title;
    public $year;
    public $genres;

    /**
     * __construct
     *
     * @param  string $title
     * @param  int $year
     * @param  string $genre
     * @return void
     */
    function __construct($title, $year, $genres)
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->year = $year;
    }

    /**
     * getTitle: funzione per ottenere titolo
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * getyear: funzione per ottenere anno 
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * getyear: funzione per ottenere gerere 
     *
     * @return array
     */
    public function getGenres()
    {
        return $this->genres;
    }
}
