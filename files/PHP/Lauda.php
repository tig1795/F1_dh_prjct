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
$title ="fahrer";
my_html_head ( $title );  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

?>
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
               3 Fahrerweltmeistertitel
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
              <div class="date">1996–2006</div>
              <div class="info">
                     <p class="semi-bold">Scuderia Ferrari</p> 
                  <p>Formel 1 Weltmeister von 2000 bis 2004</p>
                </div>
            </li>
            <li>
              <div class="date">2010–2012</div>
              <div class="info">
                     <p class="semi-bold">Mercedes AMG Petronas</p> 
                  <p>Letzte Pole-Position in Monaco 2012</p>
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
                <div class="date">1992</div> 
                <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p> Am 30.08.1992 auf dem Circuit de Spa-Francorchamps in Belgien</p>
                </div>
            </li>
            <li>
              <div class="date">1994</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des ersten Formel 1 Weltmeistertitels</p> 
                  <p>Am 13. November 1994 auf dem Adelaide Street Circuit in Australien</p>
                </div>
            </li>
            <li>
              <div class="date">2000</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des ersten Formel 1 Weltmeistertitels mit Ferrari</p> 
                  <p>Am 8. Oktober 2000 auf dem Suzuka International Racing Course in Japan</p>
                </div>
            </li>
            <li>
              <div class="date">2004</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des siebten Formel 1 Weltmeistertitels</p> 
                  <p>Am 29. August 2004 auf dem Circuit de Spa-Francorchamps in Belgien. Mit nun 7 Weltmeistertiteln ist 
                    Michael Schumacher der alleinige Rekordweltmeister in der Formel 1.</p>
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



