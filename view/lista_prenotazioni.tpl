<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
    <h1>Portale Prenotazioni</h1>
    <h2>Lista delle prenotazioni</h2>
    <ul>
        <?php foreach($result as $row): ?>
        <li>  <strong><?php echo $row['codice_fiscale'] ?></strong> Data del tampone prenotato:
              <?php echo $row['giorno'] ?>
        </li>
        <?php endforeach ?>
    </ul>
</body>
</html>