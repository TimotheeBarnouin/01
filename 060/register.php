<?php

require('business-csv.php');

//création d'un tableau avec une clé et une valeur attachée :
// => lefputcsv a besoin d'un tableau, on cible le name et pas l'id dans $post
$formData = array(
    'Nom' => $_POST["name"],
    'Email' => $_POST["email"],
    'Password' => $_POST["password"],

    //création de carte comme clé pour la valeur cardType
    'Carte' => $_POST["cardType"],
    'Numero' => $_POST["cardNumber"],
    'Date expiration' => $_POST["expDate"]
);

//récupération de la fonction de création du csv depuis business-csv.php
createCsv($formData);

header('Location: listRegistration.php');
