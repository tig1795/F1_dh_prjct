<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../CSS/text.css">
	<link rel="stylesheet" href="../CSS/style2.0.css">
    <link rel="stylesheet" href="../CSS/Fußzeile.css">
	
	<title>F1 Simulator</title>
</head>
<body>
<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
               <a href="test2.0.php"><h3 class="logo">Formel<span>1</span></h3></a>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="test2.0.php">Home</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Statistics<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="index.php">Fahrerwertung</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="constructeur.php">Konstrukteure</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Legends<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                    <a href="MSC.php">Michael Schumacher</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="LH.php">Lewis Hamilton</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Senna.php">Ayrton Senna</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Seb.php">Sebastian Vettel</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Lauda.php">Niki Lauda</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Clark.php">Jim Clark</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Mansell.php">Niguel Mansell</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Prost.php">Alain Prost</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Rosberg.php">Nico Rosberg</a>
                                                </li>
                                                <!--
                                                <li class="dropdown-link">
                                                    <a href="#">More<i class="fas fa-caret-down"></i></a>
                                                    <div class="dropdown second">
                                                        <ul>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 1</a>
                                                            </li>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 2</a>
                                                            </li>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 3</a>
                                                            </li>
                                                            <div class="arrow"></div>
                                                        </ul>
                                                    </div>
                                                </li>
                                                -->
                                                <!-- <div class="arrow"></div> -->
                                            </ul>
                                        </div>
                                    </li>
                                    <!--
                                    <li class="dropdown-link">
                                        <a href="#">Link 4</a>
                                    </li> -->
                                    <!-- <div class="arrow"></div> -->
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#" class="active">F1 Games<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="Games.php">F1 2019 vs. F1 2020</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="simulator.php">Fahrsimulator</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Künstliche Intelligenz</a> <!--<i class="fas fa-caret-down"></i>
                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                    <a href="#">Link 1</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="#">Link 2</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="#">Link 3</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="#">More<i class="fas fa-caret-down"></i></a>
                                                    <div class="dropdown second">
                                                        <ul>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 1</a>
                                                            </li>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 2</a>
                                                            </li>
                                                            <li class="dropdown-link">
                                                                <a href="#">Link 3</a>
                                                            </li>
                                                            <div class="arrow"></div>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <div class="arrow"></div>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Link 4</a>
                                    </li> 
                                    <div class="arrow"></div>-->
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                        <a href="#">F1 Today<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="Map.php">Rennkalender</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Fahrerpaarungen<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                            <ul>
                                            <li class="dropdown-link">
                                                <a href="Mercedes.php">Mercedes AMG Petronas</a>
                                            </li>
                                            <li class="dropdown-link">
                                                 <a href="Red Bull.php">Red Bull Racing</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Ferrari.php">Scuderia Ferrari</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Aston.php">Aston Martin F1 Team</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="McLaren.php">McLaren F1 Team</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Alpin.php">Alpine F1 Team</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Alpha.php">Alpha Tauri</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Romeo.php">Alfa Romeo Racing</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Williams.php">Williams Racing</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Haas.php">Haas F1</a>
                                            </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="log-sign" style="--i: 1.8s">
                    <a href="#" class="btn transparent">Log in</a>
                    <a href="#" class="btn solid">Sign up</a>
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>

<?php

// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"]; //Hinterlegte Pfade
$script = $_SERVER["SCRIPT_NAME"]; //Hinterlgete Pfade //wird vermutlich nicht benutzt. 
require ( "funktionen.php" );

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