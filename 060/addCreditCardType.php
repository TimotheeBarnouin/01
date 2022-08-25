<?php

require_once('business-csv.php');

$newCardType = array(
    'Type' => $_POST["Ncarte"]
);

carteCsv($newCardType);

header('location: listCreditCardType.php');
