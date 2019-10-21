<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Creneau.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Form.php';
//$creneau = new Creneau(9, 12);
//$creneau2 = new Creneau(14, 16);
//$creneau->intersect($creneau2);
//echo $creneau->toHTML();
//echo $creneau2->toHTML();

echo Form::checkbox('toto');

echo Form::$class;