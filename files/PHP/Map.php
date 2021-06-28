<!DOCTYPE html>
<html>

  <head>

    <title>Erste Karte</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

	<style>
	
	html,
	body {
	  height: 100%;
	  margin-left: 10%;
	  padding: 0;
	}

	#karte {
	  height: 90%;
	  width: 70%;
	  margin: 5%;
	}
	
	</style>
	
  </head>

  <body>

    <div id="karte"></div>
	<script>
	
	var meineKarte = L.map('karte').setView([51.162290, 10.462739], 6);

	L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
	  maxZoom: 18,
	  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(meineKarte);
	
	</script>
	
  </body>

</html>