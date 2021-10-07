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
$title ="games";
my_html_head2 ($title);  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

print <<<EOH
<br>
<br>
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
Durch Fahrten im Simulator kann mittlerweile ein gefühlsechtes Formel-1-Erlebnis vermittelt werden.<br>
<br>
Ein Formel-1-Simulator besteht, wie die echten Formel 1 Rennwagen ebenfalls aus Kohlefaser und man erlebt die
Fahrerperspektive ebenfalls aus einer tiefen Sitzposition, die der in einem Formel-1 Auto sehr nahe kommt.<br>
<br>
Genauso komplex wie in der Königsklasse ist ebenfalls das Lenkrad des Simulators. Auf diesem befinden sich zahlreiche
Knöpfe mit welchen man beispielsweise den verstellbaren Heckflügel (Drag Reduction System (DRS)) aktivieren,
die Bremsbalanca verstellen und das Hybridsystem oder auch die automatische Antischlupfregulierung
entsprechend anpassen kann.<br>
<br>
Die dynamische Belastung der Räder wird durch das Steuerungssystem simuliert. Damit ist gemeint, sollte der User
im Simulator beispielsweise über einen Curb oder eine Bodenwelle fahren, spürt er dies aufgrund von Vibrationen.
Des Weiteren sind die Servolenkung und der Bremskraft-Drucksensor des Simulators ebenfalls der Formel 1 nachempfunden.
Die Simulation der Kräfte beim Bremsen und die Querbeschleunigungskraft in den Kurven werden durch Aktivgurte nachgestellt. 
Dadurch ist der Simulator in der Lage Kräfte bis zu 5g (dem Fünffachen des eigenen Köprergewichts) an den Fahrer zu übertragen.<br>
<br>
Die Software des Simulators verfügt über vier Modi, welche die verschiedenen Sicherheitsstufen nachstellen.
Wenn sich ein Nutzer beispielsweise für den zweiten Modus entschieden hat, dann fährt dieser mit einem 
manuellen Schaltgetriebe, aber dafür mit aktiviertem Antiblockiersystem (ABS) und aktivierter Traktionskontrolle.
Im schwiergisten Modus, dem vierten Modus, gibt es keinerlei Fahrhilfen, wodurch dieser Modus echtes Formel-1-Fahrgefühl
vermittelt.
<br>
<br>
<div class="video-container-wrapper">
<div class="video-container">
<iframe src="https://www.youtube.com/embed/ApgTin5OU8M" width="300" height="150" frameborder="0" allowfullscreen="allowfullscreen">
</iframe>
</div>
</div>
</div>
<br>
<br>

EOH;

my_html_foot()

?>