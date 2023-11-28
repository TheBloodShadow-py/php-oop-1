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

class Production {
    public $title;

    public $langage;

    public $rating;

    public function __construct ($_title, $_langage, $_rating) {
        if (is_null($_title) || is_null($_langage) || is_null($_rating)) { 
            var_dump("Error bad parametres ");
        }
        else {
            $this->title = $_title;
            $this->langage = $_langage;
            $this->rating = $_rating;
        }
    }

    public function getTitle () {
        return $this->title;
    }
    public function getLanguage () {
        return $this->langage;
    }
    public function getRating () {
        return $this->rating;
    }
} 

$film = new Production("Film 1", "IT", "8");
$film2 = new Production("Film 2", "US", "5");
$film3 = new Production("Film 3", "FR", "9");


?>

<section>
    <ul>
        <li>
            <img src="https://picsum.photos/250/300" alt="">
            <div class="text-section" >
                <h1><?php echo $film->getTitle(); ?></h1>
                <span><?php echo $film->getLanguage()." - ".$film->getRating()." / 10" ?></span>
            </div>
        </li>
        <li>
            <img src="https://picsum.photos/251/300" alt="">
            <div class="text-section" >
                <h1><?php echo $film2->getTitle(); ?></h1>
                <span><?php echo $film2->getLanguage()." - ".$film2->getRating()." / 10" ?></span>
            </div>
        </li>
        <li>
            <img src="https://picsum.photos/249/300" alt="">
            <div class="text-section" >
                <h1><?php echo $film3->getTitle(); ?></h1>
                <span><?php echo $film3->getLanguage()." - ".$film3->getRating()." / 10" ?></span>
            </div>
        </li>
    </ul>
</section>


</body>
</html>