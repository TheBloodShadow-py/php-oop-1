<?php

require_once __DIR__ . "./modules/Production.php";
require_once __DIR__ . "./modules/Movie.php";
require_once __DIR__ . "./modules/Serie.php";

$movies = [];
$series = [];

for ($i = 0; $i < 5; $i++) {
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
                    <img src="<?= $production->getImageUrl() ?>" alt="">
                    <div class="text-section">
                        <h1><?php echo $production->getTitle(); ?></h1>
                        <span><?php echo $production->getLanguage() . " - " . $production->getRating() . " / 10" ?></span>
                        <?php if ($production instanceof Movie) { ?>
                            <span><?= $production->getProfit() ?></span>
                            <span><?= $production->getDuration() ?></span>
                        <?php } else { ?>
                            <span><?= "Numero stagioni: " . $production->getSeason() ?></span>
                        <?php } ?>

                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>


</body>

</html>