<?php
if (!empty($_POST['cancella'])) {
    $cancella = $_POST['cancella'];
    $query = "DELETE FROM my_capurroalessandro.lista WHERE id = $cancella";
    $span = '<span><h5>'.$query.'<h5><span>';
    echo $span;
    $result = $PDOConnessione -> query($query);
    $interrogazione = "select * from my_capurroalessandro.lista";
    $span = '<span><h5>'.$interrogazione.'<h5><span>';
    echo $span;
    require_once('../script_php/tabella_admin.php');
    $statement = $PDOConnessione -> query($interrogazione);
    while ($record = $statement -> fetch(PDO::FETCH_BOTH)) {
        echo "<tr>";
        echo "<td>".$record[0]."</td>";
        echo "<td>".$record[1]."</td>";
        echo "<td>".$record[2]."</td>";
        echo "<td>".$record[3]."</td>";
        require '../script_php/bottone_cancella.php';
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>