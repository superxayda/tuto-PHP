<?php
// $prenom = 'doe'
// function bonjour ($nom = 'jean') ==> mettre un valeur par defaut) {
//     global $prenom;
//     echo 'bonjour ' . $nom . ' ' . $prenom;
// }
// echo bonjour('jean');
// // bonjour() ==> run with valeur par defautl
function repondre_oui_ou_non ($phrases = 'vous voulez continuer?') {
    while(true){
        $reponse = readline( $phrases . ' ' . '(o)ui ou (n)on');
        if ($reponse === 'o') {
            return true;
        } else if ($reponse === 'n') {
            return false;
        }
    }
}
// $resultat = repondre_oui_ou_non('vous voulez continuer?');


function demander_creneau ($phrases = 'veuillez entrer votre creneau') {
    while (true) {
        $heureOuvert = readline('taper heure ouvert');
        if ( $heureOuvert >= 0 && $heureOuvert < 23) {
            break;
        }
    }
    while (true) {
        $heureFermeture =  readline('taper heure fermé');
        if ($heureFermeture >= 0 && $heureFermeture < 23) {
            break;
        }
    }
    return [$heureOuvert, $heureFermeture];
}
// $creneau = demander_creneau();


function demander_creneaux ($phrase = 'entrer vos creneaux') {
    $creneaux = [];
    $continuer = true;
    while ($continuer) {
        $creneaux = demander_creneau();
        $continuer = repondre_oui_ou_non();
    }
    return $creneaux;
}
demander_creneaux('entrer un creneau');


