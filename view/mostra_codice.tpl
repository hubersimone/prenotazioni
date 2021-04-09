<?php $this->layout('main',['argomento' => 'Prenotazione effettuata con successo']); ?>

<p>
    Il codice per la tua prenotazione è <mark><?=$codice_univoco?></mark>
</p>
<img src="genera_qrcode.php?codice=<?php echo $codice_univoco ?>">
