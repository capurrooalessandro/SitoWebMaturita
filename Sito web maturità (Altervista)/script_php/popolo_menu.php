<?php
    $interrogazione = "select * from my_capurroalessandro.lista";
    $statement = $PDOConnessione -> query($interrogazione);
    while ($record = $statement -> fetch()) {
        echo "<option value=".$record['id'].">".$record['id'].", ".$record['produttore']." ".$record['modello'].", ".$record['anno']."</option>";
    }
?>