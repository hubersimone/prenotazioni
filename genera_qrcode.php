<?php


// Usiamo la libreria
require("vendor/phpqrcode/phpqrcode.php");

// I dati da codificare nel QRcode
$data = $_GET['codice'];

// Generiamo il QRcode in formato immagine PNG
QRcode::png($data);

