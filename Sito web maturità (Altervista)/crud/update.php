<?php
if (!empty ($_POST['update'])) {
    if (!empty ($_POST['produttore']) && !empty ($_POST['modello']) && !empty ($_POST['anno'])) {
        extract($_POST);
        $interrogazione="UPDATE my_capurroalessandro.lista SET produttore=\"$produttore\", modello=\"$modello\", anno=\"$anno\" WHERE id=$tendina";
        $span = '<span><h5>'.$interrogazione.'<h5><span>';
        echo $span;
        $statement = $PDOConnessione -> query($interrogazione);
        //var_dump($statement);
        if ($statement -> rowCount() > 0) {
            echo "<span id=\"avvertimento1\">Il record è stato modificato correttamente</span>";
            echo "<script>
            setTimeout(function() {
                $(\"#avvertimento1\").text(\"\");
            }, 3000);
            </script>";
        }
    }
    $interrogazione = "select * from my_capurroalessandro.lista";
    $span = '<span><h5>'.$interrogazione.'<h5><span>';
    echo $span;
    require_once('../script_php/tabella_admin.php');
    $statement = $PDOConnessione -> query($interrogazione);
    while ($record = $statement -> fetch()) {
        echo "<tr>";
        echo "<td>".$record['id']."</td>";
        echo "<td>".$record['produttore']."</td>";
        echo "<td>".$record['modello']."</td>";
        echo "<td>".$record['anno']."</td>";
        require('../script_php/bottone_cancella.php');
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>