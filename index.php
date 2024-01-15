<?php
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5 text-center">
        <h1 class="my-5">PHP Movie</h1>
        <ul class="row row-cols-3 list-unstyled">
            <li class="col py-3 text-center">
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
                    echo "Generi:" . " " . implode(", ", $movie_1->getGenres());
                    ?>
                </p>
            </li>
            <li class="col py-3 text-center">
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
                    echo "Generi:" . " " . implode(", ", $movie_2->getGenres());
                    ?>
                </p>
            </li>
            <li class="col py-3 text-center">
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
                    echo "Generi:" . " " . implode(", ", $movie_3->getGenres());
                    ?>
                </p>
            </li>
            <li class="col py-3 text-center">
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
                    echo "Generi:" . " " . implode(", ", $movie_4->getGenres());
                    ?>
                </p>
            </li>
        </ul>
    </div>

</body>

</html>