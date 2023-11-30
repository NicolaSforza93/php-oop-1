<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$movie1 = new Movie('Oppenheimer', 'Inglese', 4, '950,3 milioni', 180);
$movie2 = new Movie('Interstellar', 'Inglese', 5, '773,8 milioni', 168);
$movie3 = new Movie('Inception', 'Inglese', 5, '836,8 milioni', 148);
$movie4 = new Movie('Il cavaliere oscuto', 'Inglese', 5, '1 miliardo', 152);
$movie5 = new Movie('Memento', 'Inglese', 5, '39,7 milioni', 113);
$serie1 = new Serie('Breaking Bad', 'Inglese', 5, 5);
$serie2 = new Serie('The Office', 'Inglese', 4, 9);
$serie3 = new Serie('Stranger Things', 'Inglese', 3, 4);
$serie4 = new Serie('Game of Thrones', 'Inglese', 4, 8);
$serie5 = new Serie('The Mentalist', 'Inglese', 4, 7);

var_dump($movie1 instanceof Production);


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
    <title>php-oop-1</title>
</head>

<body>

    <div class="container p-2">
        <div class="row">
            <?php foreach ($productions as $production) { ?>
                <div class="col-6">
                    <div class="card mb-3 border-primar'y">
                        <div class="card-body">
                            <h5 class="card-title">Titolo: <?= $production->title ?></h5>
                            <p class="card-text mb-0">Lingua: <?= $production->getLanguage() ?></p>
                            <p class="card-text mb-0">Valutazione: <?= $production->rating ?> stelle</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>