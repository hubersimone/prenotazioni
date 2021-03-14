<?php

include_once("config.php");

//Query per recuperare tutte le prenotazioni
$sql = "SELECT * FROM prenotazioni";

//Invio la query al server MySQL
$stmt = $pdo->query($sql);

//Estraggo le rifhe di risposta che finiranno come vettori in $result
$result = $stmt->fetchAll();


//Metodo sporco e veloce per visualizzare il risultato
echo "<pre>";
var_dump($result);
echo "</pre>";