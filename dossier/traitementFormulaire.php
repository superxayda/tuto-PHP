<?php 
$aDeviner = 150; 
require 'header.php';
?>
<?php if ($_GET['chiffre'] > $aDeviner) {
        echo 'votre chiifre est trop grande';
    } elseif ($_GET['chiffre'] < $aDeviner) {
        echo 'votre chiffer est trop petit';
    } else { 
        echo 'bravo vous avez deviné le chiffre';
    }?>
<form action="/traitementFormulaire.php" methode= "GET" >
    <input type = "number" name="chiffre" placeholder= "entre 0 et 1000" value= "<?= htmlentities($_GET['chiffre'])?>" >
    <input type = "text" name = "demo" value = "test">
    <button type="submit">Deviner</button>
</form>






<?php 
    require 'footer.php'
?>




