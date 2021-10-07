<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jim Clark</title>
	<link rel="stylesheet" href="../CSS/steckbrief.css">
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
$title ="legends";
my_html_head2($title);  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

?>
<br>
<br>
<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
        <a href="#"><img src="../../images/Jim_Clark.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Jim Clark</p>
           <p class="regular">3-facher Weltmeister</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-trophy"></i>
             </div>
             <div class="data">
               2 Weltmeistertitel
             </div>
             </li>
           <li>
             <div class="icon">
               <i class="fas fa-flag-checkered"></i>
             </div>
             <div class="data">
               25 Grand Prix Siege
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-stopwatch"></i>
             </div>
             <div class="data">
               33 Pole Positions
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-history"></i>
             </div>
             <div class="data"> 
               28 schnellste Rennrunden
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
                <i class="fas fa-globe"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Offizielle Website</p>
               <a style="color: white; text-decoration: none" href="https://jimclarktrust.com/" target="_blank"><p>Jim Clark</p></a>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">Einführung</p>
         </div>
        <p>James „Jim“ Clark junior, OBE (* 4. März 1936 in Kilmany, Fife, Schottland; † 7. April 1968 in Hockenheim) war ein britischer Automobilrennfahrer. 
          Er startete zwischen 1960 und 1968 bei 72 Grand-Prix-Rennen für Lotus in der Formel 1 und wurde zweimal Weltmeister (1963 und 1965). </p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">1960–1968</div> 
                <div class="info">
                     <p class="semi-bold">Lotus</p> 
                  <p>Formel 1 Weltmeister 1963 und 1965.</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Meilensteine seiner Karriere</p>
         </div>
      <ul>
            <li>
                <div class="date">1960</div> 
                <div class="info">
                     <p class="semi-bold">Formel 1 Debut</p> 
                  <p> Am 5. Juni 1960 auf dem Circuit Park Zandvoort in der Niederlande.</p>
                </div>
            </li>
            <li>
              <div class="date">1962</div>
              <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p>Am 17. Juni 1962 auf dem Circuit de Spa-Francorchamps in Belgien.</p>
                </div>
            </li>
            <li>
              <div class="date">1968</div>
              <div class="info">
                     <p class="semi-bold">Tödlicher Unfall auf dem Hockenheimring am 7. April 1968.</p> 
                  <p>Im Regen verunglückte Jim Clark im für ihn unbedeutenden Formel-2-Rennen tödlich, 
                    vermutlich infolge eines schleichenden Plattfußes und Reifenschadens, 
                    als er auf der Waldgeraden nach dem Motodrom von der Strecke abkam und mit seinem Lotus 48 gegen einen Baum schleuderte.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>

<?php
my_html_foot()
?>

</body>
</html>



