<!-- Code der Menüleiste -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../CSS/style2.0.css">
    <link rel="stylesheet" href="../../CSS/new_entry.css">
    <link rel="stylesheet" href="../../CSS/table.css">
    <title>Neuer Formel 1 Weltmeister</title>
</head>

<body>

<?php
session_start(); // session_start() ermöglicht Zugriff auf den Session Cookie, der die userid beinhaltet.
                // Ohne Session_start () könnte man sich nicht einloggen, sobald man die Login-Seite verlässt, wäre man ausgeloggt.
                // Da nirgendwo der Loginstatus hinterlegt wäre.

// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"]; //Hinterlegte Pfade
$script = $_SERVER["SCRIPT_NAME"]; //Hinterlgete Pfade //wird vermutlich nicht benutzt. 
require ( "../funktionen.php" );

// Menükategorien: index rezepte magazin community videos dinner meinkochbuch

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.
?>

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
                            <a href="test3.0.php">Home</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#" class="active">Statistics<i class="fas fa-caret-down"></i></a>
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
    <main>
        <!--<section>
            <div class="overlay"></div>
        </section> -->
    </main>

    <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");
        menuBtn.onclick = ()=>{
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
        cancelBtn.onclick = ()=>{
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            cancelBtn.style.color = "#ff3d00";            
        }
        searchBtn.onclick = ()=>{
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
    </script>
    <br>
    <br>

    <!-- Code für die Eingabeoberfläche -->
    <h2>Tragen Sie hier den neuen Formel 1 Weltmeister ein:</h2>
    <br>
    <br>

    <form action="insert.php" method="post">

        Nummerierung: <input type="text" name="nummerierung">
                <br/>
        Saison: <input type="text" name="saison">
                <br/>
        Grand Prixs: <input type="text" name="gps">
                <br/>
        Weltmeister: <input type="text" name="champion">  
                <br/> 
        Auto: <input type="text" name="car">
                <br/>
        Nationalität: <input type="text" name="nationality">
                <br/>
        Alter: <input type="text" name="age">
                <br/>
        Punkte: <input type="text" name="points">  
                <br/> 
        Siege: <input type="text" name="wins">
                <br>
                <br>
                <input type="submit" value="Abschicken">
   </form>
   <br>
   <br>
        
    
    
    
</body>
</html>