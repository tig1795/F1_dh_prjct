<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Red Bull Racing</title>
	<link rel="stylesheet" href="../CSS/teams.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<?php
session_start(); // session_start() ermöglicht Zugriff auf den Session Cookie, der die userid beinhaltet.
                // Ohne Session_start () könnte man sich nicht einloggen, sobald man die Login-Seite verlässt, wäre man ausgeloggt.
                // Da nirgendwo der Loginstatus hinterlegt wäre.

// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"]; //Hinterlegte Pfade
$script = $_SERVER["SCRIPT_NAME"]; //Hinterlgete Pfade //wird vermutlich nicht benutzt. 
require ( "funktionen.php" );

// Menükategorien: index rezepte magazin community videos dinner meinkochbuch
$title ="about";
my_html_head ( $title );  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

?>
<br>

<h2>Red Bull Racing Fahrer 2021</h2>

<br>
<br>
<div class="linke_spalte">
<div class="ce_image block" id="bild_1">
  <img src="../../images/Verstappen.jpg">
</div>
<div class="ce_text block" id="text_1">
  <br>
  <p>Max Verstappen</p>
</div>
</div>

<div class="rechte_spalte">
<div class="ce_image block" id="bild_2">
<img src="../../images/Perez.jpg">
</div>
<div class="ce_text block" id="text_2">
  <br>
  <p>Sergio Perez</p>
</div>
</div>

</body>
</html>