
<?php

require 'vendor/autoload.php';
include_once("config.php");

use League\Plates\Engine;


//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view','tpl');

//Variabili valorizzate tramite POST
$codice_univoco = $_POST ['codice'] ;
$note = $_POST['note'];



//Query di inserimento preparate
    $sql = 'UPDATE prenotazioni SET eseguito = true, note = :note WHERE codice_univoco = :codice';

//Inviamo la query al db che la tiene in pancia
    $stmt = $pdo->prepare($sql);

//Inviamo i dati concreti che verranno messi al posto dei segnaposto
    $stmt->execute(
        [
            'codice' => $codice_univoco,
            'note' => $note
        ]
    );


    echo $templates->render('esegui',
    [
        'codice_univoco' => $codice_univoco,
        'note' => $note
    ]);

