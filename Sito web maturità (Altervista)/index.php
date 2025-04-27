<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('script_php/bootstrap.php'); $page = "index"; ?> <!--librerie bootstrap-->
    <link rel="stylesheet" href="css/style.css"> <!--script CSS-->
    <script src="js/index.js"></script> <!--script JQuery custom-->
    <title>Home</title>
    <link rel="icon" href="img/icon.png" type="image/icon type">
  </head>
  <body>
    <div class="container-fluid">
      <?php require_once('script_php/header.php'); ?> <!--navbar-->
      <?php require_once('script_php/navbar.php'); ?> <!--navbar-->
      <div class="container" style="max-width: 1400px;">
        <?php require_once('script_php/content_home.php'); ?> <!--contenuto del sito-->
      </div>
      <!--inizio footer-->
            <?php require_once('script_php/footer.php'); ?>
      <!--fine footer-->
    </div>
  </body>
</html>