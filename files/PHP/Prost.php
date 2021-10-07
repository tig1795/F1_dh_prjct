<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alain Prost</title>
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
        <a href="#"><img src="../../images/Prost.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Alain Prost</p>
           <p class="regular">Formel1-Rekordweltmeister</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-trophy"></i>
             </div>
             <div class="data">
               4 Weltmeistertitel
             </div>
             </li>
           <li>
             <div class="icon">
               <i class="fas fa-flag-checkered"></i>
             </div>
             <div class="data">
              51 Grand Prix Siege
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
               41 schnellste Rennrunden
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
               <span style="width: 85%;"></span>
             </div>
             <div class="skill_per">85</div>
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
               <span style="width: 94%;"></span>
             </div>
             <div class="skill_per">94</div>
           </li>
           <hr style="color: white">
           <br>
           <li>
             <div class="skill_name">
               <b>Tot. Rating</b>
             </div>
             <div class="skill_progress">
               <span style="width: 93%;"></span>
             </div>
             <div class="skill_per"><b>93</b></div>
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
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <a style="color: white; text-decoration: none" href="https://twitter.com/prost_official?lang=de" target="_blank"><p>@Prost_official</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <a style="color: white; text-decoration: none" href="https://www.instagram.com/a.prost/?hl=de" target="_blank"><p>@a.prost</p></a>
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
        <p>Alain Marie Pascal Prost, OBE (* 24. Februar 1955 in Saint-Chamond) ist ein französischer Automobilrennfahrer armenisch-französischer Herkunft. 
           Zwischen 1980 und 1993 startete er bei insgesamt 199 Grand Prix in der Formel 1. 
           In der Zeit von 1997 bis 2001 führte Prost sein eigenes Formel-1-Team namens Prost Grand Prix. 
           Seit 2003 ist er wieder als Rennfahrer aktiv und startet regelmäßig in der französischen Eisrennserie Trophée Andros.
        </p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">1980</div> 
                <div class="info">
                     <p class="semi-bold">McLaren</p> 
                  <p>Formel 1 Debut am 13. Januar 1980 in Buenos Aires (Argentinien)</p>
                </div>
            </li>
            <li>
              <div class="date">1981-1983</div>
              <div class="info">
                     <p class="semi-bold">Renault</p> 
                  <p></p>
                </div>
            </li>
            <li>
              <div class="date">1984-1989</div>
              <div class="info">
                     <p class="semi-bold">McLaren</p> 
                  <p>Formel 1 Weltmeister 1985, 1986 und 1989</p>
                </div>
            </li>
            <li>
              <div class="date">1990-1991</div>
              <div class="info">
                     <p class="semi-bold">Scuderia Ferrari</p> 
                  <p></p>
                </div>
            </li>
            <li>
              <div class="date">1993</div>
              <div class="info">
                     <p class="semi-bold">Williams</p> 
                  <p>Formel 1 Weltmeister 1993</p>
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
                <div class="date">1981</div> 
                <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p> Am 05.07.1981 auf dem Stade Automobile de Dijon-Prenois in Frankreich.</p>
                </div>
            </li>
            <li>
              <div class="date">1985</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des ersten Formel 1 Weltmeistertitels</p> 
                  <p>Am 6. Oktober 1985 auf dem Brands Hatch Circuit in England.</p>
                </div>
            </li>
            <li>
              <div class="date">1993</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des letzten Formel 1 Weltmeistertitels</p> 
                  <p>Am 26. September 1993 auf dem Autódromo Fernanda Pires da Silvaist in Portugal.</p>
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



