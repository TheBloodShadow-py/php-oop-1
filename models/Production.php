<?php
class Production
{
    private $title;

    private $langage;

    private $rating;

    private $imageUrl;

    protected function __construct(String $_title, String $_language, Int $_rating)
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

    protected function getDetails()
    {
        return "<h1> " . $this->getTitle() . "</h1> <span>" . $this->getTitle() . " - " . $this->getRating() . " / 10</span> ";
    }
}
