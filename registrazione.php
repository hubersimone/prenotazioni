<?php


require 'vendor/autoload.php';
include_once("config.php");

use League\Plates\Engine;


//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view', 'tpl');

//Variabili valorizzate tramite POST
$username = $_POST ['username'];
$password = $_POST['password'];
$conferma_password =['conferma_password'];


/*
$sql = 'SELECT COUNT(*) as numero FROM utenti WHERE :username = any(SELECT username FROM utenti)';
$stmt = $pdo->query($sql);
$result = $stmt ->fetchAll();

if($result[0]['numero'] >= 1){
    echo $templates->render('utente_gia_esistente',
        [
            'username' => $username,
            'password' => $password
        ]);
}

if($password == $conferma_password) {
*/

$hash = password_hash($password,PASSWORD_DEFAULT);
//Query di inserimento preparate
    $sql = "INSERT INTO utenti VALUES(null, :username, '$hash')";

//Inviamo la query al db che la tiene in pancia
    $stmt = $pdo->prepare($sql);

//Inviamo i dati concreti che verranno messi al posto dei segnaposto
    $stmt->execute(
        [
            'username' => $username,
            'password' => $hash
        ]
    );


    echo $templates->render('registrazione',
        [
            'username' => $username,
            'password' => $password
        ]);
/*
}else {
    echo $templates->render('registrazione_fallita',
        [
            'username' => $username,
            'password' => $password
        ]);
}
*/
