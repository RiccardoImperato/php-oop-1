<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Database/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container py-5 text-center">
        <h1 class="my-5">PHP Movie</h1>
        <ul class="list-unstyled row row-cols-4 justify-content-center gap-4">
            <?php foreach ($movies as $movie) : ?>
                <li class="card p-0" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $movie->getImage() ?>" alt="<?php echo $movie->getTitle() ?>">
                    <h3 class="card-title mt-3"> <?php echo $movie->getTitle(); ?></h3>
                    <div class="card-text mb-3">
                        <?php echo $movie->getYear(); ?>
                    </div>
                    <div class="card-text mb-4">
                        <?php echo $movie->getGenres(); ?>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>