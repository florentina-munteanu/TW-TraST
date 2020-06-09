<!DOCTYPE html>
<html lang='ro'>

<head>
  <meta charset="UTF-8">
  <title>TraST</title>
  <link rel="shortcut icon" type="image/x-icon" href="../General(Meniu+Navbar)/Logo-TraST.png" />
  <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Style.css">
  <link rel="stylesheet" type="text/css" href="../Indicatoare/ExplicatieIndicator_Style.css">
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

  <?php
  $indicator = $_POST["indicator"];
  $capitol = $_POST["capitol"];
  class BD
  {
    private static $conexiune_bd = NULL;
    public static function obtine_conexiune()
    {
      if (is_null(self::$conexiune_bd))
        self::$conexiune_bd = new PDO('mysql:host=localhost;dbname=autotest', 'cristi', 'cristi');
      return self::$conexiune_bd;
    }
  }
  class Actiune
  {
    public function getExplicatii($id)
    {
      $sql = "SELECT text FROM indicatoare_de_avertizare WHERE id=:id";
      $cerere = BD::obtine_conexiune()->prepare($sql);
      $cerere->execute([
        'id' => $id
      ]);
      return $cerere->fetchAll();
    }
  }
  session_start();
  $actiune = new Actiune();

  ?>

  <div class="wrapper">
    <div class="display">
      <h1><?php echo $capitol; ?></h1>
      <div class="miniCard">
        <div class="titluIndicator">
          <p><?php echo $indicator; ?></p>
        </div>
      </div>
      <div class="card">
        <div class="detalii">
          <div class="wrapText">
            <p><?php $actiune = new Actiune(); echo $actiune->getExplicatii($indicator)[0][0]; ?></p>
          </div>
          <div class="wrapImg">
            <img class="imagine" src="../SemneRutiereRO/<?php echo "$capitol./$indicator"; ?>.png" alt="Indicator Invalid">
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../General(Meniu+Navbar)/Navbar_Functions.js"></script>
  <script src="../General(Meniu+Navbar)/functions.js"></script>
</body>

</html>