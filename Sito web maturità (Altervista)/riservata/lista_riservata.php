<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../script_php/bootstrap.php'); $page = "lista1"; $bool = "true";?> <!--librerie bootstrap-->
    <link rel="stylesheet" href="../css/style.css"> <!--script CSS-->
    <script src="../js/lista.js"></script> <!--script JQuery custom-->
    <title>Lista di sintetizzatori (Admin)</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
  </head>
  <body>
    <div class="container-fluid">
        <?php require_once('../script_php/header.php'); ?>
        <?php require_once('../script_php/navbar.php'); ?>
        <div class="container border" style="max-width: 1000px; background-color: #f8f8f8;">   
        <?php
        session_start();
        if (!empty($_SESSION['username'])) {
            if (time() - $_SESSION['time_start_login'] < 120) {
                require_once('../script_php/connessione_db.php');
                require_once('../script_php/content_lista_riservata.php');
            } else {
                session_destroy();
                header("location:../pagina_login/signin.php");
            }
        } 
        ?>
        </div>
        <?php require_once('../script_php/footer.php');?>
    </div>
  </body>
</html>




