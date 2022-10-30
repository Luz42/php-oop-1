<?php

class Movie {

    public $title;
    public $movie_director;
    public $year;

    public $genres = [];
    public $language = '';
    public $actors = [];
    public $overview = '';
    public $duration = 0;
    public $film_age = 0;
    public $current_year;


    function __construct($_title, $_year = 0){
        $this->title = $_title;
        $this->year = $_year;
        $this->getCurrentYear();
        $this->getAge($_year);
    }

    public function getAge($_year){
        if($_year > 0){
        $this->film_age = $this->current_year - $_year;
        }
    }

    public function getCurrentYear()
    {
        $this->current_year = intval(date("Y"));
    }

    public function addActor($_actor)
    {
        if(!in_array($_actor, $this->actors)){
            $this->actors[] = $_actor;
        }
    }

    public function addGenre($_genre)
    {
        if(!in_array($_genre, $this->genres)){
            $this->genres[] = $_genre;
        }
    }
}



?>