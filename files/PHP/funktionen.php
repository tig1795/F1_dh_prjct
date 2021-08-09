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
            <li class="hover-me"><a href="LH.php">Lewis Hamilton</a>
            </li>
            <li class="hover-me"><a href="Senna.php">Ayrton Senna</a>    
          </li>
        </ul>
    </div>
  EOH;
  
  active_or_hover ($title, "community");
  
  print <<<EOH
  <a href="#"><i class="fa fa-trophy"></i>Trophies</a>
  EOH;
  
  active_or_hover ($title, "karte");
  
  print <<<EOH

  <a href="Map.php"><i class="fa fa-calendar"></i>Calendar</a>
  EOH;
  
  active_or_hover ($title, "about");
  
  print <<<EOH
  <a href="#"><i class="fa fa-users"></i>Teams</a>
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


?>