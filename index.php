<?php
  
    /*Loterie
    Enoncé
    Nous avons décidé d'organiser une loterie virtuelle ! Pour cela nous devons développer un programme capable d'effectuer un tirage. Un tirage est une suite de 6 nombres distincts (pas de doublons) ordonnés de manière croissante, générés aléatoirement et compris entre 1 et 49.

    Ce tirage sera ensuite affiché sur une page web. */

    const NUMBER_COUNT = 6;// nombre de chiffre pour le tirage
    const MIN_BOUND = 1;
    const MAX_BOUND = 49;

    function tirage()
    {
        $loterie = [];
        
        while( count($loterie) < NUMBER_COUNT )// tant qu'on a pas 6 chiffres dans le tableau
        {
            $nombreAleatoire = rand(MIN_BOUND, MAX_BOUND);

            if ( !in_array($nombreAleatoire, $loterie) )//si pas le nombre dans le tableau
            {
                array_push( $loterie, $nombreAleatoire);//on ajoute dans le tableau
            }
            
        }

        sort($loterie);//   trie par ordre croissant

        return $loterie;
    }

    $tirageLoterie = tirage();

    //  inclusion de la vue
    include("index.phtml");


?>
