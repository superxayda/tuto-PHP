salut les gens
<?php
    // $nom = "marc";
    // $prenom = "nguyen";
    // echo $nom . $prenom;
    // $prenom = "marc";
    // $nom = "doe";
    // $note1 = 10;
    // $note2 = 20;
    // // echo "bonjour $nom $prenom  vous avez eu " . ($note1 + $note2)/2  . " moyenne";
    // echo 'bonjour' .' ' . $nom .' '. $prenom . ' '. 'vous avez eu '. ($note1 + $note2)/2 .' ' . 'moyenne';
    // $notes = [10, 20];
    // echo $notes[0];
    $eleves = [
        'nom' => 'marc',
        'prenom' => 'doe',
        'notes' => [10, 20, 30]
    ];   
      echo $eleves["nom"] . " " . $eleves["prenom"];
      $eleves[] = 'CM2-A';
      print_r($eleves['notes']);

    ?>  