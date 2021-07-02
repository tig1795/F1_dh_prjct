<!DOCTYPE html>
<html>

  <head>

    <title>Erste Karte</title>

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

  <div class="menu-bar">
    <div class="logo">
      <a href="Home.php"><img src="../../images/F1_Logo.png" alt="" width="140" height="80"/></a>
    </div>
<ul>
<li><a href="Home.php"><i class="fa fa-home"></i>Home</a></li>
<li><a href="#"><i class="fa fa-calculator"></i>Statistik</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="index.php">Fahrerwertung</a></li>
            <li><a href="constructeur.php">Konstrukteure</a></li>
            <li><a href="#">Team</a></li>
        </ul>
    </div>
</li>
<li><a href="#"><i class="fa fa-car"></i>Fahrer</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="#">Web Designing</a></li>
            <li class="hover-me"><a href="#">Marketing</a><!-- <i class="fa fa-angle-right"></i> -->
              <!--<div class="sub-menu-2">
                <ul>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Social Media</a></li>
                    <li><a href="#">Emial Marketing</a></li>
                </ul>
              </div>  -->          
            </li>
            <li class="hover-me"><a href="#">Mobile App</a><!-- <i class="fa fa-angle-right"></i> -->
            <!-- <div class="sub-menu-2">
                <ul>
                    <li><a href="#">Android App</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Ionic App</a></li>
                    <li><a href="#">Flutter App</a></li>
                    <li><a href="#">Unity App</a></li>
                </ul>
              </div>  -->        
          </li>
        </ul>
    </div>
</li>
<li><a href="#"><i class="fa fa-trophy"></i>Pokale</a></li>
<li class="active"><a href="Map.php"><i class="fa fa-calendar"></i>Kalender</a></li>
<li><a href="About.php"><i class="fa fa-info"></i>About</a></li>
<li><a href="login.php"><i class="fa fa-user-circle-o"></i>Login</a></li>
</ul>
</div>

<br>
	
	<h2> Rennkalender der Formel 1 Saison 2021 </h2>

    <div id="karte"></div>
	<script>
	
	var meineKarte = L.map('karte').setView([51.162290, 10.462739], 2);

	L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
	  maxZoom: 18,
	  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(meineKarte);
	
	var meinMarker = L.marker([26.031715708904542, 50.511756136668915]).bindPopup(
		"<b>Bahrain International Circuit </b> <p> Im Rennkalender: 2004–2010, seit 2012 <br> Streckenlänge: 5,412 km <br> Rennlänge: 308,238 km in 57 Runden <br> Rundenrekord: 1:30,252 (2004, Michael Schumacher, Ferrari) <br> Rundenrekord Qualifikation: 1:27,264 (2020, Lewis Hamilton, Mercedes) <br> Die meisten Siege: Lewis Hamilton (5) <br> Die meisten Poles: Lewis Hamilton/Sebastian Vettel (je 3)"
	).addTo(meineKarte);

	</script>
	
  </body>

</html>