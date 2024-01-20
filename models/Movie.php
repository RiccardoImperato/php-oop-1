<?php
require_once __DIR__ . '/../Database/db.php';
// Definizione classe Movie
class Movie
{
    // Varibili di istanza 
    private $image;
    private $title;
    private $year;
    private $genres;

    /**
     * __construct
     *
     * @param  string $title
     * @param  int $year
     * @param  array $genres
     * @return void
     */
    function __construct($_image, $_title, $_year, $_genres)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($_image)
    {
        $this->image = $_image;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    /**
     * Get the value of year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */
    public function setYear($_year)
    {
        $this->year = $_year;
    }

    /**
     * Set the value of _genres
     *
     * @return  self
     */
    public function set_genres($_genres)
    {
        $this->genres = $_genres;

        return $this;
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

$movies = [];

foreach ($movies_db as $movie) {

    array_push($movies, new Movie($movie['image'], $movie['title'], $movie['year'], $movie['genres']));
}
