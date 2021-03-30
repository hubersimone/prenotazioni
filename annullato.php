
<?php

require 'vendor/autoload.php';
include_once("config.php");

use League\Plates\Engine;


//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view','tpl');

//Variabili valorizzate tramite POST
$codice_univoco = $_POST ['codice'] ;


//Query di inserimento preparate
$sql = 'UPDATE prenotazioni SET annullato = true  WHERE codice_univoco = :codice';

//Inviamo la query al db che la tiene in pancia
$stmt = $pdo->prepare($sql);

//Inviamo i dati concreti che verranno messi al posto dei segnaposto
$stmt->execute(
    [
        'codice' => $codice_univoco,
    ]
);


echo $templates->render('annulla',
    [
        'codice_univoco' => $codice_univoco
    ]);


