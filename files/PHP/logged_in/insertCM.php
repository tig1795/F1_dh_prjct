<!--Skript um einen neuen Deutschen Meister im Fußball anzulegen -->
<?php

session_start();

require ( "funktionen.php" );

$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "f1_team_wm_standings";

$con = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );

if(!$con)
{
    echo 'Not Connected To Server';
}

if(mysqli_select_db($con, 'f1_team_wm_standings'))
{
    echo 'Database not Selected';
}
$ID = $_POST['nummerierung'];
$Season = $_POST['season'];
$GPs = $_POST['gps'];
$Champion = $_POST['champion'];
$Nationality = $_POST['nationality'];
$Points = $_POST['points'];
$Wins = $_POST['wins'];

$sql = "INSERT INTO f1_team_wm_standings (ID, Season, GPs, Champion, Nationality, Points, Wins) VALUES ('$ID', '$Season', '$GPs', '$Champion', '$Nationality', '$Points', '$Wins')";

if(!mysqli_query($con, $sql))
{
    echo 'Not Inserted';
}
else{
    echo'Inserted';
}

header("refresh:2; url=constructeur2.php");

?>