<?php
if (!empty ($_POST ['insert'])){ //inizio if principale
    if(!empty ($_POST ['produttore']) && !empty ($_POST ['modello']) && !empty ($_POST ['anno'])){
        if($_POST ['anno'] >= "1960" && $_POST ['anno'] <= "2022"){ //inizio if controllo anno
            $produttore = $_POST['produttore'];
            $modello = $_POST['modello'];
            $anno = $_POST['anno'];
            $interrogazione = "insert into my_capurroalessandro.lista(produttore,modello,anno) VALUES (\"$produttore\",\"$modello\",\"$anno\")"; 
            $span = '<span><h5>'.$interrogazione.'<h5><span>';
            echo $span;
            $statement = $PDOConnessione -> query($interrogazione);
            if ($statement -> rowCount() > 0) { //inizio if interno
                echo "<span id=\"avvertimento\"><br>record inserito correttamente<br><span>";
                echo "<br>";
                echo "<script>
                setTimeout(function(){
                    $(\"#avvertimento\").text(\"\");
                }, 3000);
                </script>";
            }//fine if interno
        }else{ //inizio primo else/fine if controllo anno
            echo "<span id=\"anno\"><br>Inserire un anno valido<br><span>";
            echo "<br>";
            echo "<script>
            setTimeout(function(){
                $(\"#anno\").text(\"\");
            }, 3000);
            </script>";
        }//fine primo else  
    }else{ //inizio secondo else/fine secondo if
        echo "<span id=\"avvertimento1\"><br>mancano dei campi fondamentali per l'insert<br><span>";
        echo "<br>";
        echo "<script>
        setTimeout(function(){
            $(\"#avvertimento1\").text(\"\");
        }, 3000);
        </script>";
    }  //fine secondo else
}//fine if principale
?>