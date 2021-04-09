
<?php $this->layout('main',['argomento' => 'Lista delle prenotazioni']); ?>

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
