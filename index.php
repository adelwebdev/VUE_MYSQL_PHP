<?php

// call template
require_once 'libraries/utils.php';
render('lobby');

?>

<!-- faut commencer par mettre le dossier root de notre projet dans dossier xampp dans le c: (dans htdocs)-->
<!-- on lance xampp control panel et on start apache et mysql (si mysql ne selance pas voir dans Servies et desactiver mysql) -->
<!-- d'abord faut importer la data (db) depuis mySql -->
<!-- pr ça on va sur 127.0.0.1/phpmyadmin (dans navigateur)  -->
<!-- on clique sur nouvelle base de données; on affecte un nom et on clique sur créer -->
<!-- on peut affecter un nom et nbr colonnes à nos tables; ici nous on fait importer -->
<!-- et on importe notre table (ici "vivino.sql") depuis htdocs dans xampp et on exécute-->
<!-- maintenant faut faire une pdo, une requette  -->
<!-- les models c tout ce qui à trait à nos appels sql; les controllers c de la logique php; les views c de la logique html -->
<!-- on va configurer notre db (l'appel à la db) dans config/database.php -->

 <!-- l'index.php c ce que lit notre navigateur -->
 <!-- on lui require un tampon (util.php) -->
 <!-- on va travailler dans lobby.html.php (tt le contenu de cette page on le met en tampon) et on l'injecte dans body -->
 <!-- on  l'injecte dans layout.html.php -->
 <!-- notre $pageContent sera la contenance de lobby.html.php -->
 <!-- on lance notre projet en allant sur http://127.0.0.1/vuejs-php-starting_file/  (ici nom de notre dossier root-->
 <!-- on va travailler dans lobby.html et ça sera injecté dans layout.html et layout lui même injecté dans index.php -->
 <!-- le model c tt ce qui atrait à notre sql (tt contacte entre notre application et sql) -->

