<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT Constructor FROM f1_team_wm_standings ORDER BY Constructor ASC");
?>
<html>
<head>
<link rel="stylesheet" href="../CSS/menubar.css">
<link rel="stylesheet" href="../CSS/table.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Alle Konstrukteur-Weltmeister der Formel 1 Geschichte</title>
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
my_html_head ( $title );  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

?>
<br>
    <h2>Alle Konstrukteur-Weltmeister der Formel 1 Geschichte</h2>
    <form method="POST" name="search" action="constructeur.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="Constructor[]" multiple="multiple">
                    <option value="0" selected="selected">Select Constructor Champion</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['Constructor'] . '">' . $countryResult[$key]['Constructor'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['Constructor'])) {
                    ?>
                    <table cellpadding="200" cellspacing="20">

                <thead>
                    <tr>
                        <th><strong>Constructor</strong></th>
                        <th><strong>Country</strong></th>
                        <th><strong>Titles</strong></th>
                        <th><strong>Seasons</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from f1_team_wm_standings";
                    $i = 0;
                    $selectedOptionCount = count($_POST['Constructor']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['Constructor'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE Constructor in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['Constructor']; ?> </div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['Country']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['Titles']; ?></div></td>
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['Seasons']; ?> </div></td>
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