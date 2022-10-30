<?php

require_once __DIR__ . './index.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulp Fiction</title>
</head>
<body>
    <div>
        <ul>
            <li> <h4>Titolo:</h4> <?=$pulp_fiction->title ?> </li>
            <li> <h4>Regista:</h4> <?=$pulp_fiction->movie_director ?></li>
            <li> <h4>Anno:</h4> <?=$pulp_fiction->year ?></li>
            <li> <h4>Generi:</h4>
                <ul>
                    <?php
                    foreach($pulp_fiction->genres as $_genre){
                        ?>

                        <li><?=$_genre ?></li>
                        
                        <?php
                    }
                    ?>
                </ul>
            </li>
            <li> <h4>Lingua:</h4> <?=$pulp_fiction->language ?></li>
            <li> <h4>Attori:</h4>
                <ul>
                    <?php
                    foreach($pulp_fiction->actors as $actor){
                        ?>

                        <li><?=$actor ?></li>
                        
                        <?php
                    }
                    ?>
                </ul>
            </li>
            <li> <h4>Overview:</h4> <?=$pulp_fiction->overview ?></li>
            <li> <h4>Durata:</h4> <?=$pulp_fiction->duration ?> minuti</li>
            <li> <h4>Età del film:</h4> <?=$pulp_fiction->film_age ?> anni</li>
        </ul>
    </div>
</body>
</html>

<style>
    h4{
        display: inline-block;
        margin: 10px 0;
    }
</style>