<?php
// Definizione classe Movie
class Movie
{
    // Varibili di istanza 
    public $title;
    public $year;
    public $genre;

    /**
     * __construct
     *
     * @param  string $title
     * @param  int $year
     * @return void
     */
    function __construct($title, $year, $genre)
    {
        $this->title = $title;
        $this->genre = $genre;
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
    public function getGenre()
    {
        return $this->genre;
    }
}
