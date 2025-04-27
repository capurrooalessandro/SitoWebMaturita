    <div class="row">
      <div class="col-sm mt-3 mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST" class="float-sm-left">
            <input class="btn btn-primary mb-2" type="submit" value="Visualizza in ordine crescente" name="order1">
            <input class="btn btn-primary mb-2 mr-2" type="submit" value="Visualizza in ordine decrescente" name="order2">
        </form>
        <a class="btn btn-dark float-lg-right" href="pagina_login/signin.php">Modifica lista</a>
      </div>
    </div> 
    <div class="row">
      <div class="col-sm">
        <?php require_once('lista_ospite.php') ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <?php require_once('lista_ospite_crescente.php'); ?>
        <?php require_once('lista_ospite_decrescente.php'); ?>       
      </div>
    </div>
<!--fine contenuto-->