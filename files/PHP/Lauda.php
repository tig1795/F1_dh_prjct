<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Niki Lauda</title>
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
        <a href="#"><img src="../../images/Lauda.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Niki Lauda</p>
           <p class="regular">3-facher Weltmeister</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-trophy"></i>
             </div>
             <div class="data">
               3 Weltmeistertitel
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
               24 Pole Positions
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-history"></i>
             </div>
             <div class="data"> 
               24 schnellste Rennrunden
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
               <a style="color: white; text-decoration: none" href="https://nikilauda.obys.agency/prologue/" target="_blank"><p>Niki Lauda</p></a>
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
        <p>Andreas Nikolaus „Niki“ Lauda (* 22. Februar 1949 in Wien; † 20. Mai 2019 in Zürich) war ein österreichischer Automobilrennfahrer, Unternehmer und Pilot.
           Er startete zwischen 1971 und 1985 in der Formel 1 und wurde dreimal Weltmeister.</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">1971-1972</div> 
                <div class="info">
                     <p class="semi-bold">March</p> 
                  <p>Formel 1 Debut am 15. August 1971 auf dem Österreichring (Österreich)</p>
                </div>
            </li>
            <li>
              <div class="date">1973</div>
              <div class="info">
                     <p class="semi-bold">British Racing Motors (B.R.M.)</p>
                </div>
            </li>
            <li>
              <div class="date">1974–1977</div>
              <div class="info">
                     <p class="semi-bold">Scuderia Ferrari</p> 
                  <p>Formel 1 Weltmeister 1975 und 1977</p>
                </div>
            </li>
            <li>
              <div class="date">1978–1979</div>
              <div class="info">
                     <p class="semi-bold">Brabham</p>
                </div>
            </li>
            <li>
              <div class="date">1982–1985</div>
              <div class="info">
                     <p class="semi-bold">McLaren</p>
                  <p>Formel 1 Weltmeister 1984</p>
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
                <div class="date">1974</div> 
                <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p> Am 28. April 1974 auf dem Circuito Permanente del Jarama in Spanien</p>
                </div>
            </li>
            <li>
              <div class="date">1975</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des ersten Formel 1 Weltmeistertitels</p> 
                  <p>Am 5. Oktober 1975 auf dem Circuit of The Americas in den USA</p>
                </div>
            </li>
            <li>
              <div class="date">1976</div>
              <div class="info">
                     <p class="semi-bold">Schwerer Unfall beim Großen Preis von Deutschland am 1. August 1976.</p> 
                  <p>Bereits 42 Tage später, nach zwei verpassten Rennen, nahm Niki Lauda wieder am Großen Preis von Italien teil.</p>
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



