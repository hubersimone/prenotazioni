
<?php

require 'vendor/autoload.php';
include_once("config.php");

use League\Plates\Engine;

function crea_codice(int $length)
{
    $bytes = random_bytes($length);
    $codice = bin2hex($bytes);
    return $codice;
}

//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view','tpl');

//Variabili valorizzate tramite POST
$codice_fiscale = $_POST ['codice'] ;
$giorno = $_POST['giorno'];
$codice_univoco = crea_codice($LUNGHEZZA_CODICE);

$massimo_prenotazioni_per_giorno=5;

$sql = "SELECT COUNT(*) AS numero, giorno FROM prenotazioni WHERE giorno = '$giorno' AND annullato=false";
$stmt = $pdo->query($sql);
$result = $stmt ->fetchAll();

if($result[0]['numero'] >= $massimo_prenotazioni_per_giorno){
    echo $templates ->render('massimo_prenotazioni_raggiunto',['result' => $result,'giorno' => $result[0]['giorno']]);
}else {


//Query di inserimento preparate
    $sql = "INSERT INTO prenotazioni VALUES(null, :codice_fiscale, :giorno, :codice_univoco, false, null, false)";

//Inviamo la query al db che la tiene in pancia
    $stmt = $pdo->prepare($sql);

//Inviamo i dati concreti che verranno messi al posto dei segnaposto
    $stmt->execute(
        [
            'codice_fiscale' => $codice_fiscale,
            'giorno' => $giorno,
            'codice_univoco' => $codice_univoco
        ]
    );

   // echo "Inserimento riuscito";

//Ridirige il browser verso la pagina indicata nella location
//Serve come modo diretto per vedere attraverso il browser che la pagina
//ha effettivamente prodotto un risultato
    echo $templates->render('mostra_codice', ['codice_univoco' => $codice_univoco]);
    exit(0);
}