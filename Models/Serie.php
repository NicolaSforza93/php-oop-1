<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production
{
    protected $season;

    function __construct(string $_poster, string $_title, string $_language, int $_rating, int $_season)
    {
        parent::__construct($_poster, $_title, $_language, $_rating);
        $this->season = $_season;
    }

    public function getSeason()
    {
        return $this->season;
    }
}
