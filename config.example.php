<?php

//Esempio di configurazione
//Creare un file config.php e inserire le seguenti righe
//adattandole alla propria configurazione.

//Variabili dell'applicazione
$LUNGHEZZA_CODICE = 10;

//Utilizzo questo file che andrà in git come esempio a differenza
//del file config.php con i dati veri e che devono rimanere privati


//Dice a livello dello script che gli errori verranno mostrati
//e che non verranno loggati
ini_set('display_errors', 1);
ini_set('log_errors', 0);

$host = 'your_host';
$db = 'your_db';
$user = 'your_username';
$pass = 'your_password';

//Stringa di connessione
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;


$pdo = new PDO($dsn, $user, $pass);