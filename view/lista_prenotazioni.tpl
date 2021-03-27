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
    <table>
        <tr>
            <th>Codice Fiscale</th>
            <th>Data </th>
            <th>Codice Prenotazione </th>

        </tr>
        <?php foreach($result as $row): ?>
            <tr>
                <td> <?php echo $row['codice_fiscale'] ?> </td>
                <td> <?php echo $row['giorno'] ?> </td>
                <td> <?php echo $row['codice_univoco'] ?> </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>