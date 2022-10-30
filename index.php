<?php

/*
create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

require_once __DIR__ . './Movie.php';

$pulp_fiction = new Movie("Pulp Fiction", 1994);
$pulp_fiction->movie_director = 'Quentin Tarantino';

$pulp_fiction->addGenre('Commedia');
$pulp_fiction->addGenre('Giallo');
$pulp_fiction->addGenre('Drammatico');

$pulp_fiction->addActor('Brad Pitt');
$pulp_fiction->addActor('Edward Northon');
$pulp_fiction->addActor('Helena Bonham Carter');

$pulp_fiction->duration = 154;
$pulp_fiction->language = 'en';



var_dump($pulp_fiction)

?>

