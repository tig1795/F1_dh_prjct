<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>F1 Simulator</title>
	<link rel="stylesheet" href="../CSS/text.css">
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
$title ="Games";
my_html_head ( $title );  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

print <<<EOH
<br>  
<h1>Formel 1 Simulator</h1>
<br>
<br>
<br>
<div class="introduction">
<p>
Lange Zeit schien es, als wenn man Millionen von Euro in ein ausrangiertes Formel-1-Fahrzeug investieren müsste,
um herauszufinden wie es sich anfühlt ein solches zu steuern. Doch mit dem Fortschritt der mordernen Technik,
konnte das Erlebnis einen Formel-1-Wagen zu steuern durch eine praktischere Lösung ermöglicht werden. 
Durch Fahrten im Simulator kann mittlerweile ein gefühlsechtes Formel-1-Erlebnis vermittelt werden.


EOH;