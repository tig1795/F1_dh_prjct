<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ayrton Senna</title>
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
my_html_head2();  

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
        <a href="#"><img src="../../images/AS.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Ayrton Senna</p>
           <p class="regular">Formel1-Rekordweltmeister</p>
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
               41 Grand Prix Siege
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-stopwatch"></i>
             </div>
             <div class="data">
               65 Pole Positions
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-history"></i>
             </div>
             <div class="data"> 
               19 schnellste Rennrunden
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
               <span style="width: 79%;"></span>
             </div>
             <div class="skill_per">79</div>
           </li>
           <li>
             <div class="skill_name">
               AWA
             </div>
             <div class="skill_progress">
               <span style="width: 96%;"></span>
             </div>
             <div class="skill_per">96</div>
           </li>
           <li>
             <div class="skill_name">
               RAC
             </div>
             <div class="skill_progress">
               <span style="width: 97%;"></span>
             </div>
             <div class="skill_per">97</div>
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
               <a style="color: white; text-decoration: none" href="https://www.facebook.com/oficialayrtonsenna/" target="_blank"><p>Aryton Senna</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <a style="color: white; text-decoration: none" href="https://twitter.com/ayrtonsenna?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><p>@ayrtonsenna</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <a style="color: white; text-decoration: none" href="https://www.youtube.com/channel/UCMNHx0v3CePF3RFNs3mr0vg" target="_blank"><p>Senna TV</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <a style="color: white; text-decoration: none" href="https://www.instagram.com/oficialayrtonsenna/?hl=de" target="_blank"><p>@oficialayrtonsenna</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fas fa-globe"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Offizielle Website</p>
               <a style="color: white; text-decoration: none" href="https://www.ayrtonsenna.com.br/" target="_blank"><p>Ayrton Senna</p></a>
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
        <p>Ayrton Senna da Silva (* 21. März 1960 in São Paulo; † 1. Mai 1994 in Bologna) war ein brasilianischer Automobilrennfahrer. 
           Er fuhr in der Formel 1 von 1984 bis zu seinem tödlichen Unfall auf dem Kurs von Imola beim Großen Preis von San Marino 1994.
           Senna bestritt in der Formel 1 insgesamt 161 Große Preise mit Toleman, Lotus, McLaren und Williams.
           Große mediale Aufmerksamkeit erregte Sennas intensive Rivalität zu dem Franzosen Alain Prost, 
           mit dem er im Laufe seiner Karriere insgesamt vier Weltmeisterschaften ausfocht.</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">1984</div> 
                <div class="info">
                     <p class="semi-bold">Toleman</p> 
                  <p>Formel 1 Debut am 25.03.1984 in Rio de Janeiro (Brasilien)</p>
                </div>
            </li>
            <li>
              <div class="date">1985–1987</div>
              <div class="info">
                     <p class="semi-bold">Lotus</p> 
                  <p>1. Formel 1 Sieg 1985 beim Großen Preis von Portugal</p>
                </div>
            </li>
            <li>
              <div class="date">1988–1993</div>
              <div class="info">
                     <p class="semi-bold">McLaren</p> 
                  <p>Formel 1 Weltmeister 1988, 1990, 1991</p>
                </div>
            </li>
            <li>
              <div class="date">1994</div>
              <div class="info">
                     <p class="semi-bold">Williams</p>
                  <p>Für dieses Team bestritt er nur drei Rennen.</p>
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
                <div class="date">1985</div> 
                <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p>Am 21.04.1985 beim Großen Preis von Portugal</p>
                </div>
            </li>
            <li>
              <div class="date">1988</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des ersten Formel 1 Weltmeistertitels</p> 
                  <p>Am 30. Oktober 1988 auf dem Suzuka International Racing Course in Japan</p>
                </div>
            </li>
            <li>
              <div class="date">1991</div>
              <div class="info">
                     <p class="semi-bold">Gewinn des letzten Formel 1 Weltmeistertitels mit McLaren</p> 
                  <p>Am 20. Oktober 1991 auf dem Suzuka International Racing Course in Japan</p>
                </div>
            </li>
            <li>
              <div class="date">1994</div>
              <div class="info">
                     <p class="semi-bold">Tödlicher Unfall</p> 
                  <p>Am 1. Mai 1994 auf dem Kurs von Imola beim Großen Preis von San Marino</p>
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



