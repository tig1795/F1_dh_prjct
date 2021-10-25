<!--Skript um einen neuen Deutschen Meister im Fußball anzulegen -->
<?php

session_start();

require ( "funktionen.php" );

$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "f1_driver_wm_standings";

$con = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );

if(!$con)
{
    echo 'Not Connected To Server';
}

if(mysqli_select_db($con, 'f1_driver_wm_standings'))
{
    echo 'Database not Selected';
}
$ID = $_POST['nummerierung'];
$Saison = $_POST['saison'];
$GPs = $_POST['gps'];
$Champion = $_POST['champion'];
$Car = $_POST['car'];
$Nationality = $_POST['nationality'];
$Age = $_POST['age'];
$Points = $_POST['points'];
$Wins = $_POST['wins'];

$sql = "INSERT INTO f1_driver_wm_standings (ID, Saison, GPs, Champion, Car, Nationality, Age, Points, Wins) VALUES ('$ID', '$Saison', '$GPs', '$Champion', '$Car', '$Nationality', '$Age', '$Points', '$Wins')";

if(!mysqli_query($con, $sql))
{
    echo 'Not Inserted';
}
else{
    echo'Inserted';
}

header("refresh:2; url=index2.php");

?>