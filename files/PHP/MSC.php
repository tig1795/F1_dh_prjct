<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Michael Schumacher</title>
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
my_html_head2 ();  

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
        <a href="#"><img src="../../images/MSC.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Michael Schumacher</p>
           <p class="regular">Formel1-Rekordweltmeister</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-trophy"></i>
             </div>
             <div class="data">
               7 Weltmeistertitel
             </div>
             </li>
           <li>
             <div class="icon">
               <i class="fas fa-flag-checkered"></i>
             </div>
             <div class="data">
               91 Grand Prix Siege
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-stopwatch"></i>
             </div>
             <div class="data">
               68 Pole Positions
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-history"></i>
             </div>
             <div class="data"> 
               77 schnellste Rennrunden
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">F1 2021 Gameplay Rating</p>
         </div>
         <ul>
           <li>
             <div class="skill_name">
               EXP
             </div>
             <div class="skill_progress">
               <span style="width: 98%;"></span>
             </div>
             <div class="skill_per">98</div>
           </li>
           <li>
             <div class="skill_name">
               AWA
             </div>
             <div class="skill_progress">
               <span style="width: 92%;"></span>
             </div>
             <div class="skill_per">92</div>
           </li>
           <li>
             <div class="skill_name">
               RAC
             </div>
             <div class="skill_progress">
               <span style="width: 93%;"></span>
             </div>
             <div class="skill_per">93</div>
           </li>
           <li>
             <div class="skill_name">
               PAC
             </div>
             <div class="skill_progress">
               <span style="width: 96%;"></span>
             </div>
             <div class="skill_per">96</div>
           </li>
           <hr style="color: white">
           <br>
           <li>
             <div class="skill_name">
               <b>Tot. Rating</b>
             </div>
             <div class="skill_progress">
               <span style="width: 94%;"></span>
             </div>
             <div class="skill_per"><b>94</b></div>
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
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <a style="color: white; text-decoration: none" href="https://www.facebook.com/michaelschumacherofficial" target="_blank"><p>Michael Schumacher</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <a style="color: white; text-decoration: none" href="https://twitter.com/schumacher" target="_blank"><p>@schumacher</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <a style="color: white; text-decoration: none" href="https://www.youtube.com/michaelschumacherofficial" target="_blank"><p>Michael Schumacher</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <a style="color: white; text-decoration: none" href="https://www.instagram.com/michaelschumacher/" target="_blank"><p>@michaelschumacher</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fas fa-globe"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Offizielle Website</p>
               <a style="color: white; text-decoration: none" href="https://michael-schumacher.de/?fbclid=IwAR1SAW_8WiXp7rhCoVT6Ovj8CNLKOQKEogD6fXmIx9NVQztkcbNWLbvNveE" target="_blank"><p>MSC</p></a>
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
        <p>Michael Schumacher (* 3. Januar 1969 in Hürth, Nordrhein-Westfalen) ist ein ehemaliger deutscher Automobilrennfahrer. 
           Schumacher startete von 1991 bis 2006 sowie von 2010 bis 2012 bei insgesamt 307 Großen Preisen der Formel-1-Weltmeisterschaft. 
           Er hält die Rekorde von 7 Weltmeistertiteln, zusammen mit Lewis Hamilton (seit 2020) und den Rekord für die 77 schnellsten Rennrunden.</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">1991</div> 
                <div class="info">
                     <p class="semi-bold">Jordan Grand Prix</p> 
                  <p>Formel 1 Debut am 25.08.1991 in Spa-Francochamps (Belgien)</p>
                </div>
            </li>
            <li>
              <div class="date">1991–1995</div>
              <div class="info">
                     <p class="semi-bold">Benetton Ford/Renault</p> 
                  <p>Formel1 Weltmeister 1994 und 1995</p>
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



