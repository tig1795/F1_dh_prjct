<?php

// Filtert welche Punkte in der Menüleiste "active" sind und damit hervorgehoben werden sollen
// $title = Seite, prüft ob diese mit der Kategorie übereinstimmt.
function active_or_hover ($title, $kategorie){
	if ($title == $kategorie){
	print <<<EOH
	<li class="active">
EOH;
}else{
	print <<<EOH
	<li>
EOH;
}
}

// Menükategorien: startseite statistik fahrer pokale karte about

function my_html_head ( $title) {	
    $server = $_SERVER["SERVER_NAME"]; //Abfragung der Servervariable
    print <<<EOH
  <!DOCTYPE html>
  
  <head>

  <title>F1</title>
  <link rel="stylesheet" href="../CSS/menubar.css">
  <link rel="stylesheet" href="../CSS/Fußzeile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
    <body>
   
    <div class="menu-bar">
      <div class="logo">
        <a href="Home.php"><img src="../../images/F1_Logo.png" alt="" width="140" height="78"/></a>
        </div>
      <ul>
  EOH;
  
  active_or_hover ($title, "startseite"); //$title = "index" stimmt auf der Startseite, deswegen Startseite class="active.
  
  print <<<EOH
            <a href="Home.php"><i class="fa fa-home"></i>Home</a>
  EOH;
  
  active_or_hover ($title, "statistik");
  
  print <<<EOH
  <a href="#"><i class="fa fa-calculator"></i>Statistics</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="index.php">Fahrerwertung</a></li>
            <li><a href="constructeur.php">Konstrukteure</a></li>
        </ul>
                
                  
  EOH;
  
  print <<<EOH
                
          </div>
        </li>
  EOH;
  
  active_or_hover ($title, "fahrer");
  
  print <<<EOH
  
  <a href="#"><i class="fa fa-car"></i>Legends</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="MSC.php">Michael Schumacher</a></li>
            <li class="hover-me"><a href="LH.php">Lewis Hamilton</a></li>
            <li class="hover-me"><a href="Senna.php">Ayrton Senna</a></li>
            <li class="hover-me"><a href="Seb.php">Sebastian Vettel</a></li>
            <li class="hover-me"><a href="Lauda.php">Niki Lauda</a></li>
            <li class="hover-me"><a href="Clark.php">Jim Clark</a></li>
            <li class="hover-me"><a href="Mansell.php">Niguel Mansell</a></li>
            <li class="hover-me"><a href="Prost.php">Alain Prost</a></li>
            <li class="hover-me"><a href="Rosberg.php">Nico Rosberg</a></li>
        </ul>
    </div>
  EOH;
  
  active_or_hover ($title, "Games");
  
  print <<<EOH
  <a href="#"><i class="fa fa-desktop"></i>F1Game</a>
    <div class="sub-menu-1">
      <ul>
      <li><a href="Games.php">F1 2019 vs F1 2021</a></li>
      <li class="hover-me"><a href="simulator.php">Fahrsimulator</a></li>
      </ul>
    </div>
  EOH;
  
  active_or_hover ($title, "karte");
  
  print <<<EOH

  <a href="Map.php"><i class="fa fa-calendar"></i>Calendar</a>
  EOH;
  
  active_or_hover ($title, "about");
  
  print <<<EOH
  <a href="#"><i class="fa fa-users"></i>Teams</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="Mercedes.php">Mercedes-AMG Petronas</a></li>
            <li class="hover-me"><a href="Red Bull.php">Red Bull Racing</a></li>
            <li class="hover-me"><a href="Ferrari.php">Scuderia Ferrari</a></li>
            <li class="hover-me"><a href="Aston.php">Aston Martin F1 Team</a></li>
            <li class="hover-me"><a href="McLaren.php">McLaren F1 Team</a></li>
            <li class="hover-me"><a href="Alpin.php">Alpine F1 Team</a></li>
            <li class="hover-me"><a href="Alpha.php">AlphaTauri</a></li>
            <li class="hover-me"><a href="Romeo.php">Alfa Romeo Racing</a></li>
            <li class="hover-me"><a href="Williams.php">Williams Racing</a></li>
            <li class="hover-me"><a href="Haas.php">Haas F1</a></li>
        </ul>
    </div>
  EOH;
  
        if(!isset($_SESSION['userid'])) {
      echo '<li><a href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Login</a></li>';
  }else{
      /*echo "Hallo User: ".$userid;*/
      echo <<<eoh
      <li><a href="#">
  eoh;
  $userid = $_SESSION['userid'];
  $name_der_db  = "f1";
  $benutzer     = "root";
  $passwort     = "";
  $tabellenname = "f1_driver_wm_standings";
  
  $links = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  $usernames = "SELECT 
      id,
      vorname
      FROM users WHERE id=$userid";
      $erg = mysqli_query ( $links, $usernames );
      while ( $zeile = mysqli_fetch_array ( $erg, MYSQLI_ASSOC ) ) {
      echo "<text>".$zeile["vorname"]. " </text>";
      }
      print <<<eoh
      
      <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
          <div class="sub-menu-1">
              <ul>
                   <li><a href="logout.php">Logout</a></li>
              </ul>
          </div>
        </li>
  eoh;
  } 
        print <<<EOH
      </ul>
    </div>
  EOH;
  }
  

//Datenbankverbindung für mysqli prüfen
function our_sql_connect ( $server, $benutzer, $passwort, $name_der_db ) {
    if ( $link = @mysqli_connect ( $server, $benutzer, $passwort, $name_der_db ) ) {
      //echo "<br>v ok"; 
      echo "";
    } else {
      echo "<br>v nicht ok";
      exit;
    }
    return $link;
  }

//um die issets abzukürzen und zu prüfen
//isset = Php-Funktion, überprüft, ob das $_REQUEST true oder false zurückgibt.
//$_REQUEST für Datenabrufung, die vorher mit method="post" zur Verfügung gestellt wurden.
function my_isset_post ( $text ) {
    if ( isset ( $_REQUEST["$text"] )) {
      $string = trim ( $_REQUEST["$text"] );
    } else {
      $string = "";
    } 
    return $string;
  }
  
// Statischer HTML Fuss, nach dem Seiteninhalt
function my_html_foot () {
  print<<<EndOfHtml
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <hr>
  <br>
<div id="footer">
  <div id="left">Impressum<br>
  <br>
  <ul>
    <li><a href="About.php" style="color: black; text-decoration: none" title="About"><i class="fa fa-info"></i> About</a><li>
    <br>
  </ul>
  </div>
  <div id="center">Quicklinks<br>
  <br>
  <ul>
    <li><a href="https://www.formula1.com/en/latest/article.revealed-discover-your-favourite-drivers-official-rating-in-the-new-f1-2021.H1aUDacRLzPiwvNRrIw2z.html" style="color: black; text-decoration: none" title="Lieblingsrezpte" target="_blank"><i class="fa fa-copyright"></i> F1 2021 Gameplay Rating</a><li>
    <li><a href="https://www.formula1.com/en.html" style="color: black; text-decoration: none" title="Lieblingsrezpte" target="_blank"><i class="fa fa-copyright"></i> Official Formula 1 website</a><li>
    <br>
  </ul>
  </div>
  <div id="right">Newsletter<br>
  <br>
  <ul>
    <li><a href="https://www.formula1.com/en/register-for-free-now.html#de" style="color: black; text-decoration: none" title="Zum Newsletter anmelden" target="_blank"><i class="fa fa-registered"></i> Register here!</a><li><br>
    <br>
  </ul>
  </div>
  
  </div>
  </body>
</html>
EndOfHtml;
}

function my_html_head2 () {	
  $server = $_SERVER["SERVER_NAME"]; //Abfragung der Servervariable
  print <<<EOH
  <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../CSS/menubar_copy.css">
        <link rel="stylesheet" href="../CSS/Fußzeile.css">
        <title>Responsive menu dropdown</title>
    </head>
    <body>
        <header class="header">
            <a href="MenuBar.php" class="header__logo">F1</a>

            <i class='bx bx-menu header__toggle' id="header-toggle"></i>

            <nav class="nav" id="nav-menu">
                <div class="nav__content bd-grid">
                    <a href="MenuBar.php" class="nav__perfil">
                        <div class="nav__img">
                            <img src="../../images/F1_Logo.png" alt="">
                        </div>
                        <!-- 
                        <div>
                            <span class="nav__name">Clay</span>
                            <span class="nav__name">Mitchell</span>
                        </div> -->
                    </a>
    
                    <div class="nav__menu">
                        <ul class="nav__list">
                        
                            <li class="nav__item"><a href="MenuBar.php" class="nav__link active">Home</a></li>
    
                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link dropdown__link">Statistics <i class='bx bx-chevron-down dropdown__icon'></i></a>
                                    
                                <ul class="dropdown__menu">
                                    <li class="dropdown__item"><a href="index.php" class="nav__link">Fahrerwertung</a></li>
                                    <li class="dropdown__item"><a href="constructeur.php" class="nav__link">Konstrukteure</a></li>
                                </ul>
                            </li>
    
                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link dropdown__link">Legends <i class='bx bx-chevron-down dropdown__icon'></i></a>
                                <ul class="dropdown__menu">
                                    <li class="dropdown__item"><a href="MSC.php" class="nav__link">Michael Schumacher</a></li>
                                    <li class="dropdown__item"><a href="LH.php" class="nav__link">Lewis Hamilton</a></li>
                                    <li class="dropdown__item"><a href="Senna.php" class="nav__link">Ayrton Senna</a></li>
                                    <li class="dropdown__item"><a href="Seb.php" class="nav__link">Sebastian Vettel</a></li>
                                    <li class="dropdown__item"><a href="Lauda.php" class="nav__link">Niki Lauda</a></li>
                                    <li class="dropdown__item"><a href="Clark.php" class="nav__link">Jim Clark</a></li>
                                    <li class="dropdown__item"><a href="Mansell.php" class="nav__link">Niguel Mansell</a></li>
                                    <li class="dropdown__item"><a href="Prost.php" class="nav__link">Alain Prost</a></li>
                                    <li class="dropdown__item"><a href="Rosberg.php" class="nav__link">Nico Rosberg</a></li>
                                </ul>
                            </li>

                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link dropdown__link">F1 Games <i class='bx bx-chevron-down dropdown__icon'></i></a>
                                    
    
                                <ul class="dropdown__menu">
                                    <li class="dropdown__item"><a href="Games.php" class="nav__link">F1 2019 vs. F1 2021</a></li>
                                    <li class="dropdown__item"><a href="simulator.php" class="nav__link">Fahrsimulator</a></li>
                                </ul>
                            </li>

                            <li class="nav__item"><a href="Map.php" class="nav__link">Calendar</a></li>

                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link dropdown__link">Teams <i class='bx bx-chevron-down dropdown__icon'></i></a>
                                    
    
                                <ul class="dropdown__menu">
                                    <li class="dropdown__item"><a href="Mercedes.php" class="nav__link">Mercedes-AMG Petronas</a></li>
                                    <li class="dropdown__item"><a href="Red Bull.php" class="nav__link">Red Bull Racing</a></li>
                                    <li class="dropdown__item"><a href="Ferrari.php" class="nav__link">Scuderia Ferrari</a></li>
                                    <li class="dropdown__item"><a href="Aston.php" class="nav__link">Aston Martin F1 Team</a></li>
                                    <li class="dropdown__item"><a href="McLaren.php" class="nav__link">McLaren F1 Team</a></li>
                                    <li class="dropdown__item"><a href="Alpin.php" class="nav__link">Alpine F1 Team</a></li>
                                    <li class="dropdown__item"><a href="Alpha.php" class="nav__link">AlphaTauri</a></li>
                                    <li class="dropdown__item"><a href="Romeo.php" class="nav__link">Alfa Romeo Racing</a></li>
                                    <li class="dropdown__item"><a href="Williams.php" class="nav__link">Williams Racing</a></li>
                                    <li class="dropdown__item"><a href="Haas.php" class="nav__link">Haas F1</a></li>
                                </ul>
                            </li>
                            <li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--===== MAIN JS =====-->
        <script src="../JavaScript/script.js"></script>
    </body>
</html>
EOH; 
}
?>