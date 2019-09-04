<?php
// $chiffre = null;
// while($chiffre !== 10) {
//     $chiffre = (int)readline('entrer une heure: ');
//     break;
// }
// // echo 'bravo vous avez gagnée'
// for ( $i = 0; $i < 10; $i++) {
//     echo "$i \n";
//     // $i = i + 2 == i +=2; 
// $notes = [10, 15, 16];
// for ($i = 0; $i < 3; $i++) {
//     echo "$notes[$i] \n";
// }
// foreach ($notes as $note){
//     echo "$note \n";
// }
// $eleves = [
//     'cm2' => ['jean', 'marc', 'jane', 'marion'],
//     'cm1' => ['emilie', 'marcelin']
// ];
// foreach($eleves as $classe => $listEleve) {
//     echo "la classe $classe :\n";
//     foreach($listEleve as $nom) {
//     echo "$nom\n";
//     }
//     echo"\n";
// }
// $notes = [];
// $nhapso = null;
// while ( $nhapso !== 'fin'){
//     $nhapso = readline('taper une numéro: ');
//     if ($nhapso !== 'fin'){
//         $notes[] = (int)$nhapso; 
//     }
// }
// foreach($notes as $note){                   
//     echo "$note\n";
// }


$plages = [];
while(true) {
    $heureDebut = (int)readline('taper heure ouvert: ');
    $heureFerme = (int)readline('taper heure fermé: ');
    if ($heureDebut >= $heureFerme) {
        echo "ne peut pas enregistrer";

    } else {
        $plages[] = [$heureDebut, $heureFerme];
        $action = readline('vous voulez creer un nouveau(o/n: ');
        if ($action === 'n') {
            break;
        }
    } 
    }
//     // $nhapGio = (int)readline('a quelle heure vous visitez: ');
//     // foreach($plages as $plage) {
//     //     if ($nhapGio >= $plages[0] && $nhapGio <= $plages[1])
//     //     echo 'le magasin est ouvert';
//     //     else {
//     //         echo 'le magasin est fermé';
//     // } 
//     // }
    echo 'le magasin est ouvert de ';
    print_r($plages);
    foreach($plages as $k => $plage) {
        if ($k >0) {
            echo ' et de ';
        }
        echo "{$plage[0]}h à {$plage[1]}h";
    }


?>