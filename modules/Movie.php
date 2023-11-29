<?php

require_once __DIR__ . "./Production.php";

class Movie extends Production
{

    private $profit;

    private $duration;

    public function __construct(String $_title, String $_language, Int $_rating, float $_profit, int $_duration)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->profit = $_profit;
        $this->duration = $_duration;
    }

    public function getProfit()
    {
        return floatval($this->profit) . "$";
    }

    public function getDuration()
    {
        return intval($this->duration) . " minutes";
    }

    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }

    public function setProfit(int $profit)
    {
        $this->profit = $profit;
    }
}
