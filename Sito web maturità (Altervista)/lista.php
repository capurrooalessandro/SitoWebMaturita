<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('script_php/bootstrap.php'); $page = "lista"; $bool = "true"; ?> <!--librerie bootstrap-->
    <link rel="stylesheet" href="css/style.css"> <!--script CSS-->
    <script src="js/lista.js"></script> <!--script JQuery custom-->
    <title>Lista di sintetizzatori (Ospite)</title>
    <link rel="icon" href="img/icon.png" type="image/icon type">
  </head>
  <body>
    <div class="container-fluid">
      <?php require_once('script_php/header.php'); ?> <!--navbar-->
      <?php require_once('script_php/navbar.php'); ?> <!--navbar-->
      <?php require_once('script_php/connessione_db.php')?>
      <div class="container border" style="max-width: 1400px; background-color: #f8f8f8;">     
        <?php require_once('script_php/content_lista.php')?>
      </div>
        <!--inizio footer-->
        <?php require_once('script_php/footer.php'); ?>
        <!--fine footer-->
    </div>  
  </body>
</html>