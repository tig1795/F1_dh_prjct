<!-- Code der Menüleiste -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <link rel="stylesheet" href="../CSS/menubar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
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
<!-- Inhalt der Seite -->
    <div class="info">
<h2>Impressum</h2>
</br>
<p>Diese Website wurde von Timo Günther für das Projekt in den Digital Humanities an der Julius-Maximilians Universität Würzburg erstellt.</p>
    </br>
<p>Gegenstand dieser Website soll es sein einen statistischen Überblick sowohl über die aktuelle als auch die vergangenen Formel 1 Saisons zu geben.</p>
    </br>
<p>Die dargestellten Informationen auf dieser Website stammen aus folgenden Quellen:</p>
    </br>
<li>https://www.formula1.com/</li>
<li>https://de.wikipedia.org/wiki/Liste_der_Formel-1-Weltmeister</li>
<li>https://de.wikipedia.org/wiki/Formel-1-Statistik</li>

</body>
</html>