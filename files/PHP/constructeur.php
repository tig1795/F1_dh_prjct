<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT Champion FROM f1_team_wm_standings ORDER BY Champion ASC");
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../CSS/Fußzeile.css">
<link rel="stylesheet" href="../CSS/style2.0.css">
<link rel="stylesheet" href="../CSS/table.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Alle Konstrukteur-Weltmeister der Formel 1 Geschichte</title>
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
                            <a href="#" class="active">Statistics<i class="fas fa-caret-down"></i></a>
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
                            <a href="#">F1 Gaming<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="Games.php">F1 2019 vs. F1 2020</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="simulator.php">Fahrsimulator</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="KI.php">Künstliche Intelligenz</a> <!--<i class="fas fa-caret-down"></i>
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
                    <a href="login.php" class="btn transparent">Log in</a>
                    <a href="register.php" class="btn solid">Sign up</a>
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
$tabellenname = "f1_team_wm_standings";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

?>
<br>
<br>
<br>
    <h2>Alle Konstrukteur-Weltmeister der Formel 1 Geschichte</h2>
    <form method="POST" name="search" action="constructeur.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="Champion[]" multiple="multiple">
                    <option value="0" selected="selected">Select Constructor Champion</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['Champion'] . '">' . $countryResult[$key]['Champion'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['Champion'])) {
                    ?>
                    <table cellpadding="10" cellspacing="20">

                <thead>
                    <tr>
                        <th><strong>Season</strong></th>
                        <th><strong>GPs</strong></th>
                        <th><strong>Champion</strong></th>
                        <th><strong>Nationality</strong></th>
                        <th><strong>Points</strong></th>
                        <th><strong>Wins</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from f1_team_wm_standings";
                    $i = 0;
                    $selectedOptionCount = count($_POST['Champion']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['Champion'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE Champion in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['Season']; ?> </div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['GPs']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['Champion']; ?></div></td>
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['Nationality']; ?> </div></td>
                        <td><div class="col" id="user_data_5"><?php echo $result[$key]['Points']; ?></div></td>
                        <td><div class="col" id="user_data_6"><?php echo $result[$key]['Wins']; ?> </div></td>
                </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>