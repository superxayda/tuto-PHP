<?php
// $mot = readline('taper un mot ');
// $inverser = strtolower(strrev($mot));
// if ($mot === $strrev) {
//     echo 'c \'est un mot palyndrome';

// } else {
//     echo 'c\'est pas un mot palyndrome';
// }
// $tableau = [9, 12, 15];
// $som = array_sum($tableau);
// var_dump($som);
$insultes = ['merde', 'con'];
$phrases = readline('taper une phrase: ');
// foreach($insultes as $insulte) {
//     $phrases = str_replace($insultes, '****', $phrases);
// }
// echo $phrases;

// var_dump(stripos($phrases, $insultes[0]));
foreach($insultes as $insulte){
    if (stristr($phrases, $insulte)!==false){
        $phrases = 'message supprimé';
    }
}
echo $phrases;


    

