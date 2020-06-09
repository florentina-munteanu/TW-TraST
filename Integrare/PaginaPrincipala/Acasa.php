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
      <a href=\"../Profil/Profil.php\">Profilul meu</a>
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
  
  <div class="firstPage">
    <div class="textIntroductiv">
      <p>E imposibil sa obtineti permisul de conducere fara a sti si fara a intelege <strong>semnificatia indicatoarelor rutiere</strong>. Pentru ca in <strong>Codul Rutier</strong> exista o gama larga de semne rutiere, acest site cuprinde toate indicatoarele rutiere impreuna cu <strong>explicatiile</strong> aferente.</p>
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
    <a>Articole</a>
    <img src="../PaginaPrincipala/Articole.png" alt="articole">
  </div>
  <div class="row">
    <a>7</a>
    <a>Capitole</a>
    <img src="../PaginaPrincipala/Capitole.png" alt="capitole">
  </div>
  <div class="row">
    <a>20</a>
    <a>Teste de antrenament</a>
    <img src="../PaginaPrincipala/TesteDeAntrenament.png" alt="teste">
  </div>
  </div>

  <div>
  <div class="thirdPage">
      <div class="amplasareStanga">
        <h2 style="text-align: center;">Învață în 3 pași simpli și vei avea succes garantat!</h2>
        <ul class="text">
          <li><b>Pasul 1:</b> în <i>Legislație și teorie</i> găsiți toată legislația și teoria structurată pentru fiecare categorie de indicatoare</li>
          <br>
          <li><b>Pasul 2:</b> în <i>Indicatoare și marcaje</i> găsiți toate indicatoarele și marcajele rutiere, organizate pe capitole,  explicate pe înțelesul tuturor</li>
          <br>
          <li><b>Pasul 3:</b> în <i>Chestionare DRPCIV</i> găsiți chestionare DRPCIV ce conțin toate înrebările oficiale de la poliție. Aici vă puteți testa cunoștințele acumulate în primii 2 pași de învățare, dar și să dobândiți cunoștinte noi.</li>
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
