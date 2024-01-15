<?php
// Inclusione Movie.php
require_once __DIR__ . '/models/Movie.php';

// Oggetti istanziati
$movie_1 = new Movie('Fantozzi', 1999, 'Comico');
$movie_2 = new Movie('Spiderman', 2018, 'Azione');
$movie_3 = new Movie('Napoleon', 2023, 'Storia');
$movie_4 = new Movie('Le ali della libertà', 1994, 'Drammatico');

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
                echo "Anno:" . " " . $movie_1->getYear();
                ?>
            </p>
            <p>
                <?php
                echo "Genere:" . " " . $movie_1->getGenre();
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
                echo "Anno:" . " " . $movie_2->getYear();
                ?>
            </p>
            <p>
                <?php
                echo "Genere:" . " " . $movie_2->getGenre();
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
                echo "Anno:" . " " . $movie_3->getYear();
                ?>
            </p>
            <p>
                <?php
                echo "Genere:" . " " . $movie_3->getGenre();
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
                echo "Anno:" . " " . $movie_4->getYear();
                ?>
            </p>
            <p>
                <?php
                echo "Genere:" . " " . $movie_4->getGenre();
                ?>
            </p>
        </li>
    </ul>
</body>

</html>