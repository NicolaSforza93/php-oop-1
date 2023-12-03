<?php

class Production
{
    public $poster;
    public $title;
    public $language;
    public $rating;

    function __construct(string $_poster, string $_title, string $_language, int $_rating)
    {
        $this->poster = $_poster;
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
    }

    public function setRating($rating)
    {
        if (is_numeric($rating) && $rating >= 1 && $rating <= 5) {
            $this->rating = intval($rating);
        } else {
            $this->rating > 5;
            var_dump('Il parametro $rating non è corretto');
        }
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getPoster()
    {
        return $this->poster;
    }
}
