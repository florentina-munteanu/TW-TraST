<!DOCTYPE html>
<html lang='ro'>

<head>
  <title>TraST</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="../General(Meniu+Navbar)/Logo-TraST.png"/>
  <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Style.css">
  <link rel="stylesheet" type="text/css" href="../Indicatoare/Indicatoare_Style.css">
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
              <path d="M0,5 30,5" stroke="#edebd9" stroke-width="3"/>
              <path d="M0,14 30,14" stroke="#edebd9" stroke-width="3"/>
              <path d="M0,23 30,23" stroke="#edebd9" stroke-width="3"/>
          </svg>
        </a>
      </span>
      <img src="../General(Meniu+Navbar)/Logo-TraST.png" alt="Logo-TraST">
      <div class="right">
      <a href="../PaginaPrincipala/Acasa.html">Acasa</a>
      <div class="profilulTau">
      <a href="../Profil/Profil.html">Profilul meu</a>
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
    <a href="../TesteDeAntrenament/TesteDeAntrenament.html">Teste de antrenament</a>
    <a href="../ClasamentUtilizatori/ClasamentUtilizatori.html">Clasament Utilizatori</a>
    <a href="../Scholarly/ScholarlyHTML.html">Ghid de utilizare</a> 
  </div>

  

  <div class="wrapper">
    <div class="display">
      <h1>Mediu de învățare</h1>
      <div class="progress-wrapper">
        <div class="progress" id="progress" style="width: 5%;"></div>
      </div>
      <button class="next" id="button">Urmatorul</button>

      <div class="descriereCapitol">
        <h2>Indicatoare de Prioritate</h2>
        <p class="descriere">Indicatoarele de reglementare de prioritate reglementeaza ordinea de pătrundere într-o intersecție atunci când traiectoriile de deplasare a cel puțin două vehicule se intersectează sau ordinea de trecere pe sectoarele de drum îngustat, ce nu permit trecerea simultană a două vehicule venind din sensuri opuse.</p>
        <p class="descriere">Indicatoarele cu ajutorul cărora se reglementează circulația într-o intersecție sunt ”Cedeaza trecerea”, ”Oprire” și ”Drum cu prioritate”. Acestea au forme diferite față de celelalte indicatoare, pentru a putea fi identificate și atunci când sunt văzute din spate.</p>
      </div>
      
      <div class="indicatoare">
        <div class="container">
          <p>Cedeaza trecerea</p>
          <img src="../SemneRutiereRO/IndicatoareDePrioritate/CedeazăTrecerea.png" alt="Cedează trecerea"
            class="image">
          <button onclick="redirectExplicatie();">Vezi explicatia aici</button> 
        </div>

        <div class="container">
          <p>Cedeaza trecerea la distanța inscripționată</p>
          <img src="../SemneRutiereRO/IndicatoareDePrioritate/CedeazăTrecereaDistanța.png"
            alt="Cedează trecerea" class="image">
            <button>Vezi explicatia aici</button> 
        </div>

        <div class="container">
          <p>Drum cu prioritate</p>
          <img src="../SemneRutiereRO/IndicatoareDePrioritate/DrumPrioritate.png" alt="Prioritate" class="image">
          <button>Vezi explicatia aici</button> 
        </div>

        <div class="container">
          <p>Prioritate față de vehiculele din sens invers</p>
          <img src="../SemneRutiereRO/IndicatoareDePrioritate/PrioritateFață.png"
          alt="Prioritate" class="image">
          <button>Vezi explicatia aici</button> 
        </div>

        <div class="container">
          <p>Prioritate pentru vehiculele din sens invers</p>
          <img src="../SemneRutiereRO/IndicatoareDePrioritate/PrioritatePentru.png"
            alt="Prioritate" class="image">
            <button>Vezi explicatia aici</button> 
        </div>

        <div class="container">
          <p>Sfârșitul drumului cu prioritate</p>
          <img src="../SemneRutiereRO/IndicatoareDePrioritate/SfârșitulPrioritate.png" alt="Prioritate"
            class="image">
            <button>Vezi explicatia aici</button> 
          </div>

        <div class="container">
          <p>Stop</p>
          <img src="../SemneRutiereRO/IndicatoareDePrioritate/STOP.png" alt="Stop" class="image">
          <button>Vezi explicatia aici</button> 
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