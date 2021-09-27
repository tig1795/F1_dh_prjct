<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT Champion FROM f1_driver_wm_standings ORDER BY Champion ASC");
?>
<html>
<head>
<link rel="stylesheet" href="../CSS/table.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Alle Formel 1 Weltmeister der Geschichte</title>
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
$title ="statistik";
my_html_head2 ( $title );  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.
?>
<br>
<br>
<br>
    <h2>Alle Formel 1 Weltmeister der Geschichte</h2>
    <form method="POST" name="search" action="index.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="champion[]" multiple="multiple">
                    <option value="0" selected="selected">Select Formula1 Champion</option>
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
                if (! empty($_POST['champion'])) {
                    ?>
                    <table cellpadding="10" cellspacing="20">

                <thead>
                    <tr>
                        <th><strong>Saison</strong></th>
                        <th><strong>GPs</strong></th>
                        <th><strong>Champion</strong></th>
                        <th><strong>Car</strong></th>
                        <th><strong>Nationality</strong></th>
                        <th><strong>Age</strong></th>
                        <th><strong>Points</strong></th>
                        <th><strong>Wins</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from f1_driver_wm_standings";
                    $i = 0;
                    $selectedOptionCount = count($_POST['champion']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['champion'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE champion in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['Saison']; ?> </div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['GPs']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['Champion']; ?></div></td>
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['Car']; ?> </div></td>
                        <td><div class="col" id="user_data_5"><?php echo $result[$key]['Nationality']; ?> </div></td>
                        <td><div class="col" id="user_data_6"><?php echo $result[$key]['Age']; ?></div></td>
                        <td><div class="col" id="user_data_7"><?php echo $result[$key]['Points']; ?> </div></td>
                        <td><div class="col" id="user_data_8"><?php echo $result[$key]['Wins']; ?> </div></td>
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