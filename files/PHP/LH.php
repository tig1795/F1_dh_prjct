<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lewis Hamilton</title>
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
        <a href="#"><img src="../../images/LH.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Lewis Hamilton</p>
           <p class="regular">Formel1-Rekordweltmeister</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-trophy"></i>
             </div>
             <div class="data">
               7 Fahrerweltmeistertitel
             </div>
             </li>
           <li>
             <div class="icon">
               <i class="fas fa-flag-checkered"></i>
             </div>
             <div class="data">
               99 Grand Prix Siege
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-stopwatch"></i>
             </div>
             <div class="data">
                101 Pole Positions
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-history"></i>
             </div>
             <div class="data"> 
                53 schnellste Rennrunden
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
               <span style="width: 92%;"></span>
             </div>
             <div class="skill_per">92</div>
           </li>
           <li>
             <div class="skill_name">
               AWA
             </div>
             <div class="skill_progress">
               <span style="width: 89%;"></span>
             </div>
             <div class="skill_per">89</div>
           </li>
           <li>
             <div class="skill_name">
               RAC
             </div>
             <div class="skill_progress">
               <span style="width: 94%;"></span>
             </div>
             <div class="skill_per">94</div>
           </li>
           <li>
             <div class="skill_name">
               PAC
             </div>
             <div class="skill_progress">
               <span style="width: 98%;"></span>
             </div>
             <div class="skill_per">98</div>
           </li>
           <hr style="color: white">
           <br>
           <li>
             <div class="skill_name">
               <b>Tot. Rating</b>
             </div>
             <div class="skill_progress">
               <span style="width: 95%;"></span>
             </div>
             <div class="skill_per"><b>95</b></div>
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
               <a style="color: white; text-decoration: none" href="https://www.facebook.com/LewisHamilton" target="_blank"><p>Lewis Hamilton</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <a style="color: white; text-decoration: none" href="https://twitter.com/LewisHamilton?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><p>@LewisHamilton</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <a style="color: white; text-decoration: none" href="https://www.youtube.com/user/lewishamilton" target="_blank"><p>Lewis Hamilton</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <a style="color: white; text-decoration: none" href="https://www.instagram.com/lewishamilton/" target="_blank"><p>@lewishamilton</p></a>
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
        <p>Sir Lewis Carl Davidson Hamilton, MBE (* 7. Januar 1985 in Stevenage, Hertfordshire, England) ist ein britischer Automobilrennfahrer. 
          Seit 2007 startet er in der Formel 1. Schon im ersten Jahr wurde er auf Anhieb Vizeweltmeister und 2008 der zu diesem Zeitpunkt jüngste Weltmeister der Formel-1-Geschichte.
          Seit 2013 tritt Hamilton in der Formel 1 für Mercedes an. Er ist mit sieben Titeln neben Michael Schumacher Rekordweltmeister. 
          Darüber hinaus hält Hamilton unter anderem die Rekorde für die meisten Siege, Podien, Pole-Positions sowie gesammelte Weltmeisterschaftspunkte und Führungskilometer. </p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">2007</div> 
                <div class="info">
                     <p class="semi-bold">McLaren-Mercedes</p> 
                  <p>Formel 1 Debut am 18. März 2007 auf dem  Albert Park Circuit (Australien)</p> 
                </div>
            </li>
            <li>
              <div class="date">2007-2012</div>
              <div class="info">
                     <p class="semi-bold">McLaren-Mercedes</p> 
                  <p>Formel1 Weltmeister 2008</p>
                </div>
            </li>
            <li>
              <div class="date">Seit 2013</div>
              <div class="info">
                     <p class="semi-bold">Mercedes AMG Petronas</p> 
                  <p>Formel 1 Weltmeister 2014, 2015, 2017-2020</p>
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
                <div class="date">2007</div> 
                <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p> Am 10.06.2007 auf dem Circuit Gilles-Villeneuve in Kanada</p>
                </div>
            </li>
            <li>
              <div class="date">2008</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des ersten Formel 1 Weltmeistertitels</p> 
                  <p>Am 2.11.2008 auf dem Autódromo José Carlos Pace in Brasilien</p>
                </div>
            </li>
            <li>
              <div class="date">2014</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des ersten Formel 1 Weltmeistertitels mit Mercedes AMG Petronas</p> 
                  <p>Am 23.11.2014 auf dem Yas Marina Circuit in Abu Dhabi</p>
                </div>
            </li>
            <li>
              <div class="date">2020</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des siebten Formel 1 Weltmeistertitels</p> 
                  <p>Am 15.11.2020 auf dem Istanbul Park Circuit in der Türkei und zog damit mit Michael Schumacher gleich.</p>
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



