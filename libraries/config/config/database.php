<?php

/**
*
* Retourne une connexion à la db
*
* @return PDO 
*/

function getPDO(): PDO
{
    $servername = "localhost";
    $dbname = "vue";
    $user = "root";
    $pass = " ";

    // si on est sur Mac alors $pass="root"
    // une fois que tt ces infos sont stockés sur une variables on fait newPDO (nouvelle instance)
    // on instancie un objet et à la fin on retourne la PDO
    // ca veut dire lorsqu'on appel la fonction getPDO (n'importe où dans notre projet) ça fera une connexion à la db

    $pdo = new PDO("mysql:host=$servername; dbname:=$dbname", $user, $pass, [
        PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION,
        // mode de requête par default => revoit des tableaux associatifs
        PDO::ATR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $pdo;
}


