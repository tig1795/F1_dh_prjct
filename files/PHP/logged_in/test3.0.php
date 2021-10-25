<?php
session_start(); // session_start() ermöglicht Zugriff auf den Session Cookie, der die userid beinhaltet.
// Ohne Session_start () könnte man sich nicht einloggen, sobald man die Login-Seite verlässt, wäre man ausgeloggt.
// Da nirgendwo der Loginstatus hinterlegt wäre.

// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"]; //Hinterlegte Pfade
$script = $_SERVER["SCRIPT_NAME"]; //Hinterlegte Pfade //wird vermutlich nicht benutzt. 
require ( "funktionen.php" );  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../CSS/style2.0.css">
    <link rel="stylesheet" href="../../CSS/Fußzeile.css">
    <link rel="stylesheet" href="../../CSS/text_home.css">
    <title>F1</title>
</head>

<body>
<header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
               <a href="test3.0.php"><h3 class="logo">Formel<span>1</span></h3></a>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="test3.0.php" class="active">Home</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Statistics<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="index2.php">Fahrerwertung</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="constructeur2.php">Konstrukteure</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Legends<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                            <ul>
                                                <li class="dropdown-link">
                                                    <a href="MSC2.php">Michael Schumacher</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="LH2.php">Lewis Hamilton</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Senna2.php">Ayrton Senna</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Seb2.php">Sebastian Vettel</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Lauda2.php">Niki Lauda</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Clark2.php">Jim Clark</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Mansell2.php">Niguel Mansell</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Prost2.php">Alain Prost</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="Rosberg2.php">Nico Rosberg</a>
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
                            <a href="#">F1 Gaming<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="Games2.php">F1 2019 vs. F1 2020</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="simulator2.php">Fahrsimulator</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="KI2.php">Künstliche Intelligenz</a> <!--<i class="fas fa-caret-down"></i>
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
                                        <a href="Map2.php">Rennkalender</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Fahrerpaarungen<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                            <ul>
                                            <li class="dropdown-link">
                                                <a href="Mercedes2.php">Mercedes AMG Petronas</a>
                                            </li>
                                            <li class="dropdown-link">
                                                 <a href="Red Bull2.php">Red Bull Racing</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Ferrari2.php">Scuderia Ferrari</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Aston2.php">Aston Martin F1 Team</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="McLaren2.php">McLaren F1 Team</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Alpin2.php">Alpine F1 Team</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Alpha2.php">Alpha Tauri</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Romeo2.php">Alfa Romeo Racing</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Williams2.php">Williams Racing</a>
                                            </li>
                                            <li class="dropdown-link">
                                                  <a href="Haas2.php">Haas F1</a>
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
                    <a href="logout.php" class="btn transparent" aria-hidden="true">Logout</a>
                    <a href="register2.php" class="btn solid">Sign up</a>
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>

    <main><!--
        <section>
            <div class="overlay"></div>
        </section> -->
    </main>
    <div class="introduction">
    <br>
    <h2 style="text-align: center;">Welcome to Formula 1!</h2>
    <br>
    <p>
    Gegenstand dieser Seite soll es sein, den User in die Welt der Formel 1 einzuführen. 
    Unter dem Menüpunkt "Statistics" sind alle Fahrer- und Konstrukteur-Weltmeister der Formel 1 zufinden,
    sowie ausführliche Steckbriefe zu den Legenden der Königsklasse des Motorsports.
    Wer sich für den Gaming-Bereich der Formel 1 interessiert wird auch hier fündig. 
    Unter "F1 Gaming" wird die Evolution der Formel 1 Videospiele dargelegt, auf den Rennsimulator eingegangen
    und die Funktionsweise der im Videospiel eingesetzten Künstlichen Intelligenz erklärt. 
    Aber auch zur aktuellen Formel-1-Saison wird man auf dieser Website informiert. 
    Der Rennkalender wird als Karte mit den entsprechenden Rennstreckeninformationen dargestellt und alle Fahrerpaarungen
    können der Website entnommen werden. 
    <br>
    Viel Spaß damit!
<br>
<br>    

        <div class="video-container">
        <iframe src="https://www.youtube.com/embed/UQ0OHBZSFfk" frameborder="0" allowfullscreen="allowfullscreen">
        </iframe>
        </div>
        </div>
        </div>
 
<br>
<br>

</body>
</html>
<?php

my_html_foot()

?>