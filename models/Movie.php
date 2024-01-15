<?php
// Definizione classe Movie
class Movie
{
    // Varibili di istanza 
    public $title;
    public $year;

    /**
     * __construct
     *
     * @param  string $title
     * @param  int $year
     * @return void
     */
    function __construct($title, $year)
    {
        $this->title = $title;
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
    public function getyear()
    {
        return $this->year;
    }
}
