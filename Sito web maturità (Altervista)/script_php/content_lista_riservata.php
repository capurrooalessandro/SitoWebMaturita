    <div class="row">
      <div class="col-sm mt-3 mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST" class="float-sm-left">
          <div class="form-group">
            <label for="testo1">Produttore:</label>
            <input type="text" class="form-control" id="testo" name="produttore" placeholder="Produttore">
          </div>
          <div class="form-group">
            <label for="testo2">Modello:</label>
            <input type="text" class="form-control" id="pwd" name="modello" placeholder="Modello">
          </div>
          <div class="form-group">
            <label for="testo3">Anno (4 caratteri):</label>
            <input type="number" class="form-control" id="numero" name="anno" placeholder="Anno">
          </div>
          <br>
          <div class=" col-md text-left col-sm text-center">
            <input class="btn btn-primary mb-2 text-center" type="submit" value="Ordine crescente" name="select1">
            <input class="btn btn-primary mb-2 text-center" type="submit" value="Ordine decrescente" name="select2">
            <input class="btn btn-success mb-2 pl-4 pr-4 text-center" type="submit" value="Insert" name="insert">
            <input class="btn btn-info mb-2 pl-4 pr-4 text-center" type="submit" value="Select" name="select">
            <input class="btn btn-warning mb-2 pl-4 pr-4 text-center" type="submit" value="Update" name="update">
            <a class="btn btn-dark mb-2 pl-4 pr-4 text-center" href="../pagina_login/signin.php">Logout</a>
          </div>
          <label for="sel1" class="d-block mt-1 font-weight-bold text-left">Seleziona il <b>record</b> che vuoi modificare</label>
          <select name="tendina" id="sel1" class="form-control m-0 text-left">
            <?php require_once ('popolo_menu.php');?>
          </select>
        </form>
      </div>  
    </div>
    <div class="row">
      <div class="col-sm">
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <?php require_once('lista_protetta_crescente.php'); ?>
        <?php require_once('lista_protetta_decrescente.php'); ?>
        <?php require_once('../crud/insert.php'); ?>
        <?php require_once('../crud/select.php'); ?>
        <?php require_once('../crud/update.php'); ?>
        <?php require_once('../crud/delete.php'); ?>

      </div>
    </div>
<!--fine contenuto-->