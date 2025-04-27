<?php 
    try{
        $username = "root";
        $password = "";
        $dsn = "mysql:host=localhost; dbname:my_capurroalessandro";
        $PDOConnessione = new PDO($dsn, $username, $password);
        $PDOConnessione -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*echo "<h4 id=\"avvertimento\">Connessione al Database effettuata con successo<h4>";
        echo "<script>
        setTimeout(function(){
            $(\"#avvertimento\").text(\"\");
        }, 3000);
        </script>";*/
    }catch(PDOException $e){
        echo $e -> getMessage();
    }
?>