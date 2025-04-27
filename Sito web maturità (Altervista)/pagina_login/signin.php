<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../script_php/bootstrap.php'); $page = "login";?> <!--librerie bootstrap-->
    <link rel="stylesheet" href="../css/style.css"> <!--script CSS-->
    <title>Login</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
  </head>
  <body>
    <div class="container-fluid">
      <?php require_once('../script_php/header.php'); ?> <!--navbar-->
      <?php require_once('../script_php/navbar.php'); ?> <!--navbar-->
      <div class="container border" style="max-width: 1400px; background-color: #f8f8f8;">
        <div class="container" style="max-width: 900px; height: 641px;">
          <div class="row mt-5">
              <div class="col-sm mb-5 mt-5">
                <h1 class="text-center mb-4">Area riservata</h1>
                <br>
                <br>
                <?php require_once ('form_login.php'); ?>
              </div>
          </div>
        </div>
      </div> 
      <?php require_once('../script_php/footer.php'); ?> 
    </div>
  </body>
</html>