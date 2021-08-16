<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nigel Mansell</title>
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
        <a href="#"><img src="../../images/Mansell.jpg"/></a>
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Nigel Mansell</p>
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
               31 Grand Prix Siege
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-stopwatch"></i>
             </div>
             <div class="data">
               32 Pole Positions
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-history"></i>
             </div>
             <div class="data"> 
               30 schnellste Rennrunden
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
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <a style="color: white; text-decoration: none" href="https://www.facebook.com/NigelMansellCBE" target="_blank"><p>Niguel Mansell</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <a style="color: white; text-decoration: none" href="https://twitter.com/nigelmansell?lang=de" target="_blank"><p>@nigelmansell</p></a>
             </div>
           </li>
           <li>
             <div class="icon">
                <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <a style="color: white; text-decoration: none" href="https://www.instagram.com/nigelmansell/?hl=de" target="_blank"><p>@nigelmansell</p></a>
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
        <p>Nigel Ernest James Mansell, CBE (* 8. August 1953 in Upton-upon-Severn, Malvern Hills) ist ein britischer Automobilrennfahrer. 
           Er startete zwischen 1980 und 1995 in der höchsten Motorsportklasse Formel 1 und wurde dort 1992 Weltmeister. 
           Mansell wurde zudem 1993 Meister der IndyCar World Series und ist damit bis heute der einzige Fahrer, der (für gut einen Monat) 
           gleichzeitig amtierender Meister beider Serien war.</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Team-Stationen</p>
         </div>
        <ul>
            <li>
                <div class="date">1980–1984</div> 
                <div class="info">
                     <p class="semi-bold">Lotus</p> 
                  <p></p>
                </div>
            </li>
            <li>
              <div class="date">1985–1988</div>
              <div class="info">
                     <p class="semi-bold">Williams</p> 
                  <p></p>
                </div>
            </li>
            <li>
              <div class="date">1989–1990</div>
              <div class="info">
                     <p class="semi-bold">Scuderia Ferrari</p> 
                  <p></p>
                </div>
            </li>
            <li>
              <div class="date">1991–1992, 1994</div>
              <div class="info">
                     <p class="semi-bold"> Williams</p> 
                  <p></p>
                </div>
            </li>
            <li>
              <div class="date">1995</div>
              <div class="info">
                     <p class="semi-bold">McLaren</p>
                  <p></p>
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
                <div class="date">1980</div> 
                <div class="info">
                     <p class="semi-bold">Formel 1 Debut</p> 
                  <p> Am 17. August 1980 auf dem Österreichring.</p>
                </div>
            </li>
            <li>
              <div class="date">1985</div>
              <div class="info">
                     <p class="semi-bold">Erster Formel 1 Sieg</p> 
                  <p>Am 6. Oktober 1985 auf dem Brands Hatch Circuit in England.</p>
                </div>
            </li>
            <li>
              <div class="date">1992</div>
              <div class="info">
                     <p class="semi-bold">Einziger Formel 1 Weltmeistertitel</p> 
                  <p>Am 16. August 1992 auf dem Hungaroring in Ungarn.</p>
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



