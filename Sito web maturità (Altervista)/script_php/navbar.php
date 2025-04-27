<?php 
  if ($page =="index") {
  echo <<< END
    <div class="row navbar navbar-expand-xl navbar-dark sticky-top" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="navbaricon"></span>
    </button>
    <div class="col collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link mx-auto text-center text-light" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-auto text-center" href="page1.php">Esempi di sintetizzatori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-auto text-center" href="lista.php">Lista di sintetizzatori</a>
        </li>
      </ul>
    </div>
    </div>
  END;
  } else if ($page == "page1") {
  echo <<< END
    <div class="row navbar navbar-expand-xl navbar-dark sticky-top" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="navbaricon"></span>
    </button>
    <div class="col collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link mx-auto text-center" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-auto text-center text-light" href="page1.php">Esempi di sintetizzatori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-auto text-center" href="lista.php">Lista di sintetizzatori</a>
        </li>
      </ul>
    </div>
    </div>
  END;
  } else if ($page == "lista") {
  echo <<< END
    <div class="row navbar navbar-expand-xl navbar-dark sticky-top" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="navbaricon"></span>
    </button>
    <div class="col collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link mx-auto text-center" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-auto text-center" href="page1.php">Esempi di sintetizzatori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-auto text-center text-light" href="lista.php">Lista di sintetizzatori</a>
        </li>
      </ul>
    </div>
    </div>
  END;
  } else if ($page == "login") {
    echo <<< END
      <div class="row navbar navbar-expand-xl navbar-dark sticky-top" id="navbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" id="navbaricon"></span>
      </button>
      <div class="col collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link mx-auto text-center" href="../index.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-auto text-center" href="../page1.php">Esempi di sintetizzatori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-auto text-center" href="../lista.php">Lista di sintetizzatori</a>
          </li>
        </ul>
      </div>
      </div>
    END;
    } else if ($page == "lista1") {
      echo <<< END
        <div class="row navbar navbar-expand-xl navbar-dark sticky-top" id="navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" id="navbaricon"></span>
        </button>
        <div class="col collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link mx-auto text-center" href="../index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-auto text-center" href="../page1.php">Esempi di sintetizzatori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-auto text-center text-light" href="../lista.php">Lista di sintetizzatori</a>
            </li>
          </ul>
        </div>
        </div>
      END;
      }        
?> 