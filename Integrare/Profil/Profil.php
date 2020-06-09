﻿<!DOCTYPE html>
<html>

<head>
  <title>TraST</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Style.css">
  <link rel="stylesheet" type="text/css" href="../Profil/Profil_Style.css">
  <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Meniu_Style.css">
  <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Navbar_Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div id="NavBar">
    <nav class="navbar" id="navi">
      <span class="open-slide">
        <a href="#" onclick="openSlideMenu()">
          <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#edebd9" stroke-width="3" />
            <path d="M0,14 30,14" stroke="#edebd9" stroke-width="3" />
            <path d="M0,23 30,23" stroke="#edebd9" stroke-width="3" />
          </svg>
        </a>
      </span>
      <img src="../General(Meniu+Navbar)/Logo-TraST.png" alt="Logo-TraST">
      <div class="right">
        <a href="../PaginaPrincipala/Acasa.php">Acasa</a>
        <div class="profilulTau">
          <a href="../Profil/Profil.php">Profilul meu</a>
          <img src="../PaginaPrincipala/Profil_Icon.png" alt="Profil_Icon">
        </div>
        <div class="language">
          <a href="../PaginaPrincipala/Acasa.php">Lb. romana</a>
          <a href="../PaginaPrincipala/AcasaISL.php">Lb. islandeza</a>
    </div>
      </div>
    </nav>
  </div>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="../Legislatie/RegulamentCodRutier.html">Regulament si codul rutier</a>
    <a href="../Indicatoare/MediuDeInvatare.html">Mediu de invatare</a>
    <button class="dropdown-btn">Capitole
      <i class="fa fa-caret-down">&#9660;</i>
    </button>
    <div class="dropdown-container">
      <a href="../Indicatoare/IndicatoareDeAvertizare.html">Indicatoare de avertizare</a>
      <a href="../Indicatoare/IndicatoareDePrioritate.html">Indicatoare de prioritate</a>
      <a href="../Indicatoare/IndicatoareDeRestrictie.html">Indicatoare de interzicere/restrictie</a>
      <a href="../Indicatoare/IndicatoareDeObligare.html">Indicatoare de obligare</a>
      <a href="../Indicatoare/IndicatoareOrientative.html">Indicatoare de orientare</a>
      <a href="../Indicatoare/IndicatoareDeInformare.html">Indicatoare de informare</a>
      <a href="../Indicatoare/PanouriAditionale.html">Panouri aditionale</a>
    </div>
    <a href="../TesteDeAntrenament/TesteDeAntrenament.php">Teste de antrenament</a>
    <a href="../ClasamentUtilizatori/ClasamentUtilizatori.php">Clasament Utilizatori</a>
    <a href="../Scholarly/ScholarlyHTML.html">Ghid de utilizare</a> 
  </div>

  <div class="display">
    <div class="wrapper">
      <div class="cardblock">
        <h2>Contul tau</h2>
        <div class="card">
          <div class="colorBack">
            <h3>Profil</h3>
          </div>

          <div class="inputBox">
            <label for="nume"><b>Nume</b></label>
            <input type="text" placeholder="Nume" name="nume" required>
          </div>
          <div class="inputBox">
            <label for="prenume"><b>Prenume</b></label>
            <input type="text" placeholder="Prenume" name="prenume" required>
          </div>
          <div class="inputBox">
            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Adresa de E-mail" name="email" required>
          </div>
          <div class="inputBox">
            <label for="psw"><b>Parolă nouă</b></label>
            <input type="password" placeholder="Parola" name="psw" required>
          </div>
          <div class="inputBox">
            <input type="submit" value="Salvează modificările">
            <form action="../PaginaPrincipala/Acasa.php" method="post">
              <input type="submit" name="deco" value="Deconecteză-te">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="wrapper">
      <h2>Progresul tau</h2>
      <div class="progresCard">
        <div class="colorBack">
          <h4>Mediu de invatare</h4>
        </div>

        <div class="capitol">
          <h4>Capitol 1</h4>
          <div class="progress-wrapper">
            <div class="progress" id="progress" style="width: 5%;"></div>
          </div>
          <input type="submit" value="Reseteaza">
        </div>

        <div class="capitol">
          <h4>Capitol 1</h4>
          <div class="progress-wrapper">
            <div class="progress" id="progress" style="width: 5%;"></div>
          </div>
          <input type="submit" value="Reseteaza">
        </div>

        <div class="capitol">
          <h4>Capitol 1</h4>
          <div class="progress-wrapper">
            <div class="progress" id="progress" style="width: 5%;"></div>
          </div>
          <input type="submit" value="Reseteaza">
        </div>

        <div class="capitol">
          <h4>Capitol 1</h4>
          <div class="progress-wrapper">
            <div class="progress" id="progress" style="width: 5%;"></div>
          </div>
          <input type="submit" value="Reseteaza">
        </div>

        <div class="capitol">
          <h4>Capitol 1</h4>
          <div class="progress-wrapper">
            <div class="progress" id="progress" style="width: 5%;"></div>
          </div>
          <input type="submit" value="Reseteaza">
        </div>

        <div class="capitol">
          <h4>Capitol 1</h4>
          <div class="progress-wrapper">
            <div class="progress" id="progress" style="width: 5%;"></div>
          </div>
          <input type="submit" value="Reseteaza">
        </div>

      </div>
    </div>
  </div>

  <div class="footerPage">
    <a>@Copyright 2020 TraST</a>
  </div>

  <script src="../General(Meniu+Navbar)/Navbar_Functions.js"></script>
  <script src="../General(Meniu+Navbar)/functions.js"></script>
</body>

</html>