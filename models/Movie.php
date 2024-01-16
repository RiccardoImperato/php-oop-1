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
     * @param  array $genres
     * @return void
     */
    function __construct($_title, $_year, $_genres)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
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
     * getYear: funzione per ottenere anno 
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * getGenres: funzione per ottenere generi 
     *
     * @return array
     */
    public function getGenres()
    {
        return implode(", ", $this->genres);
    }
}
