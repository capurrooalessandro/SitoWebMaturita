<form action="check_login.php" method="POST">
  <div class="form-group"> <!-- campo del nome utente-->
    <label for="testo">Username:</label>
    <input type="text" class="form-control" id="testo" name="username" placeholder="Username" required>
  </div>
  <div class="form-group"> <!-- campo delle credenziali-->
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <button type="submit" class="btn btn-primary bg-primary mr-1 btn-lg" name="accedi" value="invio2">Accedi</button> <!-- bottone che serve per inserire i dati/il record nel db -->
      <button type="reset" class="btn btn-primary bg-danger text-white btn-lg">Reset</button> <!-- bottone che resetta i campi delle form -->
    </div>
  </div>
</form>