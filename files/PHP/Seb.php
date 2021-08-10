<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sebastian Vettel</title>
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
        <a href="#"><img src="../../images/Seb.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Sebastian Vettel</p>
           <p class="regular">4-facher Formel1-Weltmeister</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-trophy"></i>
             </div>
             <div class="data">
               4 Fahrerweltmeistertitel
             </div>
             </li>
           <li>
             <div class="icon">
               <i class="fas fa-flag-checkered"></i>
             </div>
             <div class="data">
               53 Grand Prix Siege
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-stopwatch"></i>
             </div>
             <div class="data">
               57 Pole Positions
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-history"></i>
             </div>
             <div class="data"> 
               38 schnellste Rennrunden
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
               <span style="width: 91%;"></span>
             </div>
             <div class="skill_per">91</div>
           </li>
           <li>
             <div class="skill_name">
               AWA
             </div>
             <div class="skill_progress">
               <span style="width: 87%;"></span>
             </div>
             <div class="skill_per">87</div>
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
               <a style="color: white; text-decoration: none" href="https://www.facebook.com/Sebastian-Vettel-offical-859347904099128/" target="_blank"><p>Sebastian Vettel</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <a style="color: white; text-decoration: none" href="https://twitter.com/sebvettelnews?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><p>@sebvettelnews</p></a>
             </div>
           </li>
            <li>
             <div class="icon">
                <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <a style="color: white; text-decoration: none" href="https://www.instagram.com/vettelofficial/?hl=de" target="_blank"><p>@vettelofficial</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fas fa-globe"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Offizielle Website</p>
               <a style="color: white; text-decoration: none" href="https://sebastianvettel.de/" target="_blank"><p>SV5</p></a>
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
        <p>Sebastian Vettel (* 3. Juli 1987 in Heppenheim) ist ein deutscher Automobilrennfahrer.
          Er startet seit 2007 in der Formel 1 und gewann dort in der Saison 2010 als zweiter Deutscher nach Michael Schumacher und bislang jüngster Fahrer die Weltmeisterschaft.
          Mit der erfolgreichen Verteidigung des Titels 2011, 2012 und 2013 ist er einer von vier Fahrern, die viermal in Folge Weltmeister wurden. 
        </p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">2007</div> 
                <div class="info">
                     <p class="semi-bold">BMW Sauber</p> 
                  <p>Formel 1 Debut am 17. Juni 2007 auf dem Indianapolis Motor Speedway (USA)</p>
                </div>
            </li>
            <li>
              <div class="date">2007-2008</div>
              <div class="info">
                     <p class="semi-bold">Scuderia Toro Rosso</p> 
                  <p>1. Sieg in der Formel 1 am 14. September 2008 auf dem Autodromo Nazionale Monza (Italien)</p>
                </div>
            </li>
            <li>
              <div class="date">2009–2014</div>
              <div class="info">
                     <p class="semi-bold">Red Bull Racing</p> 
                  <p>Formel 1 Weltmeister von 2010 bis 2013</p>  
                </div>
            </li>
            <li>
              <div class="date">2015–2020</div>
              <div class="info">
                     <p class="semi-bold">Scuderia Ferrari</p> 
                  <p>Erster Sieg im zweiten Rennen für Ferrari am 29. März 2015 auf dem Sepang International Circuit (Malaysia)
                     Es sollten noch 13 weitere für Ferrari folgen.</p>  
                </div>
            </li>
            <li>
              <div class="date">Seit 2021</div>
              <div class="info">
                     <p class="semi-bold">Aston Martin</p> 
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
                <div class="date">2008</div> 
                <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p> Am 14. September 2008 auf dem Autodromo Nazionale Monza in Italien.</p>
                </div>
            </li>
            <li>
              <div class="date">2010</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des ersten Formel 1 Weltmeistertitels</p> 
                  <p>Am 14. November 2010 auf dem Yas Marina Circuit in Abu Dhabi.
                     Damit krönte sich Sebastian Vettel zum jüngsten Formel1-Weltmeister aller zeiten.</p>
                </div>
            </li>
            <li>
              <div class="date">2013</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des vierten Formel 1 Weltmeistertitels</p> 
                  <p>Am 27. Oktober 2013 auf dem Buddh International Circuit in Indien.
                    Mit seinem vierten Weltmeistertitel zog er mit Alain Prost gleich.</p>
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



