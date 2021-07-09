<!DOCTYPE html>
<html>

  <head>

    <title>Rennkalender 2021</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
	<link rel="stylesheet" href="../CSS/menubar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

	<style>
	
	html,
	body {
	  height: 100%;
	  margin-left: 0%;
	  padding: 0;
	}

	#karte {
	  height: 90%;
	  width: 90%;
	  margin: 5%;
	}

	h2 {
    text-align: center;
	}
	</style>
	
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
$title ="karte";
my_html_head ( $title );  

$name_der_db  = "f1";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "users";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";  //Wird nicht mehr benutzt, wird durch die userid überprüft.

?>

<br>
	<h2> Rennkalender der Formel 1 Saison 2021 </h2>

    <div id="karte">
	<script>
	
	var meineKarte = L.map('karte').setView([51.162290, 10.462739], 2);

	L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
	  maxZoom: 18,
	  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(meineKarte);
	
	var meinMarker = L.marker([26.031715708904542, 50.511756136668915]).bindPopup(
		"<b>Bahrain International Circuit </b> <p> Im Rennkalender: 2004–2010, seit 2012 <br> Streckenlänge: 5,412 km <br> Rennlänge: 308,238 km in 57 Runden <br> Rundenrekord: 1:30,252 (2004, Michael Schumacher, Ferrari) <br> Rundenrekord Qualifikation: 1:27,264 (2020, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Lewis Hamilton (5) <br> Die meisten Poles: Lewis Hamilton/Sebastian Vettel (je 3)"
	).addTo(meineKarte);

  var meinMarker = L.marker([44.34442630533515, 11.715594829324445]).bindPopup(
		"<b>Emilia Romagna Grand Prix </b> <p> Im Rennkalender: 2020, 2021 <br> Streckenlänge: 4,909 km <br> Rennlänge: 309,049 km in 63 Runden <br> Rundenrekord: 1:15,484 (2020, Lewis Hamilton, Mercedes) <br> Rundenrekord Qualifikation: 1:13,609 (2020, Valtteri Bottas, Mercedes) <br> Die meisten Siege: Lewis Hamilton, Max Verstappen (je 1) <br> Die meisten Poles: Valtteri Bottas, Lewis Hamilton (je 1)"
	).addTo(meineKarte);
  
  var meinMarker = L.marker([37.23213846586531, -8.627348584866924]).bindPopup(
		"<b>Portuguese Grand Prix </b> <p> Im Rennkalender: 1958–1960, 1984–1996, 2020, 2021 <br> Streckenlänge: 4,635 km <br> Rennlänge: 306,826 km in 66 Runden <br> Rundenrekord: 1:18,750 (2020, Lewis Hamilton, Mercedes) <br> Rundenrekord Qualifikation: 1:16,466 (2020, Valtteri Bottas, Mercedes) <br> Die meisten Siege: Nigel Mansell/Alain Prost (je 3) <br> Die meisten Poles: Ayrton Senna (3)"
	).addTo(meineKarte);

  var meinMarker = L.marker([41.56873183070386, 2.258286903890934]).bindPopup(
		"<b>Spanish Grand Prix </b> <p> Im Rennkalender: seit 1991 <br> Streckenlänge: 4,655 km <br> Rennlänge: 307,104 km in 66 Runden <br> Rundenrekord: 1:18,183 (2020, Valtteri Bottas, Mercedes) <br> Rundenrekord Qualifikation: 1:15,406 (2019, Valtteri Bottas, Mercedes) <br> Die meisten Siege: Michael Schumacher (6) <br> Die meisten Poles: Michael Schumacher (7)"
	).addTo(meineKarte);

  var meinMarker = L.marker([43.73523270211274, 7.4218324830504105]).bindPopup(
		"<b>Monaco Grand Prix </b> <p> Im Rennkalender: 1950, seit 1955 <br> Streckenlänge: 3,337 km <br> Rennlänge: 260,286 km in 78 Runden <br> Rundenrekord: 1:12,909 (2021, Lewis Hamilton, Mercedes) <br> Rundenrekord Qualifikation: 1:10,166 (2019, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Ayrton Senna (6) <br> Die meisten Poles: Ayrton Senna (5)"
	).addTo(meineKarte);
  
  var meinMarker = L.marker([40.373733096526635, 49.85817609006498]).bindPopup(
		"<b>Azerbaijan Grand Prix </b> <p> Im Rennkalender: seit 2017 <br> Streckenlänge: 6,006 km <br> Rennlänge: 306,031 km in 51 Runden <br> Rundenrekord: 1:43,009 (2019, Charles Leclerc, Ferrari) <br> Rundenrekord Qualifikation: 1:40,495 (2019, Valtteri Bottas, Mercedes)"
	).addTo(meineKarte);

  var meinMarker = L.marker([43.24942826481836, 5.791803982459217]).bindPopup(
		"<b>French Grand Prix </b> <p> Im Rennkalender: 1950–1954, 1956–2008, seit 2018 <br> Streckenlänge: 5,842 km <br> Rennlänge: 309,626 km in 53 Runden <br> Rundenrekord: 1:32,740 (2019, Sebastian Vettel, Ferrari) <br> Rundenrekord Qualifikation: 1:28,319 (2019, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Michael Schumacher (8) <br> Die meisten Poles: Michael Schumacher (4)"
	).addTo(meineKarte);

  var meinMarker = L.marker([47.22049559238947, 14.767590478675974]).bindPopup(
		"<b>Austrian Grand Prix/Styrian Grand Prix </b> <p> Im Rennkalender: 1964, 1970–1987, 1997–2003, seit 2014 <br> Streckenlänge: 4,318 km <br> Rennlänge: 306,452 km in 71 Runden <br> Rundenrekord: 1:06:200 (2021, Max Verstappen, Red Bull Racing) <br> Rundenrekord Qualifikation: 1:02,939 (2020, Valtteri Bottas, Mercedes) <br> Die meisten Siege: Alain Prost, Max Verstappen (3) <br> Die meisten Poles: René Arnoux/Valtteri Bottas/Niki Lauda (je 3)"
	).addTo(meineKarte);

  var meinMarker = L.marker([52.07366280063156, -1.0131000327244324]).bindPopup(
		"<b>British Grand Prix </b> <p> Im Rennkalender: seit 1950 <br> Streckenlänge: 5,891 km <br> Rennlänge: 306,198 km in 52 Runden <br> Rundenrekord: 1:27,097 (2020, Max Verstappen, Red Bull-Honda) <br> Rundenrekord Qualifikation: 1:24,303 (2020, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Lewis Hamilton (7) <br> Die meisten Poles: Lewis Hamilton (7)"
	).addTo(meineKarte);

  var meinMarker = L.marker([47.582114127224585, 19.25387878300445]).bindPopup(
		"<b>Hungarian Grand Prix </b> <p> Im Rennkalender: seit 1986 <br> Streckenlänge: 4,381 km <br> Rennlänge: 306,663 km in 70 Runden <br> Rundenrekord: 1:16,627 (2020, Lewis Hamilton, Mercedes) <br> Rundenrekord Qualifikation: 1:13,447 (2020, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Lewis Hamilton (8) <br> Die meisten Poles: Lewis Hamilton/Michael Schumacher (7)"
	).addTo(meineKarte);

  var meinMarker = L.marker([50.4370475057689, 5.975473598336679]).bindPopup(
		"<b>Belgian Grand Prix </b> <p> Im Rennkalender: 1950–1956, 1958, 1960–1968, 1970, 1972–2002, 2004–2005, seit 2007 <br> Streckenlänge: 7,004 km <br> Rennlänge: 308,176 km in 44 Runden <br> Rundenrekord: 1:46,286 (2018, Valtteri Bottas, Mercedes) <br> Rundenrekord Qualifikation: 1:41,252 (2020, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Michael Schumacher (6) <br> Die meisten Poles: Lewis Hamilton (6)"
	).addTo(meineKarte);

  var meinMarker = L.marker([52.38779975128846, 4.544985273877893]).bindPopup(
		"<b>Dutch Grand Prix </b> <p> Im Rennkalender: 1952, 1953, 1955, 1958–1971, 1973–1985, ab 2021 <br> Streckenlänge: 4,252 km <br> Rennlänge: 301,892 km in 71 Runden <br> Rundenrekord: 1:16,538 (1985, Alain Prost, McLaren-TAG) <br> Rundenrekord Qualifikation: 1:11,074 (1985, Nelson Piquet, Brabham-BMW) <br> Die meisten Siege: Jim Clark (4) <br> Die meisten Poles: René Arnoux (3)"
	).addTo(meineKarte);

  var meinMarker = L.marker([45.62231406137463, 9.28607967260212]).bindPopup(
		"<b>Italian Grand Prix </b> <p> Im Rennkalender: seit 1950 <br> Streckenlänge: 5,793 km <br> Rennlänge: 306,720 km in 53 Runden <br> Rundenrekord: 1:21,046 (2004, Rubens Barrichello, Ferrari) <br> Rundenrekord Qualifikation: 1:18,887 (2020, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Lewis Hamilton/Michael Schumacher (je 5) <br> Die meisten Poles: Lewis Hamilton (7)"
	).addTo(meineKarte);

  var meinMarker = L.marker([43.41012537125325, 39.96973450046644]).bindPopup(
		"<b>Russian Grand Prix </b> <p> Im Rennkalender: seit 2014 <br> Streckenlänge: 5,848 km <br> Rennlänge: 309,944 km in 53 Runden <br> Rundenrekord: 1:35,761 (2019, Lewis Hamilton, Mercedes) <br> Rundenrekord Qualifikation: 1:31,304 (2020, Lewis Hamilton, Mercedes)  <br> Die meisten Siege: Lewis Hamilton (4) <br> Die meisten Poles: Lewis Hamilton/Nico Rosberg (2)"
	).addTo(meineKarte);
  
  var meinMarker = L.marker([40.95805171866285, 29.412393729206062]).bindPopup(
		"<b>Turkish Grand Prix </b> <p> Im Rennkalender: 2005–2011, 2020–2021 <br> Streckenlänge: 5,338 km <br> Rennlänge: 309,396 km in 58 Runden <br> Rundenrekord: 1:24,770 (2005, Juan Pablo Montoya, McLaren-Mercedes) <br> Rundenrekord Qualifikation: 1:25,049 (2011, Sebastian Vettel, Red Bull-Renault) <br> Die meisten Siege: Felipe Massa (3) <br> Die meisten Poles: Felipe Massa (3)"
	).addTo(meineKarte);

  var meinMarker = L.marker([34.845672726263665, 136.53947790993766]).bindPopup(
		"<b>Japanese Grand Prix </b> <p> Im Rennkalender: 1976–1977, seit 1987 <br> Streckenlänge: 5,807 km <br> Rennlänge: 307,573 km in 53 Runden <br> Rundenrekord: 1:30,983 (2019, Lewis Hamilton, Mercedes) <br> Rundenrekord Qualifikation: 1:27,064 (2019, Sebastian Vettel, Ferrari) <br> Die meisten Siege: Michael Schumacher (6) <br> Die meisten Poles: Michael Schumacher (8)"
	).addTo(meineKarte);

  var meinMarker = L.marker([30.13471996403446, -97.63504644046603]).bindPopup(
		"<b>United States Grand Prix </b> <p> Im Rennkalender: 1959–2019 <br> Streckenlänge: 5,516 km <br> Rennlänge: 308,896 km in 56 Runden <br> Rundenrekord: 1:36,169 (2019, Charles Leclerc, Ferrari) <br> Rundenrekord Qualifikation: 1:32,029 (2019, Valtteri Bottas, Mercedes) <br> Die meisten Siege: Lewis Hamilton (6) <br> Die meisten Poles: Lewis Hamilton/Michael Schumacher (je 4)"
	).addTo(meineKarte);

  var meinMarker = L.marker([19.405985264147436, -99.09198516161604]).bindPopup(
		"<b>Mexican Grand Prix </b> <p> Im Rennkalender: 1963–1970, 1986–1992, seit 2015 <br> Streckenlänge: 4,304 km <br> Rennlänge: 305,584 km in 71 Runden <br> Rundenrekord: 1:18,741 (2018, Valtteri Bottas, Mercedes) <br> Rundenrekord Qualifikation: 1:14,758 (2019, Max Verstappen, Red Bull-Honda) <br> Die meisten Siege: Jim Clark/Lewis Hamilton/Nigel Mansell/Alain Prost/Max Verstappen (je 2) <br> Die meisten Poles: Jim Clark (4)"
	).addTo(meineKarte);

  var meinMarker = L.marker([-23.70107692161238, -46.69711755395441]).bindPopup(
		"<b>Brazilian Grand Prix </b> <p> Im Rennkalender: 1973–2019 <br> Streckenlänge: 4,309 km <br> Rennlänge: 305,909 km in 71 Runden <br> Rundenrekord: 1:10,540 (2018, Valtteri Bottas, Mercedes) <br> Rundenrekord Qualifikation: 1:07,281 (2018, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Alain Prost (6) <br> Die meisten Poles: Ayrton Senna (6)"
	).addTo(meineKarte);

  var meinMarker = L.marker([22.29758599323335, 40.4121185743208]).bindPopup(
		"<b>Saudi Arabian Grand Prix </b> <p> Im Rennkalender: 2021 <br> Streckenlänge: 6,175 km <br> Rennlänge: - <br> Rundenrekord: - <br> Rundenrekord Qualifikation: - <br> Die meisten Siege: - <br> Die meisten Poles: -"
	).addTo(meineKarte);

  var meinMarker = L.marker([24.475282858542098, 54.60522324381918]).bindPopup(
		"<b>Abu Dhabi Grand Prix </b> <p> Im Rennkalender: seit 2009 <br> Streckenlänge: 5,554 km <br> Rennlänge: 305,355 km in 55 Runden <br> Rundenrekord: 1:39,283 (2019, Lewis Hamilton, Mercedes) <br> Rundenrekord Qualifikation: 1:34,779 (2019, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Lewis Hamilton (5) <br> Die meisten Poles: Lewis Hamilton (5)"
	).addTo(meineKarte);

	
	</script>
	</div>
  </body>

</html>