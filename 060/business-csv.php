<?php

//création d'une fonction pour créer le csv puis l'appeler
function createCsv($formData)
{

    // Write data line into CSV file
    $filename = 'registration.csv';
    $csvSeparator = '|';

    //Pointeur $f en 'a' : écriture seule => pointeur en fin de fichier
    $f = fopen($filename, 'a');

    // - header (only at first write)
    //vérification si le csv est vide
    if (filesize($filename) == 0) {

        //création d'une ligne comprenant la clé et le séparateur
        fputcsv($f, array_keys($formData), $csvSeparator);
    }

    //création d'une ligne comprenant la valeur de la clé et le séparateur
    fputcsv($f, array_values($formData), $csvSeparator);

    fclose($f);
};

//création du tableau affiché en données
function AfficheCsv()
{
    //création d'un pointeur pour naviguer dans le fichier ouvert en 'r' : lecture seule => pointeur en début de fichier
    $filePointer = fopen('registration.csv', 'r');

    //créer un tableau en bouclant première ligne
    //mise en forme du tableau créé avec bootstrap
    echo '<table class="table table-success table-striped">';
    echo '<thead>';
    echo '<tr>';
    $headers = fgetcsv($filePointer, 0, '|');
    foreach ($headers as $header) {
        echo "<th scope='col'>$header</th>";
    }

    echo '</tr>';
    echo '</head>';

    echo '<tbody scope>';

    //création des autres lignes du tableau
    while ($line = fgetcsv($filePointer, 0, '|')) {
        echo '<tr>';
        foreach ($line as $element) {

            echo "<td>$element</td>";
        }
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    fclose($filePointer);
};




//création d'une fonction pour créer le csv puis l'appeler
function carteCsv($newCardType)
{

    // Write data line into CSV file
    $filename = 'creditCardType.csv';
    $csvSeparator = '|';

    //Pointeur $f en 'a' : écriture seule => pointeur en fin de fichier
    $e = fopen($filename, 'a');

    // - header (only at first write)
    //vérification si le csv est vide
    if (filesize($filename) == 0) {

        //création d'une ligne comprenant la clé et le séparateur
        fputcsv($e, array_keys($newCardType), $csvSeparator);
    }

    //création d'une ligne comprenant la valeur de la clé et le séparateur
    fputcsv($e, array_values($newCardType), $csvSeparator);

    fclose($e);
};

//création du tableau affiché en données
function AfficheCardCsv()
{
    //création d'un pointeur pour naviguer dans le fichier ouvert en 'r' : lecture seule => pointeur en début de fichier
    $filePointer = fopen('creditCardType.csv', 'r');

    //créer un tableau en bouclant première ligne
    //mise en forme du tableau créé avec bootstrap
    echo '<table class="table table-success table-striped">';
    echo '<thead>';
    echo '<tr>';
    $headers = fgetcsv($filePointer, 0, '|');
    foreach ($headers as $header) {
        echo "<th scope='col'>$header</th>";
    }

    echo '</head>';

    echo '<tbody scope>';

    //création des autres lignes du tableau
    while ($line = fgetcsv($filePointer, 0, '|')) {
        echo '<tr>';
        foreach ($line as $element) {

            echo "<td>$element</td>";
        }
    }

    echo '</tbody>';
    echo '</table>';

    fclose($filePointer);
};

//création et ajout des types de carte
function nCartes()
{
    $filePointer = fopen('creditCardType.csv', 'r');

    while ($line = fgetcsv($filePointer, 0, '|')) {
        foreach ($line as $element) {

            echo "<option>$element</option>";
        }
    }
    fclose($filePointer);
};
