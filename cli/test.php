<?php
require __DIR__ .'/../class/Creneau.php';

$creneau = new Creneau(9, 12);
$creneau2 = new Creneau(12, 14);
var_dump(
    $creneau->inclureHeure(10),
    $creneau2->inclureHeure(10)
);
