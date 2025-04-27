<?php 
    if (!empty($_POST['select'])) {
      $interrogazione="select * from my_capurroalessandro.lista";
      $statement = $PDOConnessione -> query($interrogazione);
      $span = '<span><h5>'.$interrogazione.'<h5><span>';
      echo $span;
      require_once ('../script_php/tabella_admin.php'); //richede il file table.php che contiene la struttura della tabella
      while ($record = $statement -> fetch()) {//verrà stampata su schermo la tabella contenente tutti i record del DB
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
