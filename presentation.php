<?php
    declare(strict_types=1);
    $prenom = "David";
    $age = 25;
    $ville = "Paris";
    $objectifProfessionnel = "Devenir développeur web";
    $anneeActuelle = 2026;

    $anneeDeNaissance = $anneeActuelle - $age;

    echo "Bonjour, je m'appelle $prenom. J'ai $age ans et je vis à $ville.\n";
    echo "Mon objectif professionnel est : $objectifProfessionnel.\n";
    echo "Je suis né en $anneeDeNaissance.\n";
    echo "Nous sommes en $anneeActuelle.\n";
    echo "Merci de m'avoir écouté !\n";

    var_dump($age);
    var_dump($anneeActuelle);