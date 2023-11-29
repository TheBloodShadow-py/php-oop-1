<?php

require_once __DIR__ . "./Production.php";

class Serie extends Production
{

    private $season;

    public function __construct(String $_title, String $_language, Int $_rating, Int $_season)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->season = $_season;
    }

    public function getSeason()
    {
        return intval($this->season);
    }

    public function setSeason(int $season)
    {
        $this->season = $season;
    }
    public function getDetails()
    {
        return parent::getDetails() . "<span> Numero stagioni: " . $this->getSeason() . "</span>";
    }
}
