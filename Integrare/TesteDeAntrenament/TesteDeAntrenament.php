<!DOCTYPE html>
<html lang='ro'>

<head>
  <meta charset="UTF-8">
  <title>TraST</title>
  <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Style.css">
  <link rel="stylesheet" type="text/css" href="../TesteDeAntrenament/TesteDeAntrenament_Style.css">
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

  <?php
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

    public function intrebare($id)
    {
      $sql = "SELECT Intrebare FROM intrebari WHERE Id=:Id";
      $cerere = BD::obtine_conexiune()->prepare($sql);
      $cerere->execute([
        'Id' => $id
      ]);
      return $cerere->fetchAll();
    }

    public function raspuns($id)
    {
      $sql = "SELECT R1,R2,R3,Corect FROM raspuns WHERE Id=:Id";
      $cerere = BD::obtine_conexiune()->prepare($sql);
      $cerere->execute([
        'Id' => $id
      ]);
      return $cerere->fetchAll();
    }
    public function trecut($email)
    {
      $sql = "SELECT punctaj FROM conturi WHERE email=:email";
      $cerere = BD::obtine_conexiune()->prepare($sql);
      $cerere->execute([
        'email' => $email
      ]);
      $punctaj = $cerere->fetchAll()[0][0];
      $punctaj++;
      echo "$punctaj";
      $sql = "UPDATE conturi SET punctaj=:punctaj WHERE email=:email";
      $cerere = BD::obtine_conexiune()->prepare($sql);
      $cerere->execute([
        'punctaj' => $punctaj,
        'email' => $email
      ]);
    }
  }
  session_start();
  $actiune = new Actiune();
  if (isset($_POST["test"])) {
    $test = $_POST["test"] + 1;
    if (isset($_POST["x0"]))
      $vector[] = intval($_POST["x0"]);
    for ($i = 1; $i < $test - 1; ++$i)
      array_push($vector, intval($_POST["x$i"]));
    do {
      $rand = rand(1, 1005);
      $bool = false;
      for ($i = 0; $i < count($vector); ++$i) {
        if ($rand === $vector[$i]) {
          $bool = true;
          break;
        }
      }
    } while ($bool);

    array_push($vector, $rand);
    $gresit = $_POST["gresit"];
    $corect = $_POST["corect"];


    $bun = $_POST["bun"];
    if (isset($_POST["A"])) $A = $_POST["A"];
    else $A = "No";
    if (isset($_POST["B"])) $B = $_POST["B"];
    else $B = "No";
    if (isset($_POST["C"])) $C = $_POST["C"];
    else $C = "No";
    if (strcmp($bun, "A") == 0 && strcmp($A, "Yes") == 0) {
      if (strcmp($bun, "B") == 0 && strcmp($B, "Yes") == 0) $gresit++;
      else if (strcmp($bun, "C") == 0 && strcmp($C, "Yes") == 0) $gresit++;
      else $corect++;
    } else if (strcmp($bun, "B") == 0 && strcmp($B, "Yes") == 0) {
      if (strcmp($bun, "A") == 0 && strcmp($A, "Yes") == 0) $gresit++;
      else if (strcmp($bun, "C") == 0 && strcmp($C, "Yes") == 0) $gresit++;
      else $corect++;
    } else if (strcmp($bun, "C") == 0 && strcmp($C, "Yes") == 0) {
      if (strcmp($bun, "B") == 0 && strcmp($B, "Yes") == 0) $gresit++;
      else if (strcmp($bun, "A") == 0 && strcmp($A, "Yes") == 0) $gresit++;
      else $corect++;
    } else $gresit++;

    $intrebare = $actiune->intrebare(end($vector))[0][0];
    $r = $actiune->raspuns(end($vector))[0];

    $r1 = $r[0];
    $r2 = $r[1];
    $r3 = $r[2];
    $bun = $r[3];

    $text = "";
    for ($i = 0; $i < count($vector); ++$i) {
      $text .= "<input type = \"hidden\" name = \"x$i\" value=\"$vector[$i]\">";
    }



    $text = "
            $text
            <input type=\"hidden\"  name =\"corect\" value = \"$corect\">
            <input type=\"hidden\"  name =\"gresit\" value = \"$gresit\">
            <input type=\"hidden\"  name =\"test\" value = \"$test\">
            <input type=\"hidden\" name = \"bun\" value = \"$bun\">
            ";
  } else {
    $test = 1;
    $vector[] = rand(1, 1005);
    $corect = 0;
    $gresit = 0;
    $intrebare = $actiune->intrebare(end($vector))[0][0];
    $r = $actiune->raspuns(end($vector))[0];

    $r1 = $r[0];
    $r2 = $r[1];
    $r3 = $r[2];
    $bun = $r[3];
    $text = "";

    $text .= "<input type = \"hidden\" name = \"x0\" value=\"$vector[0]\">";




    $text =  "
            $text
            <input type=\"hidden\"  name =\"corect\" value = \"$corect\">
            <input type=\"hidden\"  name =\"gresit\" value = \"$gresit\">
            <input type=\"hidden\"  name =\"test\" value = \"$test\">
            <input type=\"hidden\" name = \"bun\" value = \"$bun\">
            ";
  }
  $id = end($vector);
  if ($test <= 26)
    if ($gresit < 4) {
      echo "<div class=\"wrapper\">
  <div class=\"display\">
    <h1>Teste de antrenament</h1>
    <div class=\"miniCard\">
      <div class=\"nrIntrebare\">
        <p>Intrebarea $test</p>
      </div>
      <div class=\"nrRaspunsuri\">
      <div class=\"raspCorecte\">
      <p>Raspunsuri corecte:$corect</p>
      </div>
      <div class=\"raspGresite\">
      <p>Raspunsuri gresite:$gresit</p>
      </div>
      </div>
    </div>
    <div class=\"card\">
      <div class=\"text\">
        <p>$intrebare</p>
      </div>
      <div class=column>
      <div class=\"raspunsuri\">
      <form action=\"./TesteDeAntrenament.php\" method=\"post\">
        <label class=\"container\">$r1
            <input type=\"checkbox\" name=\"A\" value=\"Yes\">
            <span class=\"checkmark\"></span>
          </label>
          <label class=\"container\">$r2
            <input type=\"checkbox\"name=\"B\" value=\"Yes\">
            <span class=\"checkmark\"></span>
          </label>
          <label class=\"container\">$r3
            <input type=\"checkbox\" name=\"C\" value=\"Yes\">
            <span class=\"checkmark\"></span>
          </label>
      </div>";
      if (file_exists("./poze/$id.jpg"))
        echo "<img class=\"poza\" src=\"./poze/$id.jpg\" >";

      echo "</div>
    $text
    <button>Trimite raspunsul</button>
    <input type=\"hidden\" name = \"test\" value=\"$test\">

    </form>
  </div>
</div>
</div>";
    } else {
      echo "<form action=\"./TesteDeAntrenament.php\" method=\"post\">
    <div class=\"wrapper\">
      <div class=\"display\">
        <h1>Teste de antrenament</h1>
        <div class=\"card\">
          <div class=\"text\"
            <h2>Test picat</h2>
          </div>
          <button>Urmatorul Test</button>
        </div>
      </div>
    </div>";
    } else {
    echo "<form action=\"./TesteDeAntrenament.php\" method=\"post\">
    <div class=\"wrapper\">
      <div class=\"display\">
        <h1>Teste de antrenament</h1>
        <div class=\"card\">
          <div class=\"text\"
            <h2>Felicitari, ai trecut!</h2>
          </div>
          <button>Urmatorul Test</button>
        </div>
      </div>
    </div>";
    if (isset($_SESSION["logat"])) {
      $actiune->trecut($_SESSION["email"]);
      echo "<h1>daaaaa!</h1>";
    }
  }

  ?>
  <div class="footerPage">
    <a>@Copyright 2020 TraST</a>
  </div>

  <script src="../General(Meniu+Navbar)/Navbar_Functions.js"></script>
  <script src="../General(Meniu+Navbar)/functions.js"></script>
</body>

</html>