<?php 
  if ($page =="index") {
  echo <<< END
  <div class="row">
    <div class="col text-center p-4" id="header">
      <h1>Home</h1>
    </div>
  </div>
  END;
  } else if ($page == "page1") {
    echo <<< END
    <div class="row">
      <div class="col text-center p-4" id="header">
        <h1>Esempi di sintetizzatori</h1>
      </div>
    </div>
    END;
  } else if ($page == "lista") {
  echo <<< END
  <div class="row">
    <div class="col text-center p-4" id="header">
      <h1>Lista di sintetizzatori (Ospite)</h1>
    </div>
  </div>
  END;
  } else if ($page == "login") {
  echo <<< END
  <div class="row">
    <div class="col text-center p-4" id="header">
        <h1>Login alla pagina riservata</h1>
    </div>
  </div>
  END;
  } else if ($page == "lista1") {
    echo <<< END
    <div class="row">
      <div class="col text-center p-4" id="header">
        <h1>Lista di sintetizzatori (Admin)</h1>
      </div>
    </div>
    END;
    }     
?> 