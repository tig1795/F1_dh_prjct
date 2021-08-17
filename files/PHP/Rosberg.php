<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nico Rosberg</title>
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
        <a href="#"><img src="../../images/Rosberg.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Nico Rosberg</p>
           <p class="regular">Formel1-Rekordweltmeister</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-trophy"></i>
             </div>
             <div class="data">
               1 Fahrerweltmeistertitel
             </div>
             </li>
           <li>
             <div class="icon">
               <i class="fas fa-flag-checkered"></i>
             </div>
             <div class="data">
               23 Grand Prix Siege
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-stopwatch"></i>
             </div>
             <div class="data">
               30 Pole Positions
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-history"></i>
             </div>
             <div class="data"> 
               20 schnellste Rennrunden
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
               <span style="width: 86%;"></span>
             </div>
             <div class="skill_per">86</div>
           </li>
           <li>
             <div class="skill_name">
               AWA
             </div>
             <div class="skill_progress">
               <span style="width: 91%;"></span>
             </div>
             <div class="skill_per">91</div>
           </li>
           <li>
             <div class="skill_name">
               RAC
             </div>
             <div class="skill_progress">
               <span style="width: 89%;"></span>
             </div>
             <div class="skill_per">89</div>
           </li>
           <li>
             <div class="skill_name">
               PAC
             </div>
             <div class="skill_progress">
               <span style="width: 88%;"></span>
             </div>
             <div class="skill_per">88</div>
           </li>
           <hr style="color: white">
           <br>
           <li>
             <div class="skill_name">
               <b>Tot. Rating</b>
             </div>
             <div class="skill_progress">
               <span style="width: 89%;"></span>
             </div>
             <div class="skill_per"><b>89</b></div>
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
               <a style="color: white; text-decoration: none" href="https://www.facebook.com/nicorosberg" target="_blank"><p>Nico Rosberg</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <a style="color: white; text-decoration: none" href="www.twitter.com/nicorosberg" target="_blank"><p>@nicorosberg</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <a style="color: white; text-decoration: none" href="https://www.youtube.com/channel/UCtLZ6qQgB-EwQy5HWIo3X-w" target="_blank"><p>Nico Rosberg</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <a style="color: white; text-decoration: none" href="https://www.instagram.com/nicorosberg/?hl=de" target="_blank"><p>@nicorosberg</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fas fa-globe"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Offizielle Website</p>
               <a style="color: white; text-decoration: none" href="http://nicorosberg.com/" target="_blank"><p>Nico Rosberg</p></a>
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
        <p>Nico Erik Rosberg (* 27. Juni 1985 in Wiesbaden) ist ein ehemaliger deutsch-finnischer Automobilrennfahrer und Investor. 
           Als Sohn des finnischen Formel-1-Weltmeisters Keke Rosberg und einer Deutschen hält er beide Staatsbürgerschaften. 
           Er trat bis Ende 2003 mit finnischer und ab 2004 mit deutscher Rennlizenz an.
           Er gewann 2005 die GP2-Serie und startete ab dem Jahr 2006 in der Formel 1. 
        </p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">2006–2009</div> 
                <div class="info">
                     <p class="semi-bold">Williams</p> 
                  <p>Formel 1 Debut am 12.03.2006 in Sakhir (Bahrain)</p>
                </div>
            </li>
            <li>
              <div class="date">2010–2016</div>
              <div class="info">
                     <p class="semi-bold">Mercedes</p> 
                  <p>Formel1 Weltmeister 2016</p>
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
                <div class="date">2012</div> 
                <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p> Am 15. April 2012 auf dem Shanghai International Circuit in China.</p>
                </div>
            </li>
            <li>
              <div class="date">2013</div>
              <div class="info">
                     <p class="semi-bold">Rennsieg beim Großen Preis von Monaco</p> 
                  <p>Am 26. Mai 2013, exakt 20 Jahre nach seinem Vater Keke, gewann Nico das prestigeträchtige Rennen auf dem Circuit de Monaco.</p>
                </div>
            </li>
            <li>
              <div class="date">2016</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des Formel 1 Weltmeistertitels</p> 
                  <p>Am 27. November 2016 auf dem Yas Marina Circuit in Abu Dhabi.
                     Nach dieser Saison beendete Nico Rosberg seine aktive Karriere als Formel 1 Fahrer.
                  </p>
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



