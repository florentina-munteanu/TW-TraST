<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="../General(Meniu+Navbar)/Logo-TraST.png"/>
        <link rel="stylesheet" type="text/css" href="../General(Meniu+Navbar)/Style.css">
        <link rel="stylesheet" type="text/css" href="../Autentificare/Autentificare_Style.css">
    </head>
    <body>
        <div class="amplasareStanga">
            <div class="container">
                <img alt="Logo-TraST" src="../General(Meniu+Navbar)/Logo-TraST.png">
                <?php

                if(!isset($_POST["email"]))
                    echo "<h1>Skrá inn</h1>
                <form action=\"./Login.php\" method=\"post\">
                    <div class=\"inputBox\">
                    <label for=\"email\"><b>Netfang</b></label>
                    <input type=\"text\" placeholder=\"Netfang\" name=\"email\" required>
                    </div>
                    <div class=\"inputBox\">
                    <label for=\"psw\"><b>Lykilorð</b></label>
                    <input type=\"password\" placeholder=\"Lykilorð\" name=\"psw\" required>
                    </div>
                    <div class=\"inputBox\">
                    <input type=\"submit\" name=\"aut\" value=\"Skrá inn\">
                    </div>
                </form>
                <div class=\"link\">
                <a href=\"#\" align-items=\"left\">Gleymdirðu lykilorðinu þínu?</a>
                <a href=\"../Autentificare/Register.html\" align-items=\"right\">Ertu ekki með reikning? Skráðu þig</a>
                </div>";
                else{
                    class BD{
                            private static $conexiune_bd = NULL;
                            public static function obtine_conexiune(){
                            if(is_null(self::$conexiune_bd))
                                self::$conexiune_bd = new PDO('mysql:host=localhost;dbname=users', 'cristi', 'cristi');
	                        return self::$conexiune_bd;
                        }
                    }

                    class Actiune{

                        public function verificaUtilizator($email,$parola){
                            $sql = "SELECT COUNT(*) FROM users WHERE email=:email AND parola=:parola" ;
                            $cerere = BD::obtine_conexiune()->prepare($sql);
                            $cerere->execute([
                                'email' => $email,
                                'parola' => $parola
                            ]);
                            return $cerere->fetchAll();
                        }   

                    }   
                    session_start();
                    $actiune = new Actiune();
                    $email = $_POST["email"];
                    $parola = $_POST["psw"];
                    if($actiune -> verificaUtilizator($email, $parola)[0][0] ==1){
                        echo "<h1>Logat</h1>";
                        $_SESSION["logat"] = true;
                        $_SESSION["email"] = $email;
                        echo "<a href=\"../PaginaPrincipala/Acasa.php\">Panouri aditionale</a> ";
                    }
                    else echo "<h1>Nu</h1>";
				}


                ?>
            </div>
        </div>
        <div class="amplasareDreapta">
            <img src="../Autentificare/welcomeImage.png" alt="welcomeImage">
        </div>
    </body>
</html>