<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <?php

    class Production
    {
        public $title;

        public $langage;

        public $rating;

        public $imageUrl;

        public function __construct($_title, $_language, $_rating)
        {
            if (is_null($_title) || is_null($_language) || is_null($_rating)) {
                var_dump("Error bad parametres ");
            } else {
                $this->title = $_title;
                $this->langage = $_language;
                $this->rating = $_rating;
                $this->imageUrl = 'https://picsum.photos/250/300?t=' . microtime();
            }
        }

        public function getTitle()
        {
            return $this->title;
        }
        public function getLanguage()
        {
            return $this->langage;
        }
        public function getRating()
        {
            return $this->rating;
        }

        public function getImageUrl()
        {
            return $this->imageUrl;
        }
    }


    $productions = [];

    for ($i = 0; $i < 4; $i++) {
        $productions[] = new Production("Film" . $i + 1, 'IT', random_int(0, 10));
    }

    ?>

    <section>
        <ul>
            <?php foreach ($productions as $film) : ?>
                <li>
                    <img src="<?= $film->getImageUrl() ?>" alt="">
                    <div class="text-section">
                        <h1><?php echo $film->getTitle(); ?></h1>
                        <span><?php echo $film->getLanguage() . " - " . $film->getRating() . " / 10" ?></span>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>


</body>

</html>