<?php

/*
create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie {

    public $title;
    public $movie_director;
    public $year;

    public $genre = '';
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

    public function getAge($year){
        if($year > 0){
        $this->film_age = $this->current_year - $year;
        }
    }

    public function getCurrentYear()
    {
        $this->current_year = intval(date("Y"));
    }

}

$pulp_fiction = new Movie("Pulp Fiction");

var_dump($pulp_fiction)

?>