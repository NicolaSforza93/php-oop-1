<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$movie1 = new Movie('https://pad.mymovies.it/filmclub/2021/12/084/locandinapg1.jpg', 'Oppenheimer', 'Inglese', 4, '950,3 milioni', 180);
$movie2 = new Movie('https://image.tmdb.org/t/p/original/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg', 'Interstellar', 'Inglese', 5, '773,8 milioni', 168);
$movie3 = new Movie('https://m.media-amazon.com/images/I/91Rc8cAmnAL._AC_UF1000,1000_QL80_.jpg', 'Inception', 'Inglese', 5, '836,8 milioni', 148);
$movie4 = new Movie('https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg', 'Il cavaliere oscuro', 'Inglese', 5, '1 miliardo', 152);
$movie5 = new Movie('https://m.media-amazon.com/images/I/515EOVqRexL._AC_UF1000,1000_QL80_.jpg', 'Memento', 'Inglese', 5, '39,7 milioni', 113);
$serie1 = new Serie('https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/3a1654116269619.605e35b102e33.jpg', 'Breaking Bad', 'Inglese', 5, 5);
$serie2 = new Serie('https://i.pinimg.com/550x/3e/1a/31/3e1a3118e2abafaa8adb7b2a3710f729.jpg', 'The Office', 'Inglese', 4, 9);
$serie3 = new Serie('https://static.posters.cz/image/750/poster/stranger-things-seasons-i132237.jpg', 'Stranger Things', 'Inglese', 3, 4);
$serie4 = new Serie('https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_.jpg', 'Game of Thrones', 'Inglese', 4, 8);
$serie5 = new Serie('https://m.media-amazon.com/images/I/61QxRzcjfaL._AC_UF1000,1000_QL80_.jpg', 'The Mentalist', 'Inglese', 4, 7);

// var_dump($movie1 instanceof Movie);


$productions = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $serie1,
    $serie2,
    $serie3,
    $serie4,
    $serie5,
];

// var_dump($productions);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-oop-1</title>
</head>


<body class="bg-secondary bg-gradient">

    <div class="container p-2">
        <div class="row">
            <?php foreach ($productions as $production) { ?>
                <div class="col-6">
                    <div class="card mb-3 border-warning border-2">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="<?= $production->getPoster() ?>" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Titolo:</strong> <?= $production->title ?></h5>
                                    <p class="card-text mb-0"><strong>Lingua:</strong> <?= $production->getLanguage() ?></p>
                                    <p class="card-text mb-0"><strong>Valutazione:</strong> <?= $production->rating ?> stelle</p>
                                    <?php if ($production instanceof Movie) {
                                    ?> <p class="card-text mb-0"><strong>Durata:</strong> <?= $production->getDuration() ?></p>
                                    <?php } elseif ($production instanceof Serie) {
                                    ?> <p class="card-text mb-0"><strong>Stagioni:</strong> <?= $production->getSeason() ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>