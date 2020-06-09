<!DOCTYPE html>
<html lang='ro'>
    
<head>
    <meta charset="UTF-8">
    <title>TraST</title>
    <link rel="shortcut icon" type="image/x-icon" href="../General(Meniu+Navbar)/Logo-TraST.png"/>
    <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Style.css">
    <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Meniu_Style.css">
    <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Navbar_Style.css">
    <link rel="stylesheet" type="text/css" href="../PaginaPrincipala/Acasa_Style.css">
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
      
      <?php
      class BD{
    private static $conexiune_bd = NULL;
    public static function obtine_conexiune(){
        if(is_null(self::$conexiune_bd))
            self::$conexiune_bd = new PDO('mysql:host=localhost;dbname=autotest', 'cristi', 'cristi');
	    return self::$conexiune_bd;
    }
}
      session_start();

      if(isset($_POST["email"])){
        $email = $_POST["email"];
        $nume = $_POST["nume"];
        $prenume = $_POST["prenume"];
        $parola = $_POST["psw"];
        $sql = "INSERT INTO conturi (email,nume,prenume,parola,punctaj) VALUES(:email,:nume,:prenume,:parola,0)";
        $cerere = BD::obtine_conexiune()->prepare($sql);
        $cerere->execute([
            'email' => $email,
            'nume' => $nume,
            'prenume' => $prenume,
            'parola' => $parola
        ]);
        $_SESSION["logat"] = true;
        $_SESSION["email"] = $_POST["email"];
	  }

      if(isset($_POST["deco"])) $_SESSION["logat"]=false;
      if(isset($_SESSION["logat"]) && $_SESSION["logat"] == true)
        echo "<div class=\"profilulTau\">
      <a href=\"../Profil/Profil.php\">Prófílinn minn</a>
      <img src=\"../PaginaPrincipala/Profil_Icon.png\" alt=\"Profil_Icon\">
      </div>";
    ?>
    <div class="language">
          <a href="../PaginaPrincipala/Acasa.php">Lb. romana</a>
          <a href="../PaginaPrincipala/AcasaISL.php">Lb. islandeza</a>
    </div>
    </div>
    </nav>
  </div>
    
    
    <div id="side-menu" class="side-nav">
      <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
      <a href="../Legislatie/RegulamentCodRutier.html">Reglugerð og leiðarkóðir</a>
      <a href="../Indicatoare/MediuDeInvatare.html">Námsumhverfi</a>
      <button class="dropdown-btn">Kafla
        <i class="fa fa-caret-down">&#9660;</i>
      </button>
      <div class="dropdown-container">
      <a href="../Indicatoare/IndicatoareDeAvertizare.html">Viðvörunarvísar</a>
      <a href="../Indicatoare/IndicatoareDePrioritate.html">Forgangsvísar</a>
      <a href="../Indicatoare/IndicatoareDeRestrictie.html">Vísir um bann / takmörkun</a>
      <a href="../Indicatoare/IndicatoareDeObligare.html">Skylduvísar</a>
      <a href="../Indicatoare/IndicatoareOrientative.html">Stefnumörkun</a>
      <a href="../Indicatoare/IndicatoareDeInformare.html">Upplýsingar vísbendingar</a>
      <a href="../Indicatoare/PanouriAditionale.html">Viðbótar spjöld</a> 
    </div>
    <a href="../TesteDeAntrenament/TesteDeAntrenamentISL.php">Þjálfunarpróf</a>
    <a href="../ClasamentUtilizatori/ClasamentUtilizatori.php">Notandi röðun</a>
    <a href="../Scholarly/ScholarlyHTML.html">Notkunarleiðbeiningar</a>  
  </div>
  
  <div class="firstPage">
    <div class="textIntroductiv">
      <p>Það er ómögulegt að fá ökuskírteini án þess að vita og skilja <strong> merkingu vegamerkja </strong>. Vegna þess að það er mikið úrval vegamerkja í <strong> vegakóða </strong>, inniheldur þessi síða öll vegskilti ásamt tilheyrandi <strong> skýringum </strong>.</p>
      <?php
      if(!(isset($_SESSION["logat"]) && $_SESSION["logat"] == true))
      echo "
      <form action=\"../Autentificare/Register.html\">
      <button>Inregistreaza-te</button>
      </form>
      <form action=\"../Autentificare/Login.php\">
      <button>Conecteaza-te</button>
      </form>";
      ?>

    </div>
  </div>
 
  <div class="secondPage">
  <div class="row">
    <a>120</a>
    <a>leirmunir</a>
    <img src="../PaginaPrincipala/Articole.png" alt="articole">
  </div>
  <div class="row">
    <a>7</a>
    <a>Kafla</a>
    <img src="../PaginaPrincipala/Capitole.png" alt="capitole">
  </div>
  <div class="row">
    <a>20</a>
    <a>Þjálfunarpróf</a>
    <img src="../PaginaPrincipala/TesteDeAntrenament.png" alt="teste">
  </div>
  </div>

  <div>
  <div class="thirdPage">
      <div class="amplasareStanga">
        <h2 style="text-align: center;">Lærðu í þremur einföldum skrefum og þú munt hafa tryggt árangur!</h2>
        <ul class="text">
          <li><b> Skref 1: </b> í <i> Löggjöf og kenning </i> finna allar lagasetningar og kenningar uppbyggðar fyrir hvern flokk vísbendinga.</li>
          <br>
          <li><b> Skref 2: </b> í <i> skiltum og merkingum </i> þú munt finna öll vegmerkin og merkingarnar, skipulagðar eftir köflum, útskýrt fyrir alla að skilja.</li>
          <br>
          <li><b> Skref 3: </b> Í <i> DRPCIV spurningalista </i> finnur þú DRPCIV spurningalista sem innihalda allar opinberu spurningarnar frá lögreglunni. Hér getur þú prófað þekkingu þína sem fengin voru í fyrstu 2 skrefum námsins, en einnig til að afla nýrrar þekkingar.</li>
        </ul>
      </div>
      <div class="amplasareDreapta">
        <img src="../PaginaPrincipala/Despre.png" alt="Copii cu indicatoare">
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
