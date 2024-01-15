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

// Oggetti istanziati
$movie_1 = new Movie('Fantozzi', 1999);
$movie_2 = new Movie('Spiderman', 2018);
$movie_3 = new Movie('Napoleon', 2023);
$movie_4 = new Movie('Le ali della libertà', 1994);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>
            <h3>
                <?php
                echo $movie_1->getTitle();
                ?>
            </h3>
            <p>
                <?php
                echo "Anno:" . " " . $movie_1->getyear();
                ?>
            </p>
        </li>
        <li>
            <h3>
                <?php
                echo $movie_2->getTitle();
                ?>
            </h3>
            <p>
                <?php
                echo "Anno:" . " " . $movie_2->getyear();
                ?>
            </p>
        </li>
        <li>
            <h3>
                <?php
                echo $movie_3->getTitle();
                ?>
            </h3>
            <p>
                <?php
                echo "Anno:" . " " . $movie_3->getyear();
                ?>
            </p>
        </li>
        <li>
            <h3>
                <?php
                echo $movie_4->getTitle();
                ?>
            </h3>
            <p>
                <?php
                echo "Anno:" . " " . $movie_4->getyear();
                ?>
            </p>
        </li>
    </ul>
</body>

</html>