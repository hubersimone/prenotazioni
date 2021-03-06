<?php


//Dice a livello dello script che gli errori verranno mostrati
// e che non verranno loggati
ini_set('display_errors', 1);
ini_set('log_errors', 0);

$host = 'localhost';
$db = 'tamponi';
$user = 'root';
$pass = '';

//stringa di connessione
$dsn = 'mysql:host' . $host . 'dbname=' . $db;


$pdo = new PDO($dsn, $user, $pass);

//Variabili al momento costanto poi verranno prese tramite POST
$codice_fiscale = 'HUSBRT30T999DR54';
$giorno='2021-03-06';

//Query di iserimento preparata
$sql = "INSERT INTO prenotazioni VALUES(null, :cod_fiscale, :giorno)"; // :cod_fiscale :giorno sono dei segnaposti che andranno riempiti

//Inaviamo la query al database che la tiene in pancia
$stmt = $pdo ->prepare($sql);

//Inviamo i dati concreti che verranno messi al posto dei segnaposto
$stmt-> execute(
    [
        'cod_fiscale'=> $codice_fiscale,
        'giorno' => $giorno
    ]
);