<?php
  

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
?>