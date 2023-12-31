<?php

require_once __DIR__ . "./models/Movie.php";
require_once __DIR__ . "./models/Serie.php";

$movies = [];
$series = [];

for ($i = 0; $i < 3; $i++) {
    $movies[] = new Movie("Film " . $i + 1, 'IT', random_int(0, 10), random_int(10000, 100000) / 10, random_int(60, 120));
    $series[] = new Serie("Serie " . $i + 1, 'IT', random_int(0, 10), random_int(1, 4));
}

$productions = array_merge($movies, $series);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <section>
        <ul>
            <?php foreach ($productions as $production) : ?>
                <li>
                    <img draggable="false" src="<?= $production->getImageUrl() ?>" alt="">
                    <div class="text-section">
                        <?= $production->getDetails() ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

</body>

</html>