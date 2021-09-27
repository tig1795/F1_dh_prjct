<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>F1 Gameplay</title>
	<link rel="stylesheet" href="../CSS/text.css">
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
$title ="Games";
my_html_head2 ();  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

print <<<EOH
<br>
<br>
<br>  
<h1>Wie realistisch ist das Formel 1 Gameplay?</h1>
<br>
<br>
<br>
<div class="introduction">
<p>
Sofern man sich für Motorsport interessiert und begeistert, ist der Griff zu einem entsprechenden Videospiel nicht weit.
Nach einiger Zeit fängt man an, die gefahrenen Zeiten im Spiel mit denen in echt zu vergleichen. 
Hier wird man schnell feststellen, dass man nicht wirklich an die Zeiten der Profirennfahrer herankommt. 
Da hier eine Differenz zwischen den gefahrenen Zeiten im Spiel und in der Realität festzustellen ist, 
liegt die Frage nicht fern, ob das Gameplay an sich ein realitätsnahes Fahrerlebnis bietet oder
ob es mit der Realität nicht zu vergleichen ist. 
Zu diesem Zweck werden im Folgenden die Formel 1 Spiele aus dem Jahr 2019 und 2021 für die Playstation 4 
miteinander verglichen.

<br>
</p>
</div>
<div class="victoria">
<br>
<h2>Formel 1 2019</h2>
<br>
<h3>Fahrphysik</h3>
<br>
<p>
Schon nach einer kurzen Zeit wird schnell klar, dass sobald man mit seinem Auto die Strecke verlässt, keinen Gripverlust zu befürchten hat. 
In der Realität gilt dies unbedingt zu vermeiden, da sowohl der Unterboden als auch die Reifen beschädigt werden können.
Des Weiteren dauert es eine bestimmte Zeit, bis sich die Reifen vom Fahren abseits der Strecke wieder erholte haben, wodurch man viel Zeit verliert.
Außerdem wird dadurch auch Sand bzw. Kies, je nachdem aus welchem Material die Auslaufzonen bestehen, auf die Strecke getragen, wodurch diese langsamer und schwieriger zu befahren ist. 
In diesem Zusammenhang muss ebenfalls erwähnt werden, dass man auch eine viel zu gute Bodenhaftung mit kalten Reifen hat.
Der Unterschied im Grip Niveau zu warmen Reifen ist viel zu gering. Dies entspricht in keinsterweise der Realität, da in echt
alles getan wird, um die Reifen im richtigen Temperaturfenster zu halten, da sie dort am besten performen.
In der Formel 1 ist das Ausbrechen des Hecks, auch Übersteuern genannt, nicht gerne gesehen und wird versucht zu vermeiden, da dies die Abnutzung der Reifen erhöht und wertvolle Zeit kostet.
Bei F1 2019 ist es allerdings so, dass ein Drift die Rundenzeit sogar noch verbessert, was im absoluten Gegensatz zur Realität steht.
Außerdem trägt in der Realität Übersteuern bzw. ein Drift zur Überhitzung der Hinterreifen bei, allerdings ist es fast unmöglich bei F1 2019 seine Hinterreifen zu überhitzen.
Als letztes sollte noch die Tatsache angesprochen werden, dass es im Gameplay möglich ist, Kurven auf der Strecke 1 bis 2 Gänge nideriger zu durchfahren als man es in der Realität tun würde.
Aufgrund des überspitzt dargestellten Drehmoments wird dies ermöglicht, ohne Zeit einzubüßen, was in der Realität undenkbar wäre.
</p>
<br>
<h3>Boxengasse</h3>
<br>
<p>
Was die Boxenstopps angeht, ist das Videospiel noch sehr weit von der Realität entfernt. 
Denn der Spieler ist lediglich Passagier und das Auto wird innerhalb der Boxengasse von einem Autopilot gesteuert.
Was den eigentlichen Boxenstopp angeht, ist ebenfalls alles automatisiert und der Spieler hat auch keine Möglichkeit einzugreifen.
Es ist lediglich dem Spieler selbst überlassen seinen Wagen durch den Boxengasseneingang- und ausgang zu steuern.
</p>
<br>
<h3>Schadensmodell</h3>
<br>
<p>
Grundsätzlich ist es nur möglich sich innerhalb des Gameplays seinen Frontflügel und seine Reifen kaputt zu fahren,
alle anderen Fahrzeugteile können nicht beschädigt werden.
Dies ist ebenfalls etwas, was sehr weit von der Realität entfernt ist, 
da bei echten Formel 1 Autos schon die kleinsten Berührungen reichen, um das Auto zu beschädigen.
In seltenen Fällen kann es innerhalb des Spiels noch vorkommen, dass das Drag Reduction System (DRS) und das Energy Recovery System (ERS) kurzzeitig ausfällt. 
Alle anderen Teile des Auto, wie zum Beispiel der Heckflügel oder die Seitenkästen, können nicht beschädigt werden. 
</p>
<br>
<br>
<div class="video-container-wrapper">
<div class="video-container">
<iframe src="https://www.youtube.com/embed/n2p1Ys041Cw" width="300" height="150" frameborder="0" allowfullscreen="allowfullscreen">
</iframe>
</div>
</div>
</div>
</br>
<div class="master">
<br>
<h2>Formel 1 2021</h2>
<br>
<p>
Was das Realitätsniveau angeht hat F1 2021 im Vergleich zum bereits vorgestellten F1 2019 einige Schritte nach vorne gemacht.
Die Schadenssimulation an sich wurde weiterentwickelt und nun reichen auch schon kleinste Berührungen aus, um einen Schaden am Auto zu verursachen.
Die Schadensempfindlichkeit des Wagens kann allerdings in den Einstellungen reguliert werden.
Des Weiteren gibt es noch mehr Neuerungen, auf die im Folgenden eingegangen wird. 
</p>
<br>
<h3>Fahrphysik</h3>
<br>
<p>Es ist nicht von der Hand zu weisen, dass das Fahrverhalten für F1 2021 noch einmal wesentlich verbessert wurde. 
Beispielsweise sind die Rennwägen weitaus gutmütiger. Das heißt, dass es beispielsweise leichter geworden ist,
ein ausbrechendes Heck abzufangen und Fehler ohne Rückspulfunktion zumindest zu einem gewissen Grad zu korrigieren.
Ob dies allerdings zu einer zunehmenden Realitätsnähe des Spiels beiträgt, kann durchaus bezweifelt werden.
Dies liegt daran, dass es in der Realität sehr schwer ist Fahrfehler zu korrigieren und diese meistens in einem Unfall oder 
mit dem Aussscheiden aus dem Rennen enden.
Des Weiteren ist der User jetzt auch dazu gezwungen, auf seinen Benzinverbrauch zu achten, 
um ein Rennen erfolgreich abzuschließen, was es in den Spielen zu vor noch nicht gab und als ein weiterer Schritt
in Richtung Realität angesehen werden kann.
</p>
<br>
<h3>Reifenverschleiß</h3>
<br>
<p>
Im Vergleich zu F1 2019 ist es in F1 2021 schwieriger geworden die Reifen im Qualifying im richtigen 
Temperaturfenster zu halten. Dies ist ein Problem, mit welchem die Fahrer auch in Wirklichkeit öfter 
Probleme haben. Allerdings beschränkt sich diese Schwierigkeit in der Realität nicht nur auf das Qualifying,
sondern ist auch während des Rennens ein oft thematisiertes Problem. Dies gilt allerdings nicht für das
Gameplay bei F1 2021, da es im Videospiel während des Rennens nur sehr selten zu Reifenproblemen kommt.
</p>
<br>
<h3>Schadensmodell</h3>
<br>
<p>
In F1 2021 sind neue Teile hinzugekommen, die am Formel 1 Rennwagen beschädigt werden können.
Allerdings sind nach wie vor Schäden am Unterboden, welche beispielsweise durch eine zu starke
Nutzung der Randsteine entstehen können, nicht möglich. 
Für mögliche Schäden am Frontflügel existieren lediglich drei unterschiedliche Stufen. 
Es ist eine leichte und starke Beschädigung des Flügels möglich, allerdings kann man ihn auch komplett verlieren.
Diese Schadenszenarien sind immer noch weit entfernt von der Realität und decken nicht alle möglichen Schadensebenen die entstehen können ab.
Generell ist das physikalische Verhalten bei Unfällen ebenfalls noch ein gutes Stück von der Realität entfernt.
</p>
<br>
<h3>Künstliche Intelligenz (KI)</h3>
<br>
<p>
Auch was die KI des Spiels betrifft ist noch viel Verbesserungspotenzial vorhanden.
Beispielsweise sind die gesetzten Bremspunkte, unabhängig davon welche Schwierigkeit man eingestellt hat,
manchmal etwas unrealistisch gesetzt.
Außerdem scheint das Überholen für die besten bzw. talentiersten Fahrer im Feld im Videospiel eine große Herausforderung darzustellen,
während Sie in der Realität nahezu jeden Fahrer ohne Probleme überholen können. 
</p>
<br>
<div class="video-container-wrapper">
<div class="video-container">
<iframe src="https://www.youtube.com/embed/gR40_80qShg" width="300" height="150" frameborder="0" allowfullscreen="allowfullscreen">
</iframe>
</div>
</div>
<br>
<br>
<h2>Fazit</h2>
<br>
<p>Grundsätzlich kann gesagt werden, dass eine positive Entwicklung hin zu 
einem immer realitätstreueren Spielvergnügen durchaus vorhanden ist. Allerdings wird es noch lange dauern, bis
man das Fahrverhalten der virutellen Rennwägen mit einem echten Formel 1 Rennwagen vergleichen kann.
Dies ist aber auch nicht der Anspruch dieser Art von Videospielen, da hier mehr der Spaß am spielen im Vordergrund
steht als realitätsnähe. Deswegen werden diese Art von Videospielen auch als "Hybrid-Rennspiele" bezeichnet, da diese
einer Kombination aus Spiel und Simulation entsprechen. Dementsprechend kann gesagt werden, für wen mehr der
Spielespaß im Vordergrund steht, für den sind die Formel 1 Spiele genau das richtige. Wer allerdings Wert auf
realitätsnähe legt, der sollte es lieber mit einem Formel 1 Simulator versuchen. </p>
</div>
<br>
<br>
EOH;


my_html_foot()

?>