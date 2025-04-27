<?php 
    session_start();
    if (!empty ($_POST['username']) && !empty ($_POST['password']) && !empty ($_POST['accedi'])) {
        require_once '../script_php/connessione_db.php';
        extract($_POST);
        $interrogazione = "select * from my_capurroalessandro.utenti where username= \"$username\"";
        $span = '<span><h5>'.$interrogazione.'<h5><span>';
        echo $span;
        $statement = $PDOConnessione -> query($interrogazione);
        $record = $statement -> fetch();
        $hash = $record['password'];
        if (password_verify($password, $hash) == true){
            $error = false;
            $interrogazione = "select * from my_capurroalessandro.utenti WHERE username= :username AND password= :password";
            $span = '<span><h5>'.$interrogazione.'<h5><span>';
            echo $span;
            $statement = $PDOConnessione -> prepare($interrogazione);
            $statement -> execute(
                array(
                    'username'  =>  $username, 
                    'password'  =>  $password
                )
            );
            $_SESSION ["username"] = $username;
            $_SESSION ["password"] = $password;
            $_SESSION ['time_start_login'] = time();
            header("location:../riservata/lista_riservata.php");
        } else {
            header("location:../pagina_login/signin.php");
        }
    } else {
        header("location:../pagina_login/signin.php");
    }
?>