<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
<h1>Prenotazione effettuata</h1>
<p>
    Il codice per la tua prenotazione è <mark><?=$codice_univoco?></mark>
</p>
<img src="genera_qrcode.php?codice=<?php echo $codice_univoco ?>">
</body>
</html>