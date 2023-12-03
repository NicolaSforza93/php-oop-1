<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production
{
    public $profit;
    protected $duration;

    function __construct(string $_poster, string $_title, string $_language, int $_rating, string $_profit, int $_duration)
    {
        parent::__construct($_poster, $_title, $_language, $_rating);
        $this->profit = $_profit;
        $this->duration = $_duration;
    }

    public function getDuration()
    {
        return "$this->duration min";
    }
}
