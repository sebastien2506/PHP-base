<?php

// 1) Créez une fonction qui prend en paramètre un nombre et qui retourne le carré de ce nombre.

// puis affichez le carré de 5, 10 et 15 en utilisant cette fonction.


// 2) Créez une fonction qui prend en paramètre un nombre et qui retourne le cube de ce nombre.


// puis affichez le cube de 5, 10 et 15 en utilisant cette fonction.

// 3) Créez une fonction qui prend une date à n'importe quel format et qui retourne la date au format français
// telle qu'indiquée dans l'exemple en utilisant $semaineFr et $moisFr.
// Exemple: 2018-12-25 -> Mardi 25 décembre 2018
// Exemple: 2018-12-25 12:27:35 -> Mardi 25 décembre 2018 à 12h27
// vous pouvez utiliser strtotime() pour convertir une date en timestamp (temps en secondes depuis le 1er janvier 1970)
// et date() pour convertir un timestamp en date au format de votre choix.

function dateEnFr($date){
    $semaineFr=[1 =>'lundi','mardi','mercredi','jeudi',
        'vendredi','samedi','dimanche',];
    $moisFr=[1 =>'janvier','février','mars','avril','mai','juin','juillet',
        'août','septembre','octobre','novembre','décembre',];
    // A FAIRE
}
echo dateEnFr('2021-12-25 12:27:35');
echo '<br>';
echo dateEnFr('2023-01-25 11:20');
echo '<br>';
echo dateEnFr('2024-02-25');
