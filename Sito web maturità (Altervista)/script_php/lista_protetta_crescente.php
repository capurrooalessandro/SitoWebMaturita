<?php 
if(!empty ($_POST['select1'])){
    $interrogazione="select * from my_capurroalessandro.lista order by id ASC";
    $span = '<span><h5>'.$interrogazione.'<h5><span>';
    echo $span;
    $statement = $PDOConnessione -> query($interrogazione);
    require_once ('../script_php/tabella_admin.php'); //richede il file table.php che contiene la struttura della tabella
    while ($record = $statement -> fetch()) {//verrà stampata su schermo la tabella contenente tutti i record del DB
        echo "<tr>";
        echo "<td>".$record['id']."</td>";
        echo "<td>".$record['produttore']."</td>";
        echo "<td>".$record['modello']."</td>";
        echo "<td>".$record['anno']."</td>";
        require('bottone_cancella.php');
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>