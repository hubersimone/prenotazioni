<?php

require 'vendor/autoload.php';
include_once 'config.php' ;

use League\Plates\Engine;

//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view','tpl');

//Query per recuperare tutte le prenotazioni
$sql = "SELECT * FROM prenotazioni WHERE giorno = current_date AND annullato = false";

//Invio la query al server MySQL
$stmt = $pdo->query($sql);

//Estraggo le rifhe di risposta che finiranno come vettori in $result
$result = $stmt->fetchAll();


//Rendo un template che mi visulaizza la tabella
echo $templates ->render('lista_prenotazioni_giornaliere',['result' => $result]);
